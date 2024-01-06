<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Services\DepartmentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return DepartmentService::getAllDepartments($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = DepartmentService::createDepartment($request->input());
        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DepartmentService::getDepartmentById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try{
            DepartmentService::updateDepartment($id, $request->input());
            DB::commit();
            return response()
                ->json([
                    'message' => 'Updated successfully',
                    'code' => Response::HTTP_OK
                ]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()
                    ->json([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode()
                    ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try{
            DepartmentService::deleteDepartment($id);
            DB::commit();
            return response()
                ->json([
                    'message' => 'Deleted successfully',
                    'code' => Response::HTTP_OK
                ]);
        } catch ( Exception $e){
            DB::rollBack();
            return response()
                    ->json([
                        'message' => $e->getMessage(),
                        'code' => $e->getCode()
                    ]);
        }
    }
}
