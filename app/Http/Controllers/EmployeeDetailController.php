<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emp_cruds = employee::orderBy('name','asc')
                    ->orderBy('email','asc')
                    ->paginate(10);
                    
      
        return view('display', compact('emp_cruds'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employeedetail = employee::find($id);
        return view('update', ['employeedetail'=>$employeedetail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employeedata=[
        'name'=>$request->name,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
        ];
        $employee_update = employee::find($id);
        $suceess = $employee_update->update($employeedata);
        return redirect('/emp_detail');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee_delete = employee::find($id);
        $success = $employee_delete->delete();
        return redirect('/emp_detail');
    }
    public function addNewEmployee()
    {
        return view('new_employee');
    }
    public function newEmployee_details(Request $request)
    {
        // return $request->all();
        $employeedata=[
        'name'=>$request->name,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
        ];
        $suceess = employee::create($employeedata);
        return redirect('/emp_detail');

    }
    
    
}
