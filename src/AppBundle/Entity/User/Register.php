<?php

namespace AppBundle\Entity\User;

use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;
use Symfony\Component\Validator\Constraints as Assert;

class Register
{
    /**
     * @Assert\Type(type="AppBundle\Entity\User\User")
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @Recaptcha\IsTrue
     */
    public $recaptcha;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     *
     * @return $this
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }
}
