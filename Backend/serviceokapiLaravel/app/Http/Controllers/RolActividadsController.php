<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolActividad;
use Illuminate\Http\Request;
use Exception;

class RolActividadsController extends Controller
{

    /**
     * Display a listing of the rol actividads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rolActividads = RolActividad::paginate(25);

        return view('rol_actividads.index', compact('rolActividads'));
    }

    /**
     * Show the form for creating a new rol actividad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rol_actividads.create');
    }

    /**
     * Store a new rol actividad in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            RolActividad::create($data);

            return redirect()->route('rol_actividads.rol_actividad.index')
                ->with('success_message', 'Rol Actividad was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol actividad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rolActividad = RolActividad::findOrFail($id);

        return view('rol_actividads.show', compact('rolActividad'));
    }

    /**
     * Show the form for editing the specified rol actividad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rolActividad = RolActividad::findOrFail($id);
        

        return view('rol_actividads.edit', compact('rolActividad'));
    }

    /**
     * Update the specified rol actividad in the storage.
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
            
            $rolActividad = RolActividad::findOrFail($id);
            $rolActividad->update($data);

            return redirect()->route('rol_actividads.rol_actividad.index')
                ->with('success_message', 'Rol Actividad was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol actividad from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rolActividad = RolActividad::findOrFail($id);
            $rolActividad->delete();

            return redirect()->route('rol_actividads.rol_actividad.index')
                ->with('success_message', 'Rol Actividad was successfully deleted.');
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
                'DesactivarActividad' => 'required|numeric|min:-2147483648|max:2147483647',
            'DesactivarActividadTipo' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionarActividad' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionarActividadTipo' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
