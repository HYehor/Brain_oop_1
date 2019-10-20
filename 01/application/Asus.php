<?php

namespace application;

class Asus extends Computer implements IComputer
{
    const IS_DESCTOP = true;

    /**
     * Asus constructor.
     */
    public function __construct($cpu, $ram, $video, $memory, $computerName)
    {
        parent::__construct($cpu, $ram, $video, $memory, $computerName);
    }



    public function identifyUser()
    {
        echo 'Asus: identify by fingerprints';
    }



    public function printParameters()
    {
        return parent::printParameters();
    }


    public function start(){

    }


    public function shutDown(){

    }

}