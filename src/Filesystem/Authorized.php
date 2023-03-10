<?php

namespace Taymaz\Mediabackup\Filesystem;

trait Authorized
{
    public $Pictures = [
        'jpg',
        'jpeg',
        'jfif',
        'pjpeg',
        'pjp',
        'png',
        'svg',
        'webp',
        'png',

    ];

    public $Audios = [
        '3gp',
        'aa',
        'aac',
        'aax',
        'act',
        'aiff',
        'alac',
        'amr',
        'ape',
        'au',
        'awb',
        'dss',
        'dvf',
        'flac',
        'gsm',
        'iklax',
        'ivs',
        'm4a',
        'm4b',
        'm4p',
        'mmf',
        'mp3',
        'mpc',
        'msv',
        'nmf',
        'mogg',
        'ogg',
        'oga',
        'opus',
        'ra',
        'rm',
        'raw',
        'rf64',
        'sln',
        'tta',
        'voc',
        'vox',
        'wav',
        'wma',
        'wv',
        'webm',
        '8svx',
        'cda',

    ];

    public $Videos = [
        'mp4',
        'mov',
        'wmv',
        'avi',
        'avchd',
        'mkv',
        'webm',
        'flv',
        '4av',
        'swf',

    ];

    public function isAcceptable($filename, $custom = false)
    {
        $basename = basename($filename);
        $fileFormat = (explode('.', $basename))[1];
        
        if (
            in_array($fileFormat, $this->Videos) or
            in_array($fileFormat, $this->Audios) or
            in_array($fileFormat, $this->Pictures)
        ) 
        {
            return true;
        }
        
        
        return false;
    }
}
