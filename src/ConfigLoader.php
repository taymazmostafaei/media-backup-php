<?php

namespace Taymaz\Mediabackup;

use JsonCollectionParser\Parser;

class ConfigLoader
{

    public $config;

    public function __construct(string $path = null)
    {
        $parser = new Parser();
        $parser->parseAsObjects($path, function ($config) {
            
            $this->config = $config;
        });
    }

    
}
