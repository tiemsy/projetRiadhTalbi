<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminFormType.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfiguratorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TextareaTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\AutocompleteTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CollectionTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CheckboxTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\EntityTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\FOSCKEditorTypeConfigurator.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\IvoryCKEditorTypeConfigurator.php';

$a = ($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService());

return $this->privates['easyadmin.form.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType($a, array(7 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TextareaTypeConfigurator(), 6 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator(), 5 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator(), 4 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator(), 3 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator($a), 2 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator(), 1 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\FOSCKEditorTypeConfigurator(), 0 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\IvoryCKEditorTypeConfigurator()));
