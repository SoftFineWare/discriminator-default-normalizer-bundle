<?php
declare(strict_types=1);

namespace Legion112\SerializerDiscriminatorDefaultBundle\DependencyInjection;

use Legion112\SerializerDiscriminatorDefault\DiscriminatorDefaultNormalizer;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;

class SerializerDiscriminatorDefaultExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $container->setDefinition(
            DiscriminatorDefaultNormalizer::class,
            new Definition(DiscriminatorDefaultNormalizer::class)
        )->setAutoconfigured(true)
            ->setAutowired(true)
            ->addTag('serializer.normalizer', ['priority' => 999]);
    }
}