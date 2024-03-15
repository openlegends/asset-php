<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Goblin extends \OpenLegends\Engine\Abstract\Card
{
    public function __construct()
    {
        $this->addAttribute(
            new \OpenLegends\Asset\Test\Attribute\Neutral()
        );

        $this->setType(
            new \OpenLegends\Asset\Test\Type\Goblin()
        );

        $this->setTitle(
            _('Goblin')
        );

        $this->setDescription(
            _('Just goblin')
        );

        $this->setCost(
            1
        );

        $this->setPower(
            3
        );

        $this->setHealth(
            3
        );

        $this->setCraft(
            3
        );

        $this->setExtract(
            3
        );

        $this->setGuard(
            true
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