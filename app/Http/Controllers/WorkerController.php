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
    public function __construct()
    {
        $this->middleware('can:Listar Empleados')->only('index');
        $this->middleware('can:Guardar Empleado')->only('store');
        $this->middleware('can:Actualizar Empleado')->only('update');
        $this->middleware('can:Eliminar Empleado')->only('destroy');
    } 

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
            'users' => User::where('companies_id', $company)->get()->map(function ($user)
            {
                $roles = $user->getRoleNames();
                $array_de_roles = [];
                foreach ($roles as $rol) {
                    array_push($array_de_roles, Role::where('name', $rol)->get() );
                }
                return [
                    "id" => $user->id,
                    "companies_id" => $user->companies_id,
                    "name" => $user->name,
                    "email" => $user->email,
                    "email_verified_at" => $user->email_verified_at,
                    "two_factor_confirmed_at" => $user->two_factor_confirmed_at,
                    "current_team_id" => $user->current_team_id,
                    "profile_photo_path" => $user->profile_photo_path,
                    "created_at" => $user->created_at,
                    "updated_at" => $user->updated_at,
                    "profile_photo_url" => $user->profile_photo_url,
                    "roles" => $array_de_roles[0],
                ];
            }),
            'roles' => Role::where('id', '>', 1)->get(),
            'companies' => Company::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
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

        $user->roles()->sync($request->roles);

        return Redirect::route('workers.index')->with('message', 'Empleado agregado');    
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
        $user->roles()->sync($request->roles);


        if ($request->change_password) {
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->change_password),
            ]);
        } else {
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
        
        return Redirect::route('workers.index')->with('message', 'Empleado actualizado');
        
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
        return Redirect::route('workers.index')->with('message', 'Empleado eliminado');
    }
}
