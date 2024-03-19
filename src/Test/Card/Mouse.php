<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card;

class Mouse extends \OpenLegends\Core\Abstract\Card
{
    public function __construct()
    {
        $this->setName(
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

        $this->setBreakthrough(
            false
        );

        $this->setCover(
            false
        );

        $this->setDrain(
            false
        );

        $this->setGuard(
            false
        );

        $this->setLethal(
            false
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
            new \OpenLegends\Asset\Test\Card\Type\Animal()
        );

        $this->setRarity(
            new \OpenLegends\Asset\Test\Card\Rarity\Common()
        );

        $this->setAbility(
            new \OpenLegends\Asset\Test\Card\Ability\Damage()
        );
    }

    public function onCard(
        \OpenLegends\Core\Abstract\Card $card
    )
    {
        $damage = new \OpenLegends\Asset\Test\Card\Action\Damage(
            $mouse
        );

        $damage->card(
            $card
        );

        if ($damage->getBreakthrough())
        {
            $damage = new \OpenLegends\Asset\Test\Card\Action\Damage(
                $mouse
            );

            $damage->setPower(
                $damage->getBreakthrough()
            );

            $damage->player(
                $player
            );
        }
    }

    public function onPlayer(
        \OpenLegends\Core\Abstract\Player $player
    )
    {
        $damage = new \OpenLegends\Asset\Test\Card\Action\Damage(
            $mouse
        );

        $damage->player(
            $player
        );
    }

    public function onDiscard(
        $card
    )
    {}
}