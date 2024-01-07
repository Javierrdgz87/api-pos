<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Services\SupplierService;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $result = SupplierService::getAllSuppliers($request->all());
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = SupplierService::createSupplier($request->input());

        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $result = SupplierService::getSupplierByName($name);

        return $result;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = SupplierService::updateSupplier($id, $request->input());

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = SupplierService::deleteSupplier($id);

        return $result;
    }
}
