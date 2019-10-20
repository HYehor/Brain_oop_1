<?php

define('BR', '<br>');

use application\{Asus, Lenovo, MacBook};
use helpers\Console;

//require_once 'Autoload.php';
function loader($className)
{
    $className = str_replace('\\', '/', $className);
    $file ="{$className}.php";
    if (file_exists($file)) {
        require_once $file;
    }

}
spl_autoload_register('loader');
//Autoload::loader('Asus.php');
//spl_autoload_register(Autoload::loader());

function loader_1($className)
{
    $className = str_replace('\\', '/', $className);
    $file = "{$className}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('loader_1');



/*$MyComputer = new Computer();

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

debug($MyComputer);

$MyComputer->start();
echo BR;
$MyComputer->shutDown();
echo BR;
$MyComputer->restart();
echo BR;
//echo $object::IS_DESCTOP;
*/



echo Console::printLine('', 'SUCCESS');
echo BR;
echo BR;




$asus = new Asus('Asus', 16, "GeForce 15808", 500, 'Asus');
echo $asus->printParameters();
echo BR;
$asus->identifyUser();
echo BR.BR;

$lenovo = new Lenovo('lenovo451215 4', 32, 'Radeon 454 1125', 500, 'Lenovo');
echo $lenovo->printParameters();
echo BR;
$lenovo->identifyUser();
echo BR.BR;

$MacBook = new MacBook('sdsd44', 64, '45478454DDSWW', '1T', 'MacBook');
echo $MacBook->printParameters();
echo BR;
$MacBook->identifyUser();
echo BR.BR;
