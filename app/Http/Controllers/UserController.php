<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Company;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Customizer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Listar Usuarios')->only('index');
        $this->middleware('can:Guardar Usuario')->only('store');
        $this->middleware('can:Actualizar Usuario')->only('update');
        $this->middleware('can:Eliminar Usuario')->only('destroy');
    }

    public function index()
    {
        $company = Auth::user()->companies_id;
        $roles = Role::all();

        return Inertia::render('Users/Index', [
            'users' => User::all()->map(function ($user)
            {
                $roles = $user->getRoleNames();
                $array_de_roles = [];
                foreach ($roles as $rol) {
                    array_push($array_de_roles, Role::where('name', $rol)->get() );
                }
                return [
                    "id" => $user->id,
                    "companies_id" => $user->companies_id,
                    "company_name" => Company::find($user->companies_id)->name,
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
            'roles' => $roles,
            'companies' => Company::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'companies_id' => $request->companies_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->roles()->sync($request->roles);

        return Redirect::route('users.index')->with('message', 'Usuario agregado');
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        
        // Asignar roles
        $user->roles()->sync($request->roles);


        if ($request->change_password) { //En caso de que quiera cambiar la clave
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->change_password),
            ]);
        } else { //en caso de que no queira actualizar la clave
            $user->update([
                'companies_id' => $request->companies_id,
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
        
        return Redirect::route('users.index')->with('message', 'Usuario actualizado');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return Redirect::route('users.index')->with('message', 'Usuario eliminado');
    }    
}

