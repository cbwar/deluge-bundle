<?php

namespace Cbwar\Bundle\Deluge;

use Cbwar\Bundle\Deluge\DependencyInjection\DelugeExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CbwarDelugeBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new DelugeExtension();
    }
}
