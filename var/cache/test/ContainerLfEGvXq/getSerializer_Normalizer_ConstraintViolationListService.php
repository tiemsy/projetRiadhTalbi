<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.normalizer.constraint_violation_list' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\ConstraintViolationListNormalizer.php';

return $this->privates['serializer.normalizer.constraint_violation_list'] = new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer();
