<?php
namespace Tinypng\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tinypng');

        $rootNode
            ->children()
                ->scalarNode('api_key')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
