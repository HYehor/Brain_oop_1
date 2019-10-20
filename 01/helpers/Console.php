<?php

namespace helpers;

class Console
{
    public static $success = 'SUCCESS';
    public static $failure = 'FAILURE';
    public static $warning = 'WARNING';
    public static $note = 'NOTE';



    public static function printLine($message, $status)
    {
        $out = "";
        switch($status) {
            case self::$success :
                $out = "green"; //Green background
                break;
            case self::$failure :
                $out = "red"; //Red background
                break;
            case self::$warning :
                $out = "yellow"; //Yellow background
                break;
            case self::$note :
                $out = "blue"; //Blue background
                break;
            default:
                $out = "black";
        }
        return $out;


    }




}