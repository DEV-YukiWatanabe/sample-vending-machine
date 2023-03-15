<?php

namespace src\archive\Domain;

class Item extends Product
{
    public function __construct(
        private readonly string $name,
        // TODO: 値オブジェクト作るかはあとで考える
        private readonly int $price
    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): int
    {
        return $this->price;
    }
}
