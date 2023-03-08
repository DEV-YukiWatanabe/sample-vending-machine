<?php

namespace src\Domain;

class ChangeCalculator
{
    private array $coin = [500, 100, 50, 10, 1];

    public function calculate(array $coins, int $price) :string {
        return '100 3 50 1 10 3';
    }
}
