<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * view:clear command.
 */
final class View_clearCommand implements CommandInterface
{
    public function name(): string
    {
        return 'view:clear';
    }

    public function description(): string
    {
        return 'Run view:clear (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
