<?php

//Re-Introducing Symfony Console – CLI PHP for the Uninitiated!

use Console\TimeCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

require_once __DIR__ . '/vendor/autoload.php'; 

class TimeCommandTest extends \PHPUnit_Framework_TestCase{

    public function testHashIsCorrect(){

        $application = new Application();
        $application->add(new TimeCommand());

        $command = $application->find('greet');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command'      => $command->getName(),
            'username'         => 'Sitepoint'
        ));    

        $this->assertRegExp('/Your password hashed:/', $commandTester->getDisplay());

    }
}