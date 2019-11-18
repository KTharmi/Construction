<?php

namespace App\Http\Controllers\Admin;
use App\Customer;
use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin/customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CustomerStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request)
    {
        $customer = new Customer();
        $customer->setAttribute('CustName', $request->input('CustName'));
        $customer->setAttribute('CustAdress', $request->input('CustAdress'));
        $customer->setAttribute('CustPhoneNo', $request->input('CustPhoneNo'));
        $customer->save();

        return response()->redirectToRoute('admin.customer.view');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('estimator.customer.update',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerStoreRequest $request, Customer $customer)
    {
        $customer->setAttribute('CustName', $request->input('CustName'));
        $customer->setAttribute('CustAdress', $request->input('CustAdress'));
        $customer->setAttribute('CustPhoneNo', $request->input('CustPhoneNo'));
        $customer->save();

        return response()->redirectToRoute('admin.customer.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
