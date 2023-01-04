<?php

namespace Taymaz\Mediabackup\Filesystem;

class Reader
{
    public function fileList($Directories)
    {
        $fileslist = [];
        foreach ($Directories as $Directory) {
            $files = glob($Directory . "/*");

            foreach ($files as $file) {
                if (!is_dir($file)) {
                    array_push($fileslist, $file);
                }
            }

        }

        return $fileslist;
    }

}
