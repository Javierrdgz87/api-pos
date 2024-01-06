<?php
namespace App\Services;

use App\Interfaces\DepartmentInterface;
use App\Models\Department;
use Exception;

class DepartmentService implements DepartmentInterface {
    public static function getAllDepartments($request) {
        return Department::all();
    }

    public static function getDepartmentById($id) {
        return Department::findOrFail($id);
    }

    public static function createDepartment(array $data) {
        try{
            return Department::create($data);
        } catch( Exception $e){
            return ['message' => $e->getMessage()];
        }
    }

    public static function updateDepartment($id, array $data) {
        $product = Department::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public static function deleteDepartment($id) {
        $product = Department::findOrFail($id);
        $product->delete();
    }
}