<?php

namespace Taymaz\Mediabackup;

class Mediabackup
{
    private static string $configFile;
    private static bool $integrated = false;

    public static function integrated()
    {
        self::$integrated = true;
        return new static;
    }

    public static function configFile($filePath)
    {
        self::$configFile = $filePath;
        return new static;
    }

    public static function CreateBackups($callback)
    {
        $config = new ConfigLoader(self::$configFile);

        return $callback(new BackupGenrate($config));
    }
}
