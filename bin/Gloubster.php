#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

$cli = new \Symfony\Component\Console\Application('Gloubster CLI', '0');

$cli->addCommands(array(
    new Gloubster\Worker\RunWorkers('gloubster:run-workers')
));

$cli->run();
