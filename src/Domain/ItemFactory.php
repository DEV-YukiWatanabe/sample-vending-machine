<?php

namespace src\Domain;

class ItemFactory extends Factory
{
    private const COLA = 'cola';
    private const COFFEE = 'coffee';
    private const ENERGY_DRINK = 'energy_drink';

    protected function createProduct(string $itemName): Product
    {
        return match ($itemName) {
            // TODO: factoryメソッドが金額についての仕様決めてるのいいんだっけ
            $this::COLA => new Item($itemName, 120),
            $this::COFFEE => new Item($itemName, 150),
            $this::ENERGY_DRINK => new Item($itemName, 210),
            // TODO 想定外の値が渡された時どうしよう
            default => new Item($itemName, 0),
        };
    }
}
