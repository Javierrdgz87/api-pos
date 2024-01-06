<?php
namespace App\Services;

use App\Models\ProductPrice;
use Exception;

class ProductPricesService{
    public static function getAllProductPrices($request) {
        return ProductPrice::all();
    }

    public static function getProductPriceById($id) {
        return ProductPrice::findOrFail($id);
    }

    public static function createProductPrice(array $data) {
        try{
            return ProductPrice::create($data);
        } catch( Exception $e){
            return ['message' => $e->getMessage()];
        }
    }

    public static function updateOrCreateProductPrice($id, $data) {
        $updated_data = [
            'sale_price' => $data['sale_price'], 
            'wholesale_price' => $data['wholesale_price']
        ];
        if(isset($data['profit'])){
            $updated_data['profit'] = $data['profit']; 
            $updated_data['sale_price_neto'] = 0;
        }
        if(isset($data['sale_price_neto'])){
            $updated_data['profit'] = 0; 
            $updated_data['sale_price_neto'] = $data['sale_price_neto'];
        }
        
        $product = ProductPrice::updateOrCreate(
            // where condition
            ['product_id' => $id, 'price_number' => $data['increment']],
            // data to update
            $updated_data
        );
        
        return $product;
    }

    public static function deleteProductPrice($id) {
        $product = ProductPrice::findOrFail($id);
        $product->delete();
    }
}