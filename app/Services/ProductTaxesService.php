<?php
namespace App\Services;

use App\Models\ProductTax;
use Exception;

class ProductTaxesService {

    public static function updateOrCreateProductTax($id, $data) {
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
}