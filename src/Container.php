<?php

declare(strict_types=1);

namespace Pollen\Container;

use League\Container\Container as BaseContainer;
use League\Container\ReflectionContainer;

class Container extends BaseContainer
{
    /**
     * Activation de l'auto wring
     *
     * @param bool $cached
     *
     * @return static
     */
    public function enableAutoWiring(bool $cached = false): self
    {
        $reflectionContainer = new ReflectionContainer();

        if ($cached === true) {
            $reflectionContainer->cacheResolutions();
        }

        return $this->delegate($reflectionContainer);
    }
}