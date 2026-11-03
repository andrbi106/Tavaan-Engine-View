<?php

declare(strict_types=1);

namespace Tavaan\Engine\View;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Escaper — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\View\Contracts\EscaperInterface
 */
final class Escaper implements Contracts\EscaperInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function html(/* ... */): mixed
    {
        // TODO: پیاده‌سازی html مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function attr(/* ... */): mixed
    {
        // TODO: پیاده‌سازی attr مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function js(/* ... */): mixed
    {
        // TODO: پیاده‌سازی js مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function url(/* ... */): mixed
    {
        // TODO: پیاده‌سازی url مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function css(/* ... */): mixed
    {
        // TODO: پیاده‌سازی css مطابق مستندات (سند §3 API).
        return null;
    }
}