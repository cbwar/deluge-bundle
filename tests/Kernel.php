<?php

namespace Tests;

use Cbwar\Bundle\Deluge\CbwarDelugeBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerConfigurator $container): void
    {
                $container->import('../src/Resources/config/services.yaml');
        //        $container->import('../src/Resources/config/{services}_'.$this->environment.'.yaml');
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {

    }

    public function registerBundles(): iterable
    {
        $bundles = [
            FrameworkBundle::class,
            CbwarDelugeBundle::class,
        ];
        foreach ($bundles as $class) {
            yield new $class();
        }
    }


}
