<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.encoder.yaml' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';

return $this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder();
