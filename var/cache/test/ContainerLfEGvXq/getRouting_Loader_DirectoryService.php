<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'routing.loader.directory' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'\\src/Resources'), array(0 => ($this->targetDirs[3].'\\src'))))));
