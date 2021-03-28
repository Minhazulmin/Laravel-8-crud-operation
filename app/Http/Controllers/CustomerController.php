<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
  public function home()
  {
    $customer_details = Customer::orderBy('id','asc')->get();
    return view('welcome',compact('customer_details'));
  }
  public function customer()
  {
     return view('addCustomer');
  }
  public function store(Request $request)
  {
    $customer = new Customer();
    $customer->name = $request->name;
    $customer->phone = $request->phone;
    $customer->address = $request->address;
    $customer->save();
    session()->flash('success','New Caustomer Has Added Successfully');
    return redirect()->route('home');
  }
  public function edit_customer($id)
  {
    $edit_customer = Customer::find($id);
    return view('editCustomer',compact('edit_customer'));
  }
  public function update_customer(Request $request,$id)
  {
    $customer = Customer::find($id);
    $customer->name = $request->name;
    $customer->phone = $request->phone;
    $customer->address = $request->address;
    $customer->save();
    session()->flash('success','Caustomer Data Updated Successfully');
    return redirect()->route('home');
  }
  public function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();
    session()->flash('success','Customer Delete Successfully');
    return back();
  }
}
