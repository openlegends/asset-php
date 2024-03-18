<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Action;

class Heal extends \OpenLegends\Engine\Abstract\Card\Action
{
    private \OpenLegends\Engine\Abstract\Card $_card;

    private int $_power = 0;

    public function __construct(
        \OpenLegends\Engine\Abstract\Card $card
    ) {
        $this->_card = $card;
    }

    public function card(
        \OpenLegends\Engine\Abstract\Card &$card
    ): void
    {
        $card->setHealth(
            $card->getHealth() + ($this->getPower() ? $this->getPower() : $this->_card->getPower())
        );
    }

    public function player(
        \OpenLegends\Engine\Abstract\Player &$player
    ): void
    {
        $player->setHealth(
            $player->getHealth() + ($this->getPower() ? $this->getPower() : $this->_card->getPower())
        );
    }

    public function getPower(): int
    {
        return $this->_power;
    }

    public function setPower(int $value): void
    {
        $this->_power = $value;
    }
}