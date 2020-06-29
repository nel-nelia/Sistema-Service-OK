<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Calificacion;
use App\Models\Establecimiento;
use Illuminate\Http\Request;
use Exception;

class CalificacionsController extends Controller
{

    /**
     * Display a listing of the calificacions.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $calificacions = Calificacion::paginate(25);

        return view('calificacions.index', compact('calificacions'));
    }

    /**
     * Show the form for creating a new calificacion.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Establecimientos = Establecimiento::pluck('id','EstablecimientoID')->all();
        
        return view('calificacions.create', compact('Establecimientos'));
    }

    /**
     * Store a new calificacion in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Calificacion::create($data);

            return redirect()->route('calificacions.calificacion.index')
                ->with('success_message', 'Calificacion was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified calificacion.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $calificacion = Calificacion::with('establecimiento')->findOrFail($id);

        return view('calificacions.show', compact('calificacion'));
    }

    /**
     * Show the form for editing the specified calificacion.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $Establecimientos = Establecimiento::pluck('id','EstablecimientoID')->all();

        return view('calificacions.edit', compact('calificacion','Establecimientos'));
    }

    /**
     * Update the specified calificacion in the storage.
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
            
            $calificacion = Calificacion::findOrFail($id);
            $calificacion->update($data);

            return redirect()->route('calificacions.calificacion.index')
                ->with('success_message', 'Calificacion was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified calificacion from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $calificacion = Calificacion::findOrFail($id);
            $calificacion->delete();

            return redirect()->route('calificacions.calificacion.index')
                ->with('success_message', 'Calificacion was successfully deleted.');
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
                'Comentario' => 'required|string|min:1|max:400',
            'EstablecimientoID' => 'required',
            'NumeroEstrellas' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
