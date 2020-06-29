<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Representante;
use Illuminate\Http\Request;
use Exception;

class RepresentantesController extends Controller
{

    /**
     * Display a listing of the representantes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $representantes = Representante::paginate(25);

        return view('representantes.index', compact('representantes'));
    }

    /**
     * Show the form for creating a new representante.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('representantes.create');
    }

    /**
     * Store a new representante in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Representante::create($data);

            return redirect()->route('representantes.representante.index')
                ->with('success_message', 'Representante was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified representante.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $representante = Representante::findOrFail($id);

        return view('representantes.show', compact('representante'));
    }

    /**
     * Show the form for editing the specified representante.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $representante = Representante::findOrFail($id);
        

        return view('representantes.edit', compact('representante'));
    }

    /**
     * Update the specified representante in the storage.
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
            
            $representante = Representante::findOrFail($id);
            $representante->update($data);

            return redirect()->route('representantes.representante.index')
                ->with('success_message', 'Representante was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified representante from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $representante = Representante::findOrFail($id);
            $representante->delete();

            return redirect()->route('representantes.representante.index')
                ->with('success_message', 'Representante was successfully deleted.');
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
                'CorreoEmpresarial' => 'required|string|min:1|max:250',
            'RUC' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
