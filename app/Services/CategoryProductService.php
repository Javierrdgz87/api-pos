<?php
namespace App\Services;

use App\Interfaces\CategoryProductInterface;
use App\Models\CategoryProduct;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryProductService implements CategoryProductInterface {
    public static function getAllCategories($request) {
        return CategoryProduct::all();
    }

    public static function getCategoryById($id) {
        return CategoryProduct::findOrFail($id);
    }

    public static function createCategory(array $data) {
        try{
            return CategoryProduct::create($data);
        } catch( Exception $e){
            return ['message' => $e->getMessage()];
        } catch(ModelNotFoundException $e){
            return [
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }
    }

    public static function updateCategory($id, array $data) {
        $product = CategoryProduct::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public static function deleteCategory($id) {
        $product = CategoryProduct::findOrFail($id);
        $product->delete();
    }
}