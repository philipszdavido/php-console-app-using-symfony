#!/usr/bin/env php

<?php 

require_once __DIR__ . '/vendor/autoload.php'; 

use Symfony\Component\Console\Application; 
use Console\TimeCommand;

/*$output = new OutputInterface();
$style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
$output -> getFormatter() -> setStyle('fire', $style);*/

$app = new Application('Console App', 'v1.0.0');

$app -> add(new TimeCommand());

$app -> run();
