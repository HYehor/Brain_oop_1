<?php

namespace application;

class Lenovo extends Computer implements IComputer
{
    const IS_DESCTOP = true;

    /**
     * Lenovo constructor.
     */
    public function __construct($cpu, $ram, $video, $memory, $computerName)
    {
        return parent::__construct($cpu, $ram, $video, $memory, $computerName);
    }


    public function printParameters()
    {
        return parent::printParameters();
    }


    public function identifyUser()
    {
        echo 'Lenovo: identify by fingerprints';
    }

}