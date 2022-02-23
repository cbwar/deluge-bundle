<?php

namespace Cbwar\Bundle\Deluge\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('cbwar_deluge');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
