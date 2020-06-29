<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolCalificacion;
use Illuminate\Http\Request;
use Exception;

class RolCalificacionsController extends Controller
{

    /**
     * Display a listing of the rol calificacions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rolCalificacions = RolCalificacion::paginate(25);

        return view('rol_calificacions.index', compact('rolCalificacions'));
    }

    /**
     * Show the form for creating a new rol calificacion.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rol_calificacions.create');
    }

    /**
     * Store a new rol calificacion in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            RolCalificacion::create($data);

            return redirect()->route('rol_calificacions.rol_calificacion.index')
                ->with('success_message', 'Rol Calificacion was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol calificacion.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rolCalificacion = RolCalificacion::findOrFail($id);

        return view('rol_calificacions.show', compact('rolCalificacion'));
    }

    /**
     * Show the form for editing the specified rol calificacion.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rolCalificacion = RolCalificacion::findOrFail($id);
        

        return view('rol_calificacions.edit', compact('rolCalificacion'));
    }

    /**
     * Update the specified rol calificacion in the storage.
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
            
            $rolCalificacion = RolCalificacion::findOrFail($id);
            $rolCalificacion->update($data);

            return redirect()->route('rol_calificacions.rol_calificacion.index')
                ->with('success_message', 'Rol Calificacion was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol calificacion from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rolCalificacion = RolCalificacion::findOrFail($id);
            $rolCalificacion->delete();

            return redirect()->route('rol_calificacions.rol_calificacion.index')
                ->with('success_message', 'Rol Calificacion was successfully deleted.');
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
                'GestionarCalificacion' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
