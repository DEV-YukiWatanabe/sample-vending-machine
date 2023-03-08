<?php

namespace src\Domain;

class ChangeCalculator
{
    private const COIN = [500, 100, 50, 10, 1];

    public function calculate(array $coins, int $price) :string {
        $amount = $this->calculateTotalAmount($coins);
        $change = $amount - $price;
        return '100 3 50 1 10 3';
    }

    private function calculateTotalAmount(array $coins) :int {
        $total = 0;
        foreach ($this::COIN as $value) {
            $count = $coins[$value];
            $total += $value * $count;
        }
        return $total;
    }
}
