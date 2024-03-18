<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Multiple extends \OpenLegends\Engine\Abstract\Card\Ability
{
    private array $_abilities = [];

    public function __construct()
    {
        $this->setName(
            _('Multiple')
        );

        $this->setDescription(
            _('This card has multiple abilities')
        );
    }

    public function add(
        \OpenLegends\Engine\Abstract\Card\Ability $ability
    ): void
    {
        $this->_abilities[] = $ability;
    }
}