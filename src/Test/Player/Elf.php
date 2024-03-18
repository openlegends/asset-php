<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Player;

class Elf extends \OpenLegends\Engine\Abstract\Player
{
    public function __construct()
    {
        $this->setName(
            _('Elf')
        );

        $this->setDescription(
            _('Just Elf')
        );

        $this->setHealth(
            30
        );

        $this->setRunes(
            5
        );
    }
}