<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.query_extension.order' shared service.

include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\QueryCollectionExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\ContextAwareQueryCollectionExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Doctrine\\Orm\\Extension\\OrderExtension.php';

return $this->privates['api_platform.doctrine.orm.query_extension.order'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension('ASC', ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
