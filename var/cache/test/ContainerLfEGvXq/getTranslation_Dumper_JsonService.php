<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.dumper.json' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\JsonFileDumper.php';

return $this->privates['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
