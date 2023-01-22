<?php

namespace Taymaz\Mediabackup;

trait BackupMethodes
{
    public $path;
    public $filename;

    public function setPath($path){
        $this->path = $path;
    }

    public function setFilename($filename){
        $this->filename = $filename;
    }

    public function remove(){
        return unlink($this->path);
    }
}
