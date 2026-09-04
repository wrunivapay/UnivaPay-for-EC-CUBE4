<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Events;

use UnivaPay\ApiHelper;

class UnknownEvent
{
    /**
     * Creates an instance of the UnknownEvent type.
     *
     * @param mixed $data The actual payload from the event's request.
     */
    public static function init($data): self
    {
        return new self($data);
    }

    private $data;

    private function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the actual payload from the event's request.
     *
     * @return mixed The request payload of an unknown event.
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Converts the UnknownEvent object to a human-readable string representation.
     *
     * @return string The string representation of the UnknownEvent object.
     */
    public function __toString()
    {
        return ApiHelper::stringify('UnknownEvent', ['data' => $this->data]);
    }
}
