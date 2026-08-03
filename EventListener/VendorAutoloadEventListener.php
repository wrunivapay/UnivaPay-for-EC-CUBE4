<?php

namespace Plugin\UnivaPay\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class VendorAutoloadEventListener implements EventSubscriberInterface
{
    private static $registered = false;

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 4096],
        ];
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        self::register();
    }

    public static function register()
    {
        if (self::$registered) {
            return;
        }

        self::$registered = true;

        $vendorDir = dirname(__DIR__) . '/Resource/vendor';
        $composerDir = $vendorDir . '/composer';

        if (!file_exists($composerDir . '/autoload_classmap.php')) {
            return;
        }

        $rootLoader = null;
        foreach (spl_autoload_functions() as $function) {
            if (is_array($function) && $function[0] instanceof \Composer\Autoload\ClassLoader) {
                $rootLoader = $function[0];
                break;
            }
        }

        if ($rootLoader === null) {
            require_once $vendorDir . '/autoload.php';
            return;
        }

        $classMap = require $composerDir . '/autoload_classmap.php';
        if ($classMap) {
            $rootLoader->addClassMap($classMap);
        }

        if (file_exists($composerDir . '/autoload_psr4.php')) {
            $psr4 = require $composerDir . '/autoload_psr4.php';
            foreach ($psr4 as $prefix => $paths) {
                $rootLoader->addPsr4($prefix, $paths);
            }
        }

        if (file_exists($composerDir . '/autoload_namespaces.php')) {
            $psr0 = require $composerDir . '/autoload_namespaces.php';
            foreach ($psr0 as $prefix => $paths) {
                $rootLoader->add($prefix, $paths);
            }
        }

        if (file_exists($composerDir . '/autoload_files.php')) {
            $files = require $composerDir . '/autoload_files.php';
            foreach ($files as $file) {
                require_once $file;
            }
        }
    }
}
