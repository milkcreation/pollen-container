<?php

declare(strict_types=1);

namespace Pollen\Container;

/**
 * @deprecated
 */
class BaseServiceProvider extends ServiceProvider implements BootableServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function boot(): void {}
}