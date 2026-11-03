<?php

declare(strict_types=1);

namespace Tavaan\Engine\View;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\View\Contracts\ViewFactoryInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ViewFactoryServiceProvider — ثبت سرویس‌های موتور ViewFactory.
 */
final class ViewFactoryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ViewFactoryInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new ViewFactory($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('view', $this->app->get(ViewFactoryInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\View\Console\View_cacheCommand::class;
        $this->commands[] = \Tavaan\Engine\View\Console\View_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\View\Console\View_directivesCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ViewFactoryInterface::class,
            'view',
        ];
    }
}