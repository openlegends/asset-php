<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Rat extends \OpenLegends\Engine\Abstract\Card
{
    public function __construct()
    {
        $this->setAttribute(
            new \OpenLegends\Asset\Test\Attribute\Neutral()
        );

        $this->setType(
            new \OpenLegends\Asset\Test\Type\Animal()
        );

        $this->setRarity(
            new \OpenLegends\Asset\Test\Rarity\Common()
        );

        $this->setTitle(
            _('Rat')
        );

        $this->setDescription(
            _('Just rat')
        );

        $this->setCost(
            0
        );

        $this->setPower(
            2
        );

        $this->setHealth(
            2
        );

        $this->setCraft(
            2
        );

        $this->setExtract(
            2
        );
    }

    public function act(
        \OpenLegends\Engine\Abstract\Card $target
    ) {
        $this->attack(
            $target
        );
    }
}