<?php

namespace App\Acme\TestBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AcmeTestCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $configs = $container->getExtensionConfig('acme_test');

        $taggedServices = $container->findTaggedServiceIds('arbitrary-services');

        // Great - got the tagged service definitions
        // Now going to wire things passed via config into those services (e.g. via binding)

        dump('From CompilerPass:');
        dump($taggedServices);
        dump($configs);
    }
}

// In my full use-case, I want to tag different directories of services to receive different params based upon
// config options (e.g. services tagged with inject.alpha get parameters based upon config keys in acme -> alpha)
