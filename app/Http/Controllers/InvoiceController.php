<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        // Logic to fetch all invoices
        $invoices = Invoice::all();
        return view('invoices.index',['invoices'=>$invoices]);
    }

    public function show(Invoice $invoice)
    {
        // Logic to show a specific invoice
    }

    public function create()
    {
        // Logic to create a new invoice
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new invoice
         // Validation rules
         $rules = [
            'inv_no' => 'required|unique:invoices,inv_no',
            'invoice_date' => 'required|date',
            'customer' => 'required',
        ];

        // Custom validation messages
        $messages = [
            'inv_no.unique' => 'The invoice number has already been taken.',
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // Store the invoice
        $invoice = new Invoice();
        $invoice->inv_no = $request->inv_no;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->customer = $request->customer;
        // Add other fields as needed
        $invoice->save();

        // Redirect or return response
        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
    }

    public function update(Request $request, Invoice $invoice)
    {
        // Logic to update an invoice
    }

    public function destroy(Invoice $invoice)
    {
        // Logic to delete an invoice
    }
}
