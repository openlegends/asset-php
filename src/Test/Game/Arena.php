<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Game;

class Arena extends \OpenLegends\Engine\Abstract\Game
{
    public function __construct(
        \OpenLegends\Engine\Abstract\Player $player,

        \OpenLegends\Engine\Abstract\Pool\Card $deck,
        \OpenLegends\Engine\Abstract\Pool\Card $hand,
        \OpenLegends\Engine\Abstract\Pool\Card $pile,

        \OpenLegends\Engine\Abstract\Pool\Card $left,
        \OpenLegends\Engine\Abstract\Pool\Card $right
    ) {
        $this->setPlayer(
            $player
        );

        $this->setDeck(
            $deck
        );

        $this->setHand(
            $hand
        );

        $this->setPile(
            $pile
        );

        $this->setLeft(
            $left
        );

        $this->setRight(
            $right
        );
    }
}