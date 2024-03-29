<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Goblin extends \OpenLegends\Core\Abstract\Card
{
    public function __construct()
    {
        $this->setName(
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

        $this->setBreakthrough(
            true
        );

        $this->setCover(
            false
        );

        $this->setDrain(
            true
        );

        $this->setGuard(
            true
        );

        $this->setLethal(
            true
        );

        $this->setPilfer(
            false
        );

        $this->setProphecy(
            false
        );

        $this->setUnique(
            false
        );

        $this->setAttribute(
            new \OpenLegends\Asset\Test\Card\Attribute\Neutral()
        );

        $this->setType(
            new \OpenLegends\Asset\Test\Card\Type\Goblin()
        );

        $this->setRarity(
            new \OpenLegends\Asset\Test\Card\Rarity\Common()
        );

        $ability = new \OpenLegends\Asset\Test\Card\Ability\Multiple();

        $ability->add(
            new \OpenLegends\Asset\Test\Card\Ability\Damage()
        );

        $ability->add(
            new \OpenLegends\Asset\Test\Card\Ability\Drain()
        );

        $this->setAbility(
            $ability
        );
    }
}