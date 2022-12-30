<?php

use Taymaz\Mediabackup\Mediabackup;

require "../vendor/autoload.php";


Mediabackup::CreateBackups(function($files){
    print_r( $files );
});