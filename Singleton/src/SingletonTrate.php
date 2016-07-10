<?php

namespace Src;

trait Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }
    
    private function __construct() {}
    
    final public function __clone()
    {
        throw new SingletonException("It's a Singleton. Cloning is forbidden");
    }
    
    final public function __wakeup()
    {
        throw new SingletonException("It's a Singleton. Waking is forbidden");
    }
}