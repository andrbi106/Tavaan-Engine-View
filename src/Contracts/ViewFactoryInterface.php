<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Contracts;

/**
 * قرارداد ViewFactory.
 *
 * @see \Tavaan\Engine\View\ViewFactory
 * @api 1.0
 */
interface ViewFactoryInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد share.
     *
     * @return mixed
     */
    public function share(/* ... */): mixed;

    /**
     * متد exists.
     *
     * @return mixed
     */
    public function exists(/* ... */): mixed;

    /**
     * متد addNamespace.
     *
     * @return mixed
     */
    public function addNamespace(/* ... */): mixed;

    /**
     * متد addLocation.
     *
     * @return mixed
     */
    public function addLocation(/* ... */): mixed;

    /**
     * متد directive.
     *
     * @return mixed
     */
    public function directive(/* ... */): mixed;

    /**
     * متد composer.
     *
     * @return mixed
     */
    public function composer(/* ... */): mixed;

    /**
     * متد component.
     *
     * @return mixed
     */
    public function component(/* ... */): mixed;

    /**
     * متد renderEach.
     *
     * @return mixed
     */
    public function renderEach(/* ... */): mixed;

    /**
     * متد file.
     *
     * @return mixed
     */
    public function file(/* ... */): mixed;

    /**
     * متد first.
     *
     * @return mixed
     */
    public function first(/* ... */): mixed;
}