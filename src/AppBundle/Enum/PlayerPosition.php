<?php

namespace AppBundle\Enum;

use AppBundle\Enum\Base\Enum;

abstract class PlayerPosition extends Enum
{
    const GOALKEEPER = 'Bramkarz';
    const DEFENDER = 'Obrońca';
    const MIDFIELDER = 'Pomocnik';
    const FORWARD = 'Napastnik';
}