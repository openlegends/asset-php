<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Goblin extends \OpenLegends\Engine\Abstract\Card
{
    public function __construct()
    {
        $ability = new \OpenLegends\Asset\Test\Card\Ability\Multiple();

        $ability->add(
            new \OpenLegends\Asset\Test\Card\Ability\Lethal()
        );

        $ability->add(
            new \OpenLegends\Asset\Test\Card\Ability\Guard()
        );

        $this->setAbility(
            $ability
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
    }

    public function act(
        \OpenLegends\Engine\Abstract\Card $target
    ) {
        $this->attack(
            $target
        );
    }
}