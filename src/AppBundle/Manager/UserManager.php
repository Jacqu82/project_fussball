<?php


namespace AppBundle\Manager;

use AppBundle\Entity\User;
use AppBundle\Manager\Base\EntityManager;


class UserManager extends EntityManager
{
    protected $entityName = 'User';

    public function getUserRepository()
    {
        return $this->em->getRepository('AppBundle:User');
    }

    public function getAllUsersByName()
    {
        return $this->repository->findBy(array(), array('username' => 'ASC'));
    }

    public function deleteUser(User $user)
    {
        $this->em->remove($user);
        $this->em->flush();
    }

}
