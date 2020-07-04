<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RolUsuario;
use Illuminate\Http\Request;
use Exception;

class RolUsuariosController extends Controller
{

    /**
     * Display a listing of the rol usuarios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $rolUsuarios = RolUsuario::paginate(25);

        return view('rol_usuarios.index', compact('rolUsuarios'));
    }

    /**
     * Show the form for creating a new rol usuario.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('rol_usuarios.create');
    }

    /**
     * Store a new rol usuario in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            RolUsuario::create($data);

            return redirect()->route('rol_usuarios.rol_usuario.index')
                ->with('success_message', 'Rol Usuario was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified rol usuario.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $rolUsuario = RolUsuario::findOrFail($id);

        return view('rol_usuarios.show', compact('rolUsuario'));
    }

    /**
     * Show the form for editing the specified rol usuario.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $rolUsuario = RolUsuario::findOrFail($id);
        

        return view('rol_usuarios.edit', compact('rolUsuario'));
    }

    /**
     * Update the specified rol usuario in the storage.
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
            
            $rolUsuario = RolUsuario::findOrFail($id);
            $rolUsuario->update($data);

            return redirect()->route('rol_usuarios.rol_usuario.index')
                ->with('success_message', 'Rol Usuario was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified rol usuario from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $rolUsuario = RolUsuario::findOrFail($id);
            $rolUsuario->delete();

            return redirect()->route('rol_usuarios.rol_usuario.index')
                ->with('success_message', 'Rol Usuario was successfully deleted.');
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
                'DesactivaUsuario' => 'required|numeric|min:-2147483648|max:2147483647',
            'GestionaUsuario' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
