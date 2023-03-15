<?php

namespace src\archive\Domain;

abstract class Factory
{
    final public function create(string $itemName): Product {
        return $this->createProduct($itemName);
    }

    abstract protected function createProduct(string $itemName): Product;
}
