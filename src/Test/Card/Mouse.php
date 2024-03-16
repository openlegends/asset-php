<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Mouse extends \OpenLegends\Engine\Abstract\Card
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
            _('Mouse')
        );

        $this->setDescription(
            _('Just mouse')
        );

        $this->setCost(
            0
        );

        $this->setPower(
            1
        );

        $this->setHealth(
            1
        );

        $this->setCraft(
            1
        );

        $this->setExtract(
            1
        );

        $this->setSilent(
            false
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