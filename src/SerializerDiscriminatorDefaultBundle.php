<?php
declare(strict_types=1);

namespace SoftFineWare\SerializerDiscriminatorDefaultBundle;

use SoftFineWare\SerializerDiscriminatorDefault\DiscriminatorDefaultNormalizer;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class SerializerDiscriminatorDefaultBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->setDefinition(
            DiscriminatorDefaultNormalizer::class,
            new Definition(DiscriminatorDefaultNormalizer::class)
        )->setAutoconfigured(true)
            ->setAutowired(true)
            ->setPublic(true)
            ->addTag('serializer.normalizer', ['priority' => 999]);
    }
}