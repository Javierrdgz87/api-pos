<?php
namespace App\Services;

use App\Interfaces\ProductServiceInterface;
use App\Models\Product;
use Exception;

class ProductService implements ProductServiceInterface {
    public static function getAllProducts($request) {
        return Product::all();
    }

    public static function getProductById($id) {
        return Product::with(['prices'])
                ->findOrFail($id);
    }

    public static function createProduct($data) {
        try{
            $product = Product::create($data->except('prices'));
            $prices_calculate = self::handleProfitSale($data);
            $result = [];
            foreach($prices_calculate as $calculate){
                $result[] = ProductPricesService::updateOrCreateProductPrice($product->id, $calculate);
            }
            return $prices_calculate;
        } catch( Exception $e){
            return ['message' => $e->getMessage()];
        }
    }

    public static function updateProduct($id, $data) {
        $prices_calculate = self::handleProfitSale($data);
        return ProductTaxesService::updateOrCreateProductTax($id, $data->only('taxes'));
        $result = [];
        foreach($prices_calculate as $calculate){
            $result[] = ProductPricesService::updateOrCreateProductPrice($id, $calculate);
        }

        
        
        $product = Product::findOrFail($id);
        $product->update($data->except('prices'));

        return $product;
    }

    public static function deleteProduct($id) {
        $product = Product::findOrFail($id);
        $product->delete();
    }

    private static function handleProfitSale($data){
        $benefits = [];
        $i = 0;
        foreach($data->prices as $price){
            $i++;
            if(isset($price['profit']) && $price['profit']){
                $wholesale_price = (isset($price['wholesale_price']) ? $price['wholesale_price'] : 0);
                $benefits[] = ProfitCalculatorService::calculateProfit($data->cost_piece, $price['profit'], $i, $wholesale_price);
            }
            if(isset($price['sale_price_neto']) && $price['sale_price_neto']){
                $wholesale_price = (isset($price['wholesale_price']) ? $price['wholesale_price'] : 0);
                $benefits[] = ProfitCalculatorService::calculateSalePrice($data->cost_piece, $price['sale_price_neto'], $i, $wholesale_price);
            }
        }
        return $benefits;
    }

}