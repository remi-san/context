<?php
namespace RemiSan\Command;

interface Context
{
    /**
     * @return mixed
     */
    public function getValue();
}
