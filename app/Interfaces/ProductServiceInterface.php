<?php
namespace App\Interfaces;

interface ProductServiceInterface {
    public static function getAllProducts(array $data);
    public static function getProductById($id);
    public static function createProduct(array $data);
    public static function updateProduct($id, array $data);
    public static function deleteProduct($id);
}