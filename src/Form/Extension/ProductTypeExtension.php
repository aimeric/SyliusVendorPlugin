<?php

namespace Odiseo\SyliusVendorPlugin\Form\Extension;

use Odiseo\SyliusVendorPlugin\Form\Type\VendorChoiceType;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('vendor', VendorChoiceType::class, [
            'multiple' => false,
            'expanded' => false,
            'label' => 'odiseo_sylius_vendor.form.product.select_vendor',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType(): string
    {
        return ProductType::class;
    }
}
