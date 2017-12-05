<?php

namespace AppBundle\Entity\User;

use AppBundle\Enum\UserRole;
use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Entity
 * @ORM\Table(name="users_admins")
 */
class Admin extends User
{
    public function getRole()
    {
        return UserRole::Admin;
    }
}
