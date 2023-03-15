<?php

namespace src\Domain;

class ChangeCalculator
{
    private const COIN_TYPES = [1000, 500, 100, 50, 10, 1];

    public function calculateChange(array $coins, int $price) :string {
        $amount = $this->calculateTotalAmount($coins);
        $change = $amount - $price;
        // TODO: 返却する文字列についての責務はController層のイメージ
        if ($change === 0) {
            return 'nochange';
        }

        $change_coins = [];
        foreach ($this::COIN_TYPES as $coin_type) {
            $coin_count = floor($change / $coin_type);
            if ($coin_count > 0) {
                $change_coins[$coin_type] = $coin_count;
                $change -= $coin_type * $change_coins[$coin_type];
            }
        }

        return $this->toString($change_coins);
    }

    private function calculateTotalAmount(array $coins) :int {
        $total = 0;
        foreach ($this::COIN_TYPES as $v) {
            $count = array_key_exists($v, $coins) ? $coins[$v] : 0;
            $total += $v * $count;
        }
        return $total;
    }

    private function toString(array $coins): string {
        $result = "";
        foreach ($coins as $coin_type => $coin_count) {
            $result .= $coin_type . " " . $coin_count . " ";
        }
        return trim($result);
    }
}
