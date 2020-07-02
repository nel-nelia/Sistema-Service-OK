<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Actividadtipo;
use Illuminate\Http\Request;
use Exception;

class ActividadsController extends Controller
{

    /**
     * Display a listing of the actividads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $actividads = Actividad::with('actividadtipo')->paginate(25);

        return view('actividads.index', compact('actividads'));
    }

    /**
     * Show the form for creating a new actividad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Actividadtipos = Actividadtipo::pluck('FlagActivo','ActividadTipoID')->all();
        
        return view('actividads.create', compact('Actividadtipos'));
    }

    /**
     * Store a new actividad in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Actividad::create($data);

            return redirect()->route('actividads.actividad.index')
                ->with('success_message', 'Actividad was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified actividad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $actividad = Actividad::with('actividadtipo')->findOrFail($id);

        return view('actividads.show', compact('actividad'));
    }

    /**
     * Show the form for editing the specified actividad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $actividad = Actividad::findOrFail($id);
        $Actividadtipos = Actividadtipo::pluck('FlagActivo','ActividadTipoID')->all();

        return view('actividads.edit', compact('actividad','Actividadtipos'));
    }

    /**
     * Update the specified actividad in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $actividad = Actividad::findOrFail($id);
            $actividad->update($data);

            return redirect()->route('actividads.actividad.index')
                ->with('success_message', 'Actividad was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified actividad from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $actividad = Actividad::findOrFail($id);
            $actividad->delete();

            return redirect()->route('actividads.actividad.index')
                ->with('success_message', 'Actividad was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'ActividadTipoID' => 'required',
            'Descripcion' => 'required|string|min:1|max:400',
            'FlagActivo' => 'required|numeric|min:-2147483648|max:2147483647',
            'Nombre' => 'required|string|min:1|max:250', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
