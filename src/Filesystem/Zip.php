<?php

namespace Taymaz\Mediabackup\Filesystem;

use Taymaz\Mediabackup\ConfigLoader;
use DivineOmega\CliProgressBar\ProgressBar;

use ZipArchive;

trait Zip
{
    public function createZip($files, ConfigLoader $config)
    {

        $max = sizeof($files);

        $progressBar = new ProgressBar;
        $progressBar->setMaxProgress($max);


        $zip = new ZipArchive;
        $bacupZipFile = 'backup-' . date('Y-m-d') . '.zip';
        $BackupExportPath = $config->configs->BackupExportPath;
        if ($zip->open($BackupExportPath == '.' ? $bacupZipFile : $BackupExportPath . '/' . $bacupZipFile, ZipArchive::CREATE) === TRUE) {

            foreach ($files as $file) {

                $progressBar->advance()->display();
                $zip->addFile($file, $file);
            }

            $zipFilePath = $zip->filename;
            $zip->close();

            $progressBar->complete();

            return $zipFilePath;
        }
    }
}
