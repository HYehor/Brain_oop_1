<?php

namespace application;

class MacBook extends Computer implements IComputer
{
    const IS_DESCTOP = true;

    /**
     * MacBook constructor.
     */
    public function __construct($cpu, $ram, $video, $memory, $computerName)
    {
        parent::__construct($cpu, $ram, $video, $memory, $computerName);
    }


    public function identifyUser()
    {
        echo 'MacBook: identify by Apple ID';
    }

}