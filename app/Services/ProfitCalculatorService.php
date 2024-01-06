<?php
namespace App\Services;

use App\Interfaces\ProfitCalculatorInterface;

class ProfitCalculatorService implements ProfitCalculatorInterface
{
    public static function calculateProfit($cost, $profit, $increment, $wholesale_price)
    {
        $result = round(($cost * (1 + ($profit / 100))), 4);
        $profit_with_tax = $result * 1.16;
        return [
            'increment' => $increment,
            'sale_price' => $result,
            'sale_price_neto' => round($profit_with_tax, 2),
            'wholesale_price' => $wholesale_price
        ];
    }

    public static function calculateSalePrice($cost, $profit, $increment, $wholesale_price)
    {
        $precio_bruto = round((($profit / 1.16) - $cost), 3);
        $result = round((($precio_bruto / $cost) * 100), 6);
        $profit_without_tax = round(($profit / 1.16), 3);
        return [
            'increment' => $increment,
            'sale_price' => $profit_without_tax,
            'profit' => $result,
            'wholesale_price' => $wholesale_price,
        ];
    }
}