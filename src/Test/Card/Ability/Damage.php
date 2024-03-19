<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Damage extends \OpenLegends\Core\Abstract\Card\Ability
{
    public function __construct()
    {
        $this->setName(
            _('Damage')
        );

        $this->setDescription(
            _('This card make damage equal it power to another card or player')
        );
    }
}