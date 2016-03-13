<?php

namespace RemiSan\Context;

interface ContextAware
{
    /**
     * Returns the context.
     *
     * @return Context
     */
    public function getContext();
}
