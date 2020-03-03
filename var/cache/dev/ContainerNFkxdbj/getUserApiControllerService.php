<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Rest\UserApiController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Rest\\UserApiController.php';
include_once $this->targetDirs[3].'\\src\\Service\\interfaces\\UsersServiceInterface.php';
include_once $this->targetDirs[3].'\\src\\Service\\UsersService.php';

$this->services['App\\Controller\\Rest\\UserApiController'] = $instance = new \App\Controller\Rest\UserApiController(new \App\Service\UsersService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'))));

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\Rest\\UserApiController', $this));

return $instance;
