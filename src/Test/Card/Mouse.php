<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Mouse extends \OpenLegends\Engine\Abstract\Card
{
    public function __construct()
    {
        $this->addAttribute(
            _('Neutral')
        );

        $this->setType(
            _('Animal')
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

        $this->setGuard(
            false
        );

        $this->setSilent(
            false
        );
    }

    public function act(
        \OpenLegends\Engine\Abstract\Card $target
    ) {}
}