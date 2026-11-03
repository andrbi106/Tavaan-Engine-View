<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Contracts;

/**
 * قرارداد View.
 *
 * @see \Tavaan\Engine\View\View
 * @api 1.0
 */
interface ViewInterface
{
    /**
     * متد render.
     *
     * @return mixed
     */
    public function render(/* ... */): mixed;

    /**
     * متد with.
     *
     * @return mixed
     */
    public function with(/* ... */): mixed;

    /**
     * متد withData.
     *
     * @return mixed
     */
    public function withData(/* ... */): mixed;

    /**
     * متد getData.
     *
     * @return mixed
     */
    public function getData(/* ... */): mixed;

    /**
     * متد nest.
     *
     * @return mixed
     */
    public function nest(/* ... */): mixed;

    /**
     * متد extends.
     *
     * @return mixed
     */
    public function extends(/* ... */): mixed;

    /**
     * متد section.
     *
     * @return mixed
     */
    public function section(/* ... */): mixed;
}