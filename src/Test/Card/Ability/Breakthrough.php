<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Breakthrough extends \OpenLegends\Core\Abstract\Card\Ability
{
    public function __construct()
    {
        $this->setName(
            _('Breakthrough')
        );

        $this->setDescription(
            _('Damage player with card power more than target health')
        );
    }
}