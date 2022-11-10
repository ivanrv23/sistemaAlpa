<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use App\Http\Requests\StoreMeasureRequest;
use App\Http\Requests\UpdateMeasureRequest;
use App\Models\Company;
use App\Models\Customizer;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class MeasureController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Listar Medidas')->only('index');
        $this->middleware('can:Guardar Medida')->only('store');
        $this->middleware('can:Actualizar Medida')->only('update');
        $this->middleware('can:Eliminar Medida')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Auth::user()->companies_id;
        return Inertia::render('Measures/Index', [
            'measures' => Measure::all(),
            'colors' => Customizer::where('companies_id', $company)->get(),
            'company' => Company::find(Auth::user()->companies_id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeasureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeasureRequest $request)
    {
        Measure::create($request->all());
        return Redirect::route('measures.index')->with('message', 'Unidad de Medida agregada');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeasureRequest  $request
     * @param  \App\Models\Measure  $measure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeasureRequest $request, $id)
    {
        $measure = Measure::find($id);
        $measure->update($request->all());
        return Redirect::route('measures.index')->with('message', 'Unidad de Medida actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measure  $measure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $measure = Measure::find($id);
        $measure->delete();
        return Redirect::route('measures.index')->with('message', 'Unidad de Medida eliminada');
    }
}