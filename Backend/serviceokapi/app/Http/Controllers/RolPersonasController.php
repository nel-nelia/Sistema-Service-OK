<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolPersona;
use Illuminate\Http\Request;
use Exception;

class RolPersonasController extends Controller
{

    /**
     * Display a listing of the rol personas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rolPersonas = RolPersona::paginate(25);

        return view('rol_personas.index', compact('rolPersonas'));
    }

    /**
     * Show the form for creating a new rol persona.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rol_personas.create');
    }

    /**
     * Store a new rol persona in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            RolPersona::create($data);

            return redirect()->route('rol_personas.rol_persona.index')
                ->with('success_message', 'Rol Persona was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol persona.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rolPersona = RolPersona::findOrFail($id);

        return view('rol_personas.show', compact('rolPersona'));
    }

    /**
     * Show the form for editing the specified rol persona.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rolPersona = RolPersona::findOrFail($id);
        

        return view('rol_personas.edit', compact('rolPersona'));
    }

    /**
     * Update the specified rol persona in the storage.
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
            
            $rolPersona = RolPersona::findOrFail($id);
            $rolPersona->update($data);

            return redirect()->route('rol_personas.rol_persona.index')
                ->with('success_message', 'Rol Persona was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol persona from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rolPersona = RolPersona::findOrFail($id);
            $rolPersona->delete();

            return redirect()->route('rol_personas.rol_persona.index')
                ->with('success_message', 'Rol Persona was successfully deleted.');
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
                'GestionaPersona' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionaRepresentante' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
