<?php
namespace RemiSan\Command;

use League\Event\EventInterface;

interface ErrorEventHandler
{
    /**
     * Handles an error
     *
     * @param  EventInterface $error
     * @param  mixed          $context
     *
     * @return void
     */
    public function handle(EventInterface $error, $context = null);
}
