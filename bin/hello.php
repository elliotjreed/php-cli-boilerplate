#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use Example\Greeting;

$greeting = new Greeting();

echo $greeting->sayHello();
