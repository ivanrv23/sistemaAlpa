<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customizer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Auth::user()->companies_id;
        // return User::where('companies_id', $company)->get();
        return Inertia::render('Workers/Index', [
            'users' => User::where('companies_id', $company)->get(),
            'roles' => Role::all(),
            'companies' => Company::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'companies_id' => $request->companies_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->roles()->sync($request->role);

        return Redirect::route('workers.index')->with('message', 'Empleado agregado');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        // Asignar roles
        $user->roles()->sync($request->role);

        if ($request->change_password) {
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
                // 'role' => $request->role,
                'password' => bcrypt($request->change_password),
            ]);
        } else {
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
                // 'role' => $request->role,
            ]);
        }
        
        return Redirect::route('users.index')->with('message', 'Empleado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return Redirect::route('users.index')->with('message', 'Empleado eliminado');
    }
}
