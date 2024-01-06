<?php
namespace App\Interfaces;

interface DepartmentInterface {
    public static function getAllDepartments(array $data);
    public static function getDepartmentById($id);
    public static function createDepartment(array $data);
    public static function updateDepartment($id, array $data);
    public static function deleteDepartment($id);
}