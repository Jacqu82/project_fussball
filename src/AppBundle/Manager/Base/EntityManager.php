<?php

namespace AppBundle\Manager\Base;

use AppBundle\Entity\Base\EntityInterface;
//use AppBundle\Entity\User\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

abstract class EntityManager
{
    protected $entityName;
    protected $em;

    protected $repository;
    protected $namespace;
    private static $currentUser;

    public function __construct(ObjectManager $em, TokenStorageInterface $tokenStorage)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository(sprintf('AppBundle:%s%s', $this->namespace, $this->entityName));
    }

    public function getBy(Array $criteria = [], $orderBy = ['id' => 'desc'])
    {
        return $this->repository->findBy($criteria, $orderBy);
    }

    public function get($id)
    {
        return $this->repository->find($id);
    }

    public function getOneBy(Array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    public function save(EntityInterface $entity, $flush = true)
    {
        $this->em->persist($entity);

        if ($flush) {
            $this->em->flush();
        }

        return $entity;
    }

    public function remove(EntityInterface $entity)
    {
        $this->em->remove($entity);
        $this->em->flush();

        return true;
    }

//    /**
//     * Get current user or null
//     *
//     * @return User|null Current user or null if not logged
//     */
//    protected function getCurrentUser()
//    {
//        return self::$currentUser;
//    }
}
