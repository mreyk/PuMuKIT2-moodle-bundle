<?php

namespace Pumukit\MoodleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('pumukit_moodle');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
          ->children()
            ->scalarNode('password')
              ->defaultValue('ThisIsASecretPasswordChangeMe')
              ->info('shared secret  between Moodle and Pumukit')
            ->end()
            ->scalarNode('role')
              ->defaultValue('actor')
              ->info('Role used to filter persons in multimedia object')
            ->end()
            ->scalarNode('naked_backoffice_domain')
              ->defaultFalse()
              ->info('Domain or subdomain used to access into the naked backoffice')
            ->end()
            ->scalarNode('naked_backoffice_background')
              ->defaultValue('white')
              ->info('CSS color used in the naked backoffice background')
            ->end()
            ->scalarNode('naked_backoffice_color')
              ->defaultValue('#ED6D00')
              ->info('CSS color used in the naked backoffice as main color')
            ->end()
            ->scalarNode('naked_custom_css_url')
              ->defaultValue(null)
              ->info('Custom CSS URL')
            ->end()
          ->end()
        ;

        return $treeBuilder;
    }
}
