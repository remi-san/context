<?php

namespace RemiSan\Context;

class ContextContainer
{
    /**
     * @var Context
     */
    private static $context = null;

    /**
     * @param Context $context
     */
    public static function setContext(Context $context = null)
    {
        self::$context = $context;
    }

    /**
     * @return Context
     */
    public static function getContext()
    {
        return self::$context;
    }

    /**
     */
    public static function reset()
    {
        self::$context = null;
    }
}
