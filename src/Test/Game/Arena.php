<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Game;

class Arena extends \OpenLegends\Engine\Abstract\Game
{
    public function __construct()
    {
        $deck = new \OpenLegends\Asset\Test\Pool\Card();

        for ($i = 0; $i < 3; $i++) // generate 3 copies of each card
        {
            $deck->addCard(
                new \OpenLegends\Asset\Test\Card\Goblin()
            );

            $deck->addCard(
                new \OpenLegends\Asset\Test\Card\Mouse()
            );

            $deck->addCard(
                new \OpenLegends\Asset\Test\Card\Rat()
            );
        }

        $this->setDeck(
            $deck
        );

        $this->setHand(
            new \OpenLegends\Asset\Test\Pool\Card()
        );

        $this->setPile(
            new \OpenLegends\Asset\Test\Pool\Card()
        );

        $this->setLeft(
            new \OpenLegends\Asset\Test\Pool\Card()
        );

        $this->setRight(
            new \OpenLegends\Asset\Test\Pool\Card()
        );

        $this->setPlayer(
            new \OpenLegends\Asset\Test\Player\Elf()
        );
    }
}