<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Action;

class Attack extends \OpenLegends\Engine\Abstract\Card\Action
{
    private \OpenLegends\Engine\Abstract\Card $_card;

    private int $_breakthrough = 0;

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
        $damage = $power ? $power : $this->_card->getPower();

        if ($damage)
        {
            if ($card->getCover())
            {
                $card->setCover(
                    false
                );
            }

            else
            {
                $health = $card->getHealth() - $damage;

                if ($health < 0 && $this->_card->getBreakthrough())
                {
                    $this->_breakthrough = abs(
                        $health
                    );
                }

                if ($this->_card->getLethal())
                {
                    $card->setHealth(
                        0
                    );
                }

                else
                {
                    $card->setHealth(
                        $health
                    );
                }
            }
        }
    }

    public function player(
        \OpenLegends\Engine\Abstract\Player &$player,
        ?int $power = null
    ): void
    {
        $damage = $power ? $power : $this->_card->getPower();

        if ($damage)
        {
            if ($player->getCover())
            {
                $player->setCover(
                    false
                );
            }

            else
            {
                $player->setHealth(
                    $player->getHealth() - $damage
                );
            }
        }
    }

    public function getBreakthrough(): int
    {
        return $this->_breakthrough;
    }
}