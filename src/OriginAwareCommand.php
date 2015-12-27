<?php
namespace RemiSan\Command;

interface OriginAwareCommand
{
    /**
     * Returns the origin
     *
     * @return Origin
     */
    public function getOrigin();
}
