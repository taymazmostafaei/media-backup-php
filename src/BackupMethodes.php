<?php

namespace Taymaz\Mediabackup;

/**
 * public function for package user
 * features into package after genrate backup
 */
trait BackupMethodes
{
    public $path;
    public $filename;

    protected function setPath($path){
        $this->path = $path;
    }

    protected function setFilename($filename){
        $this->filename = $filename;
    }

    public function remove(){
        return unlink($this->path);
    }
}
