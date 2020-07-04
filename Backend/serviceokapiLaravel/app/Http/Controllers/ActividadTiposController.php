<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActividadTipo;
use Illuminate\Http\Request;
use Exception;

class ActividadTiposController extends Controller
{

    /**
     * Display a listing of the actividad tipos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $actividadTipos = ActividadTipo::paginate(25);

        return view('actividad_tipos.index', compact('actividadTipos'));
    }

    /**
     * Show the form for creating a new actividad tipo.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('actividad_tipos.create');
    }

    /**
     * Store a new actividad tipo in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            ActividadTipo::create($data);

            return redirect()->route('actividad_tipos.actividad_tipo.index')
                ->with('success_message', 'Actividad Tipo was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified actividad tipo.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $actividadTipo = ActividadTipo::findOrFail($id);

        return view('actividad_tipos.show', compact('actividadTipo'));
    }

    /**
     * Show the form for editing the specified actividad tipo.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $actividadTipo = ActividadTipo::findOrFail($id);
        

        return view('actividad_tipos.edit', compact('actividadTipo'));
    }

    /**
     * Update the specified actividad tipo in the storage.
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
            
            $actividadTipo = ActividadTipo::findOrFail($id);
            $actividadTipo->update($data);

            return redirect()->route('actividad_tipos.actividad_tipo.index')
                ->with('success_message', 'Actividad Tipo was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified actividad tipo from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $actividadTipo = ActividadTipo::findOrFail($id);
            $actividadTipo->delete();

            return redirect()->route('actividad_tipos.actividad_tipo.index')
                ->with('success_message', 'Actividad Tipo was successfully deleted.');
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
                'FlagActivo' => 'required|numeric|min:-2147483648|max:2147483647',
            'Nombre' => 'required|string|min:1|max:250', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
