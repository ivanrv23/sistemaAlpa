<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;
use App\Models\Company;
use App\Models\Customizer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PaymentMethodController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Listar Metodos de pago')->only('index');
        $this->middleware('can:Guardar Metodo de pago')->only('store');
        $this->middleware('can:Actualizar Metodo de pago')->only('update');
        $this->middleware('can:Eliminar Metodo de pago')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Auth::user()->companies_id;
        return Inertia::render('PaymentMethods/Index', [
            'paymentMethods' => PaymentMethod::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentMethodRequest $request)
    {
        PaymentMethod::create($request->all());
        return Redirect::route('paymentMethods.index')->with('message', 'Metodo de Pago agregado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentMethodRequest  $request
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentMethodRequest $request, $id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->update($request->all());
        return Redirect::route('paymentMethods.index')->with('message', 'Metodo de Pago Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->delete();
        return Redirect::route('paymentMethods.index')->with('message', 'Metodo de Pago eliminada');
    }
}
