<?php
namespace RemiSan\Command;

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
        static::$context = $context;
    }

    /**
     * @return Context
     */
    public static function getContext()
    {
        return static::$context;
    }

    /**
     * @return void
     */
    public static function reset()
    {
        static::$context = null;
    }
}
