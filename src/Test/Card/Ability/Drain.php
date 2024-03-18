<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Drain extends \OpenLegends\Engine\Abstract\Card\Ability
{
    public function __construct()
    {
        $this->setName(
            _('Drain')
        );

        $this->setDescription(
            _('Drain player HP on damage')
        );
    }
}