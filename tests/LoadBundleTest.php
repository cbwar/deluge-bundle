<?php

namespace Tests;

use Cbwar\Bundle\Deluge\CbwarDelugeBundle;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class LoadBundleTest extends KernelTestCase
{

    /**
     * @test
     */
    public function it_must_load_the_bundle_successfully(): void
    {
        $kernel = static::bootKernel();
        self::assertInstanceOf(CbwarDelugeBundle::class, $kernel->getBundle("CbwarDelugeBundle"));
    }

}
