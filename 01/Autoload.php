<?php


class Autoload
{
    public static function loader($className)
    {
        $className = str_replace('\\', '/', $className);
        $file ="application/{$className}.php";
        if (file_exists($file)) {
            require_once $file;
        }
    }

}