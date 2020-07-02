<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Establecimiento;
use App\Models\Representante;
use Illuminate\Http\Request;
use Exception;

class EstablecimientosController extends Controller
{

    /**
     * Display a listing of the establecimientos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $establecimientos = Establecimiento::with('actividad','representante')->paginate(25);

        return view('establecimientos.index', compact('establecimientos'));
    }

    /**
     * Show the form for creating a new establecimiento.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Actividads = Actividad::pluck('ActividadTipoID','ActividadID')->all();
$Representantes = Representante::pluck('CorreoEmpresarial','EntidadID')->all();
        
        return view('establecimientos.create', compact('Actividads','Representantes'));
    }

    /**
     * Store a new establecimiento in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Establecimiento::create($data);

            return redirect()->route('establecimientos.establecimiento.index')
                ->with('success_message', 'Establecimiento was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified establecimiento.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $establecimiento = Establecimiento::with('actividad','representante')->findOrFail($id);

        return view('establecimientos.show', compact('establecimiento'));
    }

    /**
     * Show the form for editing the specified establecimiento.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $establecimiento = Establecimiento::findOrFail($id);
        $Actividads = Actividad::pluck('ActividadTipoID','ActividadID')->all();
$Representantes = Representante::pluck('CorreoEmpresarial','EntidadID')->all();

        return view('establecimientos.edit', compact('establecimiento','Actividads','Representantes'));
    }

    /**
     * Update the specified establecimiento in the storage.
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
            
            $establecimiento = Establecimiento::findOrFail($id);
            $establecimiento->update($data);

            return redirect()->route('establecimientos.establecimiento.index')
                ->with('success_message', 'Establecimiento was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified establecimiento from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $establecimiento = Establecimiento::findOrFail($id);
            $establecimiento->delete();

            return redirect()->route('establecimientos.establecimiento.index')
                ->with('success_message', 'Establecimiento was successfully deleted.');
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
                'ActividadID' => 'required',
            'CoordenadaX' => 'required|string|min:1|max:250',
            'CoordenadaY' => 'required|string|min:1|max:250',
            'Delivery' => 'required|numeric|min:-2147483648|max:2147483647',
            'EntidadID' => 'required',
            'FlagActivo' => 'required|numeric|min:-2147483648|max:2147483647',
            'Nombre' => 'required|string|min:1|max:250',
            'Permiso' => 'required|numeric|min:-2147483648|max:2147483647',
            'RUC' => 'required|numeric|min:-2147483648|max:2147483647',
            'Telefono' => 'required|numeric|min:-2147483648|max:2147483647',
            'WhatsappURL' => 'required|string|min:1|max:250', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
