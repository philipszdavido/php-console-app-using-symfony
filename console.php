#!/usr/bin/env php

<?php 

require_once __DIR__ . '/vendor/autoload.php'; 

use Symfony\Component\Console\Application; 
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

$style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
$output->getFormatter()->setStyle('fire', $style);

$app = new Application();
$app->run();