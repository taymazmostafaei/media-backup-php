<?php

use Taymaz\Mediabackup\Mediabackup;

require "../vendor/autoload.php";

Mediabackup::configFile("./config.json")->CreateBackups(function($files){
    #var_dump( $files );
});