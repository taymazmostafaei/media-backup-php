<?php

namespace Taymaz\Mediabackup\Filesystem;

use Taymaz\Mediabackup\ConfigLoader;
use ZipArchive;

trait Zip
{
    public function createZip($files, ConfigLoader $config)
    {

        $zip = new ZipArchive;
        $bacupZipFile = 'backup-'. date('Y-m-d') .'.zip';
        $BackupExportPath = $config->configs->BackupExportPath;
        if ($zip->open($BackupExportPath == '.' ? $bacupZipFile : $BackupExportPath . '/' . $bacupZipFile , ZipArchive::CREATE) === TRUE) {

            foreach ($files as $file) {
                $zip->addFile($file, $file);
            }

            $zipFilePath = $zip->filename;
            $zip->close();

            return $zipFilePath;
        }


    }
}
