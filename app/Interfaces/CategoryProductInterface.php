<?php
namespace App\Interfaces;

interface CategoryProductInterface {
    public static function getAllCategories(array $data);
    public static function getCategoryById($id);
    public static function createCategory(array $data);
    public static function updateCategory($id, array $data);
    public static function deleteCategory($id);
}