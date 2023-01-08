<?php

namespace Taymaz\Mediabackup;

use Taymaz\Mediabackup\Filesystem\Authorized;
use Taymaz\Mediabackup\Filesystem\Reader;
use Taymaz\Mediabackup\Filesystem\Zip;

class BackupGenrate
{
    use Authorized;
    use Zip;

    public function __construct(ConfigLoader $config)
    {
        $config->configs->Directories;
        $filesReader = new Reader();
        $files = $filesReader->fileList($config->configs->Directories);

        //print_r($files);
        $Authorizedfiles = [];
        //check 
        foreach ($files as $file) {
            if ($this->isAcceptable($file)) {
                array_push($Authorizedfiles, $file);
            }
        }
        
        $backupFiles = $this->createZip($Authorizedfiles, $config);
        return $backupFiles;
    }
}
