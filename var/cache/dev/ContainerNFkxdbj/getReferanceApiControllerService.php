<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Rest\ReferanceApiController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Rest\\ReferanceApiController.php';

$this->services['App\\Controller\\Rest\\ReferanceApiController'] = $instance = new \App\Controller\Rest\ReferanceApiController();

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\Rest\\ReferanceApiController', $this));

return $instance;
