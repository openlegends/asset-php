<?php

declare(strict_types=1);

namespace OpenLegends\Asset\Test\Action\Card;

class Damage extends \OpenLegends\Engine\Abstract\Action\Card
{
    public function __construct()
    {
        $this->setName(
            _('Damage')
        );

        $this->setDescription(
            _('This card make damage equal it power to another card or player')
        );
    }
}