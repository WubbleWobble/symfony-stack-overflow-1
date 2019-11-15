<?php

namespace App\Acme\TestBundle;

use App\Acme\TestBundle\DependencyInjection\Compiler\AcmeTestCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeTestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AcmeTestCompilerPass());
    }
}