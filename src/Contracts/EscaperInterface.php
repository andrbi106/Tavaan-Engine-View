<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Contracts;

/**
 * قرارداد Escaper.
 *
 * @see \Tavaan\Engine\View\Escaper
 * @api 1.0
 */
interface EscaperInterface
{
    /**
     * متد html.
     *
     * @return mixed
     */
    public function html(/* ... */): mixed;

    /**
     * متد attr.
     *
     * @return mixed
     */
    public function attr(/* ... */): mixed;

    /**
     * متد js.
     *
     * @return mixed
     */
    public function js(/* ... */): mixed;

    /**
     * متد url.
     *
     * @return mixed
     */
    public function url(/* ... */): mixed;

    /**
     * متد css.
     *
     * @return mixed
     */
    public function css(/* ... */): mixed;
}