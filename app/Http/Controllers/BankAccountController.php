<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;
use App\Models\Company;
use App\Models\Customizer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BankAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Listar Cuentas Bancarias')->only('index');
        $this->middleware('can:Guardar Cuentas Bancarias')->only('store');
        $this->middleware('can:Actualizar Cuentas Bancarias')->only('update');
        $this->middleware('can:Eliminar Cuentas Bancarias')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Auth::user()->companies_id;
        return Inertia::render('BankAccounts/Index', [
            'bankAccounts' => BankAccount::where('companies_id', Auth::user()->companies_id)->get(),
            'companies' => Company::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankAccountRequest $request)
    {
        BankAccount::create($request->all());
        return Redirect::route('bankAccounts.index')->with('message', 'Cuenta agregada');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankAccountRequest  $request
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankAccountRequest $request,  $id)
    {
        $bankAccount = BankAccount::find($id);
        $bankAccount->update($request->all());
        return Redirect::route('bankAccounts.index')->with('message', 'Cuenta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bankAccount = BankAccount::find($id);
        $bankAccount->delete();
        return Redirect::route('bankAccounts.index')->with('message', 'Cuenta eliminada');
    }
}
