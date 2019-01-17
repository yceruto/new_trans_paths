<?php


namespace App\Helper;

use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class Helper2 implements ServiceSubscriberInterface
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedServices()
    {
        return ['translator' => TranslatorInterface::class];
    }

    public function showWelcome(): string
    {
        return $this->container->get('translator')->trans('label_welcome_from_helper2_service');
    }
}
