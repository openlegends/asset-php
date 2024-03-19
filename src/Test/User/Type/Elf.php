<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\User\Type;

class Elf extends \OpenLegends\Engine\Abstract\User\Type
{
    public function __construct()
    {
        $this->setName(
            _('Elf')
        );

        $this->setDescription(
            _('Just Elf')
        );
    }
}