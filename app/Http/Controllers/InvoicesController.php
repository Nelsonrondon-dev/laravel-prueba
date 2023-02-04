<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Shopping;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();

        return view('invoices', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();
        $shoppings = Shopping::where('status', 'no_facturado')->get();

        if (count($shoppings) > 0)   {
            foreach ($users as $user) {

                $shoppings = Shopping::where('user_id', $user->id)->where('status', 'no_facturado')->get();

                if (count($shoppings) > 0) {

                    $ids = [];
                    $total_tax = 0;
                    $total_price = 0;

                    foreach ($shoppings as $shopping) {

                        $total_tax = $shopping->price * $shopping->tax + $total_tax;
                        $total_price = $shopping->price + $total_price;

                        $shopping->status = "facturado";

                        $ids[] = $shopping->id;

                        $shopping->update();
                    }

                    $id2 = implode(',', $ids);

                    $invoice = Invoice::create([
                        'user_id' => $user->id,
                        'total_price' => $total_price,
                        'total_tax' => $total_tax,
                        'array_shopping' => $id2,
                    ]);

                }

            }
        } else {

            return back()->with('errors', 'Todas las facturas pendientes estan generadas');

        }

        return redirect()->route('invoices.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        
        $invoice = Invoice::where('id', $id)->first();
        $array = explode(",", $invoice->array_shopping);
        $invoiceArrays = Shopping::whereIn('id', $array)->get();

        return view('invoice', ['invoice' => $invoice , 'invoiceArrays' => $invoiceArrays]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
