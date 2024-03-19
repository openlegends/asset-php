<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Action;

class Heal extends \OpenLegends\Core\Abstract\Card\Action
{
    private \OpenLegends\Core\Abstract\Card $_card;

    private int $_power = 0;

    public function __construct(
        \OpenLegends\Core\Abstract\Card $card
    ) {
        $this->_card = $card;
    }

    public function card(
        \OpenLegends\Core\Abstract\Card &$card
    ): void
    {
        $card->setHealth(
            $card->getHealth() + ($this->getPower() ? $this->getPower() : $this->_card->getPower())
        );
    }

    public function player(
        \OpenLegends\Core\Abstract\Player &$player
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