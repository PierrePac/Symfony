<?php

namespace ContainerPwxtnmM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityCategorieApiPlatformDoctrineOrmFilterSearchFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_categorie_api_platform_doctrine_orm_filter_search_filter' shared autowired service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Filter\SearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/SearchFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/SearchFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/SearchFilter.php';

        $a = ($container->privates['api_platform.symfony.iri_converter'] ?? $container->getApiPlatform_Symfony_IriConverterService());

        if (isset($container->privates['annotated_app_entity_categorie_api_platform_doctrine_orm_filter_search_filter'])) {
            return $container->privates['annotated_app_entity_categorie_api_platform_doctrine_orm_filter_search_filter'];
        }

        return $container->privates['annotated_app_entity_categorie_api_platform_doctrine_orm_filter_search_filter'] = new \ApiPlatform\Doctrine\Orm\Filter\SearchFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), $a, ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ['sous_cat' => 'exact'], NULL, ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}
