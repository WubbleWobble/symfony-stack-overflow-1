<?php

namespace App\Acme\TestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('acme_test');
        $treeBuilder
            ->getRootNode()
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('email_sender')->isRequired()->end()
                ->scalarNode('email_title')->defaultValue('Notification email')->end()
            ->end();

        return $treeBuilder;
    }
}
