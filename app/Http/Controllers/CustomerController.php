<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers', [
            'customers' => Customer::orderBy('id')->get(),
        ]);
    }

    public function create()
    {
        return view('customer_form', [
            'customer' => null,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        Customer::create($data);

        return redirect()->route('customers')
            ->with('success', 'Customer created successfully.');
    }

    public function edit(Customer $customer)
    {
        return view('customer_form', [
            'customer' => $customer,
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        $customer->update($data);

        return redirect()->route('customers')
            ->with('success', 'Customer updated successfully.');
    }
}