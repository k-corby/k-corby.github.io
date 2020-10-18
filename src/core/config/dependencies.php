<?php
declare(strict_types=1);

use App\ISportService;
use Core\Classes\Interfaces\IDefaultContext;
use Core\DefaultContext;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
	$containerBuilder->addDefinitions([
        ISportService::class => DI\get(\App\Services\SportService::class),
        IDefaultContext::class => DI\get(DefaultContext::class),/*
		EntityManager::class => function (ContainerInterface $container) {
			$settings = $container->get('settings');
			$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
				$settings['doctrine']['meta']['entity_path'],
				$settings['doctrine']['meta']['auto_generate_proxies'],
				$settings['doctrine']['meta']['proxy_dir'],
				$settings['doctrine']['meta']['cache'],
				false
			);
			return EntityManager::create($settings['doctrine']['connection'], $config);
		},
        Environment::class => function (ContainerInterface $container) {
			$settings = $container->get('settings');
            //Environment::class => function () {
                $loader = new FilesystemLoader($settings['view']['template_path']);
                //$loader = new Twig_Loader_Filesystem($settings['view']['template_path']);
                //$twig->addExtension(new DebugExtension());
                $twig =  new Environment($loader, ['debug'=>true]);
                $twig->addExtension(new DebugExtension());
                return $twig;
            //},
			//return Twig::create($settings['view']['template_path'], $settings['view']['twig']);
		},*/
	]);
};

