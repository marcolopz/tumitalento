<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DataTables;

class EmployeeController extends BaseController
{
    public function index(Request $request){
        $path = storage_path() . '\employees.json';
        $json = file_get_contents($path);
        $employees = json_decode($json);
        if($request->ajax()){
            return DataTables::of($employees)
                ->addColumn('actions', function($employee){
                    $actions = '<a href="/employees/'. $employee->id.'" class="btn btn-info btn-sm">Details</a>';
                    return $actions;
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('employees.index', compact('employees'));
    }
    
    public function show($id)
    {   
        $path = storage_path() . '\employees.json';
        $json = file_get_contents($path);
        $employees = json_decode($json);
        $employee = $employees[array_search($id, $employees)];
        return view('employees.show',compact('employee'));
    }
}
