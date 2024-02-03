<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Logic to fetch all customers
        $customers = Customer::all();
        return view('customers.index',['customers'=>$customers]);
    }

    public function create()
    {
        // Logic to create a new customer
        return view('customers.create');
    }

    public function show(Customer $customer)
    {
        // Logic to show a specific customer
    }

    public function store(Request $request)
    {
        // Logic to store a new customer
         // Validation rules
         $rules = [
            'group' => 'required',
            'name' => 'required',
            'opening_balance' => 'nullable|numeric',
            'cr_dr' => 'required|in:Cr,Dr',
            'registration_type' => 'required|in:Regular,Unregistered',
            'ecommerce_operator' => 'required|in:Yes,No',
            'trade_name' => 'nullable',
            'mobile_no' => 'nullable|numeric',
            'email' => 'nullable|email',
            'shrinkage_percentage' => 'nullable|numeric',
            'building_name' => 'nullable',
            'building_no' => 'nullable',
            'floor_no' => 'nullable',
            'street' => 'nullable',
            'post' => 'nullable',
            'location_place' => 'nullable',
            'country' => 'nullable',
            'pincode' => 'nullable|numeric',
        ];

        // Custom validation messages
        $messages = [
            // Add custom messages for specific rules if needed
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // Store the customer
        $customer = new Customer();
        $customer->group = $request->group;
        $customer->name = $request->name;
        $customer->opening_balance = $request->opening_balance;
        $customer->cr_dr = $request->cr_dr;
        $customer->registration_type = $request->registration_type;
        $customer->ecommerce_operator = $request->ecommerce_operator;
        $customer->trade_name = $request->trade_name;
        $customer->mobile_no = $request->mobile_no;
        $customer->email = $request->email;
        $customer->shrinkage_percentage = $request->shrinkage_percentage;
        $customer->building_name = $request->building_name;
        $customer->building_no = $request->building_no;
        $customer->floor_no = $request->floor_no;
        $customer->street = $request->street;
        $customer->post = $request->post;
        $customer->location_place = $request->location_place;
        $customer->country = $request->country;
        $customer->pincode = $request->pincode;
        $customer->save();

        // Redirect or return response
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    public function update(Request $request, Customer $customer)
    {
        // Logic to update a customer
    }

    public function destroy(Customer $customer)
    {
        // Logic to delete a customer
    }
}
