<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Card\Ability;

class Damage extends \OpenLegends\Engine\Abstract\Card\Ability
{
    public function apply(
        \OpenLegends\Engine\Abstract\Card | \OpenLegends\Engine\Abstract\Player $target
    ): void
    {
        // Give damage
        $target->setHealth(
            $target->getHealth() - $source->getPower()
        );

        // Target is card
        if ($target instanceof \OpenLegends\Engine\Abstract\Card)
        {
            // Take back damage
            $source->setHealth(
                $source->getHealth() - $target->getPower()
            );

            // Check for source lethal ability
            if ($source->getHealth() > 0)
            {
                // Check for lethal ability
                foreach ($target->getAbilities() as $ability)
                {
                    if ($target->getAbility() instanceof \OpenLegends\Asset\Test\Card\Ability\Lethal)
                    {
                        $source->setHealth(0);
                        break;
                    }
                }
            }

            // Check for target lethal ability
            if ($target->getHealth() > 0)
            {
                foreach ($source->getAbilities() as $ability)
                {
                    if ($ability instanceof \OpenLegends\Asset\Test\Card\Ability\Lethal)
                    {
                        $target->setHealth(0);
                        break;
                    }
                }
            }
        }
    }
}