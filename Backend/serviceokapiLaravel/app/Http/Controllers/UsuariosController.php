<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Exception;

class UsuariosController extends Controller
{

    /**
     * Display a listing of the usuarios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $usuarios = Usuario::with('rol')->paginate(25);

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new usuario.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Rols = Rol::pluck('id','RolID')->all();
        
        return view('usuarios.create', compact('Rols'));
    }

    /**
     * Store a new usuario in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Usuario::create($data);

            return redirect()->route('usuarios.usuario.index')
                ->with('success_message', 'Usuario was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified usuario.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $usuario = Usuario::with('rol')->findOrFail($id);

        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified usuario.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $Rols = Rol::pluck('id','RolID')->all();

        return view('usuarios.edit', compact('usuario','Rols'));
    }

    /**
     * Update the specified usuario in the storage.
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
            
            $usuario = Usuario::findOrFail($id);
            $usuario->update($data);

            return redirect()->route('usuarios.usuario.index')
                ->with('success_message', 'Usuario was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified usuario from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $usuario = Usuario::findOrFail($id);
            $usuario->delete();

            return redirect()->route('usuarios.usuario.index')
                ->with('success_message', 'Usuario was successfully deleted.');
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
                'RolID' => 'required',
            'Secret' => 'required|string|min:1|max:20',
            'Usuario' => 'required|string|min:1|max:20', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
