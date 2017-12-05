<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

class ValueExists extends Constraint
{
    public $message = 'value_is_not_exists_on_our_database';

    public $field;
    public $negate;

    public function __construct($options = null)
    {
        $this->field = $options['field'];
        $this->negate = isset($options['negate']) && $options['negate'] === true;

        parent::__construct($options);
    }

    public function getRequiredOptions()
    {
        return ['field'];
    }

    public function validatedBy()
    {
        return ValueExistsValidator::class;
    }
}
