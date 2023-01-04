<?php

namespace Taymaz\Mediabackup;

use Taymaz\Mediabackup\Filesystem\Authorized;
use Taymaz\Mediabackup\Filesystem\Reader;

class BackupGenrate
{
    use Authorized;

    public function __construct(ConfigLoader $config)
    {
        $config->configs->Directories;
        $filesReader = new Reader();
        $files = $filesReader->fileList($config->configs->Directories);

        print_r($files);
        $Authorizedfiles = [];
        //check 
        foreach ($files as $file) {
            if ($this->isAcceptable($file)) {
                array_push($Authorizedfiles, $file);
            }
        }
        print_r($Authorizedfiles);
    }
}
