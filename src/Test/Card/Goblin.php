<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Goblin extends \OpenLegends\Engine\Abstract\Card
{
    public function __construct()
    {
        $ability = new \OpenLegends\Asset\Test\Ability\Multiple();

        $ability->add(
            new \OpenLegends\Asset\Test\Ability\Lethal()
        );

        $ability->add(
            new \OpenLegends\Asset\Test\Ability\Guard()
        );

        $this->setAbility(
            $ability
        );

        $this->setAttribute(
            new \OpenLegends\Asset\Test\Attribute\Neutral()
        );

        $this->setType(
            new \OpenLegends\Asset\Test\Type\Goblin()
        );

        $this->setRarity(
            new \OpenLegends\Asset\Test\Rarity\Common()
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