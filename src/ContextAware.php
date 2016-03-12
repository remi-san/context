<?php
namespace RemiSan\Command;

interface ContextAware
{
    /**
     * Returns the context
     *
     * @return Context
     */
    public function getContext();
}
