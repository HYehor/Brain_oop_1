<?php

namespace application;

interface IComputer
{
    public function start();
    public function shutDown();
    public function printParameters();
    public function identifyUser();

}

