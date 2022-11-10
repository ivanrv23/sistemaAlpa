<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $company = Auth::user()->companies_id;
        return Inertia::render('Roles/Index', [
            'roles' => Role::where('companies_id', $company)->get()->map(function ($rol)
            {
                return [
                    "id" => $rol->id,
                    "companies_id" => $rol->companies_id,
                    "name" => $rol->name,
                    "permisos" => $rol->getAllPermissions(),
                    "cant_de_permisos" => count($rol->getAllPermissions()),
                ];
            }),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'companies' => Company::all(),
            'company' => Company::find($company),
            'permisos' => Permission::all(),
        ]);
    }

    public function store(Request $request)
    {
        // return $request;
        $role = Role::create([ 
            'name' => $request->name, 
            'companies_id' => $request->companies_id 
        ]);
        $role->permissions()->sync($request->permisos);
        return Redirect::route('roles.index')->with('message', 'Rol agregado');

    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update([
            'name' => $request->name, 
            'companies_id' => $request->companies_id 
        ]);
        $role->permissions()->sync($request->permisos);
        return Redirect::route('roles.index')->with('message', 'Rol actualizado');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return Redirect::route('roles.index')->with('message', 'Rol eliminado');
    }
}
