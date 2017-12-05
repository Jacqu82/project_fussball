<?php

namespace AppBundle\Validator\Constraints;

use Doctrine\Common\Persistence\ManagerRegistry as Doctrine;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValueExistsValidator extends ConstraintValidator
{
    private $em;

    public function __construct(Doctrine $doctrine)
    {
        $this->em = $doctrine->getManager();
    }

    public function validate($value, Constraint $constraint)
    {
        $repository = $this->em->getRepository('AppBundle:User\User');
        $user = $repository->findOneBy([$constraint->field => $value]);

        if ((!$user && $constraint->negate === false) || ($user && $constraint->negate === true))
        {
            $this->context->addViolation($constraint->message, ['%string%' => $value]);
        }
    }
}
