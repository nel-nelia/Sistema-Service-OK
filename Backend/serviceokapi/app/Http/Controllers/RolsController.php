<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;
use Exception;

class RolsController extends Controller
{

    /**
     * Display a listing of the rols.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rols = Rol::paginate(25);

        return view('rols.index', compact('rols'));
    }

    /**
     * Show the form for creating a new rol.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rols.create');
    }

    /**
     * Store a new rol in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Rol::create($data);

            return redirect()->route('rols.rol.index')
                ->with('success_message', 'Rol was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);

        return view('rols.show', compact('rol'));
    }

    /**
     * Show the form for editing the specified rol.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        

        return view('rols.edit', compact('rol'));
    }

    /**
     * Update the specified rol in the storage.
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
            
            $rol = Rol::findOrFail($id);
            $rol->update($data);

            return redirect()->route('rols.rol.index')
                ->with('success_message', 'Rol was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rol = Rol::findOrFail($id);
            $rol->delete();

            return redirect()->route('rols.rol.index')
                ->with('success_message', 'Rol was successfully deleted.');
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
                'Descripcion' => 'required|string|min:1|max:400',
            'Nombre' => 'required|string|min:1|max:250', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
