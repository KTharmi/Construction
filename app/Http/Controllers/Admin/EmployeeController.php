<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\User;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin/employee/index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::get()->pluck('username','id')->toArray();
        return view('admin.employee.create',compact('users'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Employee $employee)
    {
        return view('admin.employee.update',compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LabourerStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        $employee = new Employee();
        $employee->setAttribute('EmpName', $request->input('EmpName'));
        $employee->setAttribute('EmpAddress', $request->input('EmpAddress'));
        $employee->setAttribute('EmpPhoneNo', $request->input('EmpPhoneNo'));
        $employee->setAttribute('UserId', $request->input('UserId'));
       // $employee->setAttribute('EmpAddress', $request->input('EmpAddress'));
        $employee->save();

        return response()->redirectToRoute('admin.employee.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeStoreRequest $request, Employee $employee)
    {
        $employee->setAttribute('EmpName', $request->input('EmpName'));
        $employee->setAttribute('EmpAddress', $request->input('EmpAddress'));
        $employee->setAttribute('EmpPhoneNo', $request->input('EmpPhoneNo'));
        $employee->setAttribute('UserId', $request->input('UserId'));
        $employee->save();

        return response()->redirectToRoute('admin.employee.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->redirectToRoute('admin.employee.view');
    }
}
