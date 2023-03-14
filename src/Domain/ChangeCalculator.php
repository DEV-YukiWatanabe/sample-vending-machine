<?php

namespace src\Domain;

class ChangeCalculator
{
    private const COIN_TYPES = [500, 100, 50, 10, 1];

    public function calculateChange(array $coins, int $price) :string {
        $amount = $this->calculateTotalAmount($coins);
        $change = $amount - $price;
        // TODO: 返却する文字列についての責務はController層のイメージ
        if ($change === 0) {
            return 'nochange';
        }

        $change_coins = [];
        foreach ($this::COIN_TYPES as $i => $coin_type) {
            $change_coins[$coin_type] = floor($change / $coin_type);
            $change -= $coin_type * $change_coins[$coin_type];
        }

        return $change_coins;
    }

    private function calculateTotalAmount(array $coins) :int {
        $total = 0;
        foreach ($this::COIN_TYPES as $v) {
            $count = array_key_exists($v, $coins) ? $coins[$v] : 0;
            $total += $v * $count;
        }
        return $total;
    }
}
