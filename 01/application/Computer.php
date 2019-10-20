<?php

namespace application;

abstract class Computer
{
    const STATEMENT = false;
    private $cpu;
    private $ram;
    private $video;
    private $memory;
    private $isWorking;
    private $computerName;


    public function __construct($cpu, $ram, $video, $memory, $computerName)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->video = $video;
        $this->memory = $memory;
        $this->computerName = $computerName;
    }

    public function start()
    {
        $this->statement = true;
        if ($this->statement == true)
            echo 'Welcome, computer is on';
    }

    public function shutDown()
    {
        $this->statement = false;
        if ($this->statement == false)
            echo 'Good buy, computer is off';
    }

    public function restart()
    {
        return $this->shutDown();
        return $this->start();

    }




    public function printParameters()
    {
        //печатает все параметры компьютера, если он работает
        //если выключен, то выводит сообщение об ошибке
        return "<h3> Parameters of computer </h3> <br>
               type of computer: {$this->computerName} <br> 
               cpu: {$this->cpu} <br> 
               ram: {$this->ram} <br> 
               video: {$this->video} <br> 
               memory: {$this->memory} <br>";

    }


    abstract public function identifyUser();


    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @param mixed $cpu
     */
    public function setCpu($cpu): void
    {
        $this->cpu = $cpu;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram): void
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory): void
    {
        $this->memory = $memory;
    }

    /**
     * @return mixed
     */
    public function getIsWorking()
    {
        return $this->isWorking;
    }

    /**
     * @param mixed $isWorking
     */
    public function setIsWorking($isWorking): void
    {
        $this->isWorking = $isWorking;
    }

    /**
     * @return string
     */
    public function getComputerName(): string
    {
        return $this->computerName;
    }

    /**
     * @param string $computerName
     */
    public function setComputerName(string $computerName): void
    {
        $this->computerName = $computerName;
    }









}


































