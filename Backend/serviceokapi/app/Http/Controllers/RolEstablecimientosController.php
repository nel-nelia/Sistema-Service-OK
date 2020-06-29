<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolEstablecimiento;
use Illuminate\Http\Request;
use Exception;

class RolEstablecimientosController extends Controller
{

    /**
     * Display a listing of the rol establecimientos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rolEstablecimientos = RolEstablecimiento::paginate(25);

        return view('rol_establecimientos.index', compact('rolEstablecimientos'));
    }

    /**
     * Show the form for creating a new rol establecimiento.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rol_establecimientos.create');
    }

    /**
     * Store a new rol establecimiento in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            RolEstablecimiento::create($data);

            return redirect()->route('rol_establecimientos.rol_establecimiento.index')
                ->with('success_message', 'Rol Establecimiento was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol establecimiento.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rolEstablecimiento = RolEstablecimiento::findOrFail($id);

        return view('rol_establecimientos.show', compact('rolEstablecimiento'));
    }

    /**
     * Show the form for editing the specified rol establecimiento.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rolEstablecimiento = RolEstablecimiento::findOrFail($id);
        

        return view('rol_establecimientos.edit', compact('rolEstablecimiento'));
    }

    /**
     * Update the specified rol establecimiento in the storage.
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
            
            $rolEstablecimiento = RolEstablecimiento::findOrFail($id);
            $rolEstablecimiento->update($data);

            return redirect()->route('rol_establecimientos.rol_establecimiento.index')
                ->with('success_message', 'Rol Establecimiento was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol establecimiento from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rolEstablecimiento = RolEstablecimiento::findOrFail($id);
            $rolEstablecimiento->delete();

            return redirect()->route('rol_establecimientos.rol_establecimiento.index')
                ->with('success_message', 'Rol Establecimiento was successfully deleted.');
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
                'DesactivarEstablecimiento' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionarEstablecimiento' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionarUbicacion' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
