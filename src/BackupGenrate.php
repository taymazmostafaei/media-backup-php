<?php

namespace Taymaz\Mediabackup;

use Taymaz\Mediabackup\Filesystem\Authorized;
use Taymaz\Mediabackup\Filesystem\Reader;
use Taymaz\Mediabackup\Filesystem\Zip;

/**
 * main controller role 
 * list files , authorize , genrate zip file
 */
class BackupGenrate
{
    use Authorized;
    use BackupMethodes;
    use Zip;

    public function __construct(ConfigLoader $config)
    {
        $config->configs->Directories;
        $filesReader = new Reader();
        $files = $filesReader->fileList($config->configs->Directories);

        $Authorizedfiles = [];
        //check for acceptable files
        foreach ($files as $file) {
            if ($this->isAcceptable($file)) {
                array_push($Authorizedfiles, $file);
            }
        }
        
        $backupFile = $this->createZip($Authorizedfiles, $config);
        $this->setPath($backupFile);
        $this->setFilename($backupFile);
    }
}
