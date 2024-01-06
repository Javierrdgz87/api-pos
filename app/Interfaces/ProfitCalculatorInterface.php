<?php
namespace App\Interfaces;

interface ProfitCalculatorInterface
{
    public static function calculateProfit($cost, $price, $i, $wholesale_price);
    public static function calculateSalePrice($cost, $price, $i, $wholesale_price);
}