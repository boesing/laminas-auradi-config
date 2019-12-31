<?php

/**
 * @see       https://github.com/laminas/laminas-auradi-config for the canonical source repository
 * @copyright https://github.com/laminas/laminas-auradi-config/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-auradi-config/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\AuraDi\Config\TestAsset;

use Psr\Container\ContainerInterface;

class Delegator1Factory
{
    public function __invoke(ContainerInterface $container, $name, callable $callback)
    {
        $service = $callback();
        $service->inject(static::class);

        return $service;
    }
}