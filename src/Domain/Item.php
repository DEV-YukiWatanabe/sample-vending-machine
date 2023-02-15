<?php

namespace src\Domain;

class Item
{
    private string $name;
    // TODO: 別途型宣言するかはあとで考える
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


}
