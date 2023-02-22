<?php

namespace src\Domain;

class Item extends Product
{
    public function __construct(
        private readonly string $name,
        // TODO: 値オブジェクト作るかはあとで考える
//        private readonly int $price
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

//    public function getPrice(): int
//    {
//        return $this->price;
//    }
}
