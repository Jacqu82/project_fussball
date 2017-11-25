<?php

namespace AppBundle\Service;

use AppBundle\Entity\Club;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EmblemService
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getEmblem(Club $club)
    {
        $file = $club->getEmblem();
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        $file->move(
            $this->container->getParameter('path_directory'),
            $fileName);
        $club->setEmblem($fileName);

        return $club;

    }
}
