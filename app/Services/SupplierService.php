<?php
namespace App\Services;

use App\Models\Suppliers;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SupplierService{
    public static function getAllSuppliers($request) {
        return Suppliers::all();
    }

    public static function getSupplierByName($name) {
        return Suppliers::where('name', 'LIKE', "%{$name}%")
                ->select(['id', 'name', 'legal_representative', 'alias', 'rfc', 'curp', 'phone', 'mobile', 'emails', 'comments', 'credit_limit', 'credit_days'])
                ->get();
    }

    public static function createSupplier(array $data) {
        DB::beginTransaction();
        try{
            DB::commit();
            $supplier = Suppliers::create($data);
            Log::info('Supplier {name} was created successfully', ['name' => $supplier->name]);
            return $supplier;
        } catch( Exception $e){
            DB::rollBack();
            Log::error($e->getMessage());
            return ['message' => $e->getMessage()];
        }
    }

    public static function updateSupplier($id, array $data) {
        DB::beginTransaction();
        try{
            $supplier = Suppliers::findOrFail($id);
            $supplier->update($data);
            DB::commit();
            Log::info('Supplier {name} was updated successfully', ['name' => $data['name']]);
            return $supplier;
        } catch(Exception $e){
            DB::rollBack();
            Log::error($e->getMessage());
            return ['message' => $e->getMessage()];
        }
    }

    public static function deleteSupplier($id) {
        DB::beginTransaction();
        try{
            $supplier = Suppliers::findOrFail($id);
            $name = $supplier->name;
            $supplier->delete();
            DB::commit();
            Log::info('Supplier {name} was deleted successfully', ['name' => $name]);
            return $supplier;
        } catch(Exception $e){
            DB::rollBack();
            Log::error($e->getMessage());
            return ['message' => $e->getMessage()];
        }
    }
}