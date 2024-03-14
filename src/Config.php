<?php

namespace OpenLegends\Asset;

class Config
{
    private string $_asset;

    public function __construct(string $asset)
    {
        if (is_dir(__DIR__ . DIRECTORY_SEPARATOR . $asset))
        {
            $this->_asset = $asset;
        }

        else
        {
            throw new \Exception();
        }
    }

    public function getCards(
        ?string $folder = 'Cards',
        ?array $type = null,
        ?array $attributes = null,
        ?array $title = null,
        ?array $description = null,
        ?array $cost = null,
        ?array $attack = null,
        ?array $health = null,
        ?array $craft = null,
        ?array $extract = null
    ): array
    {
        $cards = [];

        foreach (
            $this->_getConfigs(
                __DIR__ . DIRECTORY_SEPARATOR . $this->_asset . DIRECTORY_SEPARATOR . $folder
            ) as $card)
        {
            if ($type && !in_array($card->type, $type))
            {
                continue;
            }

            if ($attributes && !in_array($card->attributes, $attributes))
            {
                continue;
            }

            if ($title && !in_array($card->title, $title))
            {
                continue;
            }

            if ($description && !in_array($card->description, $description))
            {
                continue;
            }

            if ($cost && !in_array($card->cost, $cost))
            {
                continue;
            }

            if ($attack && !in_array($card->attack, $attack))
            {
                continue;
            }

            if ($health && !in_array($card->health, $health))
            {
                continue;
            }

            if ($craft && !in_array($card->craft, $craft))
            {
                continue;
            }

            if ($extract && !in_array($card->extract, $extract))
            {
                continue;
            }

            $cards[] = $card;
        }

        return $cards;
    }

    private function _getConfigs(
        string $location
    ): array
    {
        $configs = [];

        if (!is_dir($location) || !is_readable($location))
        {
            throw new \Exception();
        }

        foreach (scandir($location) as $filename)
        {
            if (!str_ends_with($filename, '.json'))
            {
                continue;
            }

            $configs[] = $this->_getConfig(
                $location . DIRECTORY_SEPARATOR . $filename
            );
        }

        return $configs;
    }

    private function _getConfig(
        string $location
    ): object
    {
        if (!is_file($location) || !is_readable($location))
        {
            throw new \Exception();
        }

        if (!$json = file_get_contents($location))
        {
            throw new \Exception();
        }

        if (!$config = json_decode($json))
        {
            throw new \Exception();
        }

        return $config;
    }
}