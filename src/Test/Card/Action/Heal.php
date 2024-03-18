<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Action;

class Heal extends \OpenLegends\Engine\Abstract\Card\Action
{
    private \OpenLegends\Engine\Abstract\Card $_card;

    public function __construct(
        \OpenLegends\Engine\Abstract\Card $card
    ) {
        $this->_card = $card;
    }

    public function card(
        \OpenLegends\Engine\Abstract\Card &$card,
        ?int $power = null
    ): void
    {
        $card->setHealth(
            $card->getHealth() + ($power ? $power : $this->_card->getPower())
        );
    }

    public function player(
        \OpenLegends\Engine\Abstract\Player &$player,
        ?int $power = null
    ): void
    {
        $player->setHealth(
            $player->getHealth() + ($power ? $power : $this->_card->getPower())
        );
    }
}