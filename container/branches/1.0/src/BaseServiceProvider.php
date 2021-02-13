<?php

declare(strict_types=1);

namespace Pollen\Container;

use League\Container\ServiceProvider\AbstractServiceProvider;

class BaseServiceProvider extends AbstractServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function boot(): void {}

    /**
     * @inheritDoc
     */
    public function register(): void {}
}