<?php
namespace RemiSan\Command;

interface ContextAwareCommand
{
    /**
     * Returns the context
     *
     * @return Context
     */
    public function getContext();
}
