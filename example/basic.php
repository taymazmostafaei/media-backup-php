<?php

use Taymaz\Mediabackup\Mediabackup;

require "../vendor/autoload.php";

Mediabackup::configFile("./config.json")->CreateBackup(function($backup){
    echo $backup->backupFile;
    $backup->removeBackup();
});