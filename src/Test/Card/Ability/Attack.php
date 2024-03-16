<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Attack extends \OpenLegends\Engine\Abstract\Card\Ability
{
    public function player()
    {}

    public function opponent()
    {}

    public function card(
        \OpenLegends\Engine\Abstract\Card $source,
        \OpenLegends\Engine\Abstract\Card $target
    ) {
        $target->setHealth(
            $target->getHealth() - $source->getPower()
        );

        $source->setHealth(
            $source->getHealth() - $target->getPower()
        );
    }

    public function silentize(
        \OpenLegends\Engine\Abstract\Card $target,
        \OpenLegends\Engine\Abstract\Card $origin
    ) {
        $target->setCost(
            $origin->getCost()
        );

        $target->setPower(
            $origin->getPower()
        );

        $target->setHealth(
            $origin->getHealth()
        );

        // @TODO remove abilities
    }

    public function apply()
    {}
}