[![Latest Stable Version](http://poser.pugx.org/taymaz/mediabackup/v)](https://packagist.org/packages/taymaz/mediabackup)
[![Total Downloads](http://poser.pugx.org/taymaz/mediabackup/downloads)](https://packagist.org/packages/taymaz/mediabackup)
[![Latest Unstable Version](http://poser.pugx.org/arcaptcha/arcaptcha-php/v/unstable)](https://packagist.org/packages/taymaz/mediabackup) [![License](http://poser.pugx.org/taymaz/mediabackup/license)](https://packagist.org/packages/taymaz/mediabackup)
[![PHP Version Require](http://poser.pugx.org/taymaz/mediabackup/require/php)](https://packagist.org/packages/taymaz/mediabackup)

# mediaBackup
### backup php package
backup server or website media php package

## Install
From your terminal:

```sh
composer require taymaz/mediabackup
```

This starts to install mediabackup package its working with composer so you can use it to easy.

## Basic use

for starting you need to create a file named config to setup backup options like directories and backup export path and ...

### First create your config file like this
Set your own particular config
```json
{
    "Directories": [
        "media",
        ".",
        "media/thumbnails"
    ],

    "BackupExportPath": "."
}
```
### then require package
require package in your php file
```sh
use Taymaz\Mediabackup\Mediabackup;

```

and give config file path then get your backup file path in clallback function
```php
Mediabackup::configFile("./config.json")->CreateBackup(function($backup){
    echo $backup->path;
});
```

## its done your backup is ready

``$backup`` methodes you can use :

```php
$backup->remove(); //true

$backup->filename; //backup-2023-01-15.zip
```
