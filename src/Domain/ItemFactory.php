<?php

namespace src\Domain;

class ItemFactory extends Factory
{
    protected function createProduct(string $itemName): Product
    {
        return new Item($itemName);
    }
}
