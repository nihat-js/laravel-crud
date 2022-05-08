<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index (){
        $customer = new Customer();
        return view("customers")->with("customers",$customer->orderBy('customerNumber','desc')->get() );
    }
    public function update ($number){
        $customer = new Customer();
        $customer_ = $customer->where('customerNumber','=',$number)->first();
        return view("customers-update",)->with('info',$customer_);

    }
    public function update_post (Request $request , $customerNumber){
        $customer = new Customer ();
        $customer_ = $customer->where("customerNumber",$customerNumber)->first();

        $customer_->customerName = $request->customerName;
        $customer_->phone = $request->phone;
        $customer_->city = $request->city;
        $customer_->country = $request->country;
        $customer_->creditLimit = $request->creditLimit;

        $customer_->save();
        return redirect()->route('customers');
    }

    public function create (){
        return view("customers-create");
    }
    public function create_post(Request $request){
        $customer = new Customer ();
        $customerNumber =   $customer->orderBy("customerNumber",'desc')->first()->customerNumber + 1;
        $customer->customerNumber = $customerNumber;
        $customer->customerName = $request->customerName;
        $customer->phone = $request->phone;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->creditLimit = $request->creditLimit;

        $customer->save();

        return redirect()->route("customers");

    }
    public function delete ($customerNumber){
        $customer = new Customer ();
        $customer->where('customerNumber','=',$customerNumber)->delete();
        return redirect()->route('customers');
    }
}
