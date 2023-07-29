<?php
    namespace Plugin\UnivaPay\Form\Type;

    use Eccube\Form\Type\MasterType;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class SubscriptionPeriodType extends AbstractType
    {
       /**
         * {@inheritdoc}
         */
        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'class' => 'Plugin\UnivaPay\Entity\SubscriptionPeriod',
                'label' => '',
            ]);
        }

        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix()
        {
            return 'subscription_period';
        }

        /**
         * {@inheritdoc}
         */
        public function getParent()
        {
            return MasterType::class;
        }
    }
