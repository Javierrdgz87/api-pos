<?php
namespace App\Services;

use App\Models\ProductTax;
use Exception;

class ProductTaxesService {

    public static function updateOrCreateProductTax(int $id, array $data): array {
        $tax = ProductTax::where('product_id', $id);
        $tax->delete();
        $product = [];
        foreach($data['taxes'] as $item){
            $product[] = ProductTax::updateOrCreate(
                // where condition
                ['product_id' => $id, 'tax_id' => $item['tax_id']],
                // data to update
                ['product_id' => $id, 'tax_id' => $item['tax_id']]
            );
        }
        
        return $product;
    }
    
    public static function calculateTaxes(float $cost): float
    {
        $result = ($cost / env('WITH_TAX'));
        return number_format($result, 3, '.', ',');
    }

    public static function calculateUnitPriceTaxes(float $pricePerBox, float $factor): float
    {
        $result = ($pricePerBox / $factor);
        return number_format($result, 3, '.', ',');
    }
}