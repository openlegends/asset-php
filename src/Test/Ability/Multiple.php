<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Ability;

class Multiple extends \OpenLegends\Engine\Abstract\Ability
{
    private array $_abilities = [];

    public function add(
        \OpenLegends\Engine\Abstract\Ability $ability
    ): void
    {
        $this->_abilities[] = $ability;
    }
}