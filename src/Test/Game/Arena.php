<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Game;

class Arena extends \OpenLegends\Core\Abstract\Game
{
    public function __construct()
    {
        $this->addPlayer(
            new \OpenLegends\Asset\Test\Game\Player\Player1()
        );

        $this->addPlayer(
            new \OpenLegends\Asset\Test\Game\Player\Player2()
        );
    }
}