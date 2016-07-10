<?php

class Config
{
    use Src\Singleton;
    
    private $config;
    
    private function __construct()
    {
        $this->config = require _CONFIG_;
    }
    
    public function setConfig($key, $value)
    {
        $this->config[$key] = $value;
    }
    
    public function getConfig($key)
    {
        return $this->config[$key];
    }
}