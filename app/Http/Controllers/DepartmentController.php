<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dt = json_decode($request->getContent());
        $check_id = Department::find($dt->Id);
        if(!$check_id){
            $check = Department::where("Name",$dt->Name)->get();
            if(!$check){
                Department::create([
                    'DepartementId' => $dt->Id,
                    'FullyQualifiedName' => $dt->FullyQualifiedName,
                    'Domain'=>$dt->Domain,
                    'Name' => $dt->Name,
                    'SyncToken' => $dt->SyncToken,
                    'SubDepartment' => $dt->SubDepartment,
                    'Sparse' => $dt->Sparse,
                    'Active' => $dt->Active
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
