<?php

declare(strict_types=1);

namespace Pollen\Container;

use League\Container\Container as BaseContainer;
use League\Container\ReflectionContainer;

class Container extends BaseContainer implements ContainerInterface
{
    /**
     * @inheritDoc
     */
    public function enableAutoWiring(bool $cached = false): ContainerInterface
    {
        $reflectionContainer = new ReflectionContainer();

        if ($cached === true) {
            $reflectionContainer->cacheResolutions();
        }

        return $this->delegate($reflectionContainer);
    }
}