<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


class TaskController extends Controller
{

    public function index(){
        $customers = Customer::paginate(5);
        return view('Components.customers',compact('customers'));
    }
    public function save(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
        ]);

        $customer = new customer;
        $customer->username=$request->name;
        $customer->email=$request->email;
        $customer->phonenumber=$request->number;
        $customer->address=$request->address;
        $customer->save();
        return $customer;
    }
    public function edit($id){
        $customers = Customer::find($id);
        return view('components.edit',compact('customers'));
    }
    public function update(Request $request){
        $customer =Customer::find($request->id);

        $customer->username=$request->name;
        $customer->email=$request->email;
        $customer->phonenumber=$request->number;
        $customer->address=$request->address;
        $customer->save();

        return 'update sussfully';
    }
    public function delete($id){
        $customers = customer::find($id);
        $customers->delete();

        return back();
    }
    
}
