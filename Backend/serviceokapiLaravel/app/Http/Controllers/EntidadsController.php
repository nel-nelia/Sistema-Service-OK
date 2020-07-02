<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entidad;
use Illuminate\Http\Request;
use Exception;

class EntidadsController extends Controller
{

    /**
     * Display a listing of the entidads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $entidads = Entidad::paginate(25);

        return view('entidads.index', compact('entidads'));
    }

    /**
     * Show the form for creating a new entidad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('entidads.create');
    }

    /**
     * Store a new entidad in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Entidad::create($data);

            return redirect()->route('entidads.entidad.index')
                ->with('success_message', 'Entidad was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified entidad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $entidad = Entidad::findOrFail($id);

        return view('entidads.show', compact('entidad'));
    }

    /**
     * Show the form for editing the specified entidad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $entidad = Entidad::findOrFail($id);
        

        return view('entidads.edit', compact('entidad'));
    }

    /**
     * Update the specified entidad in the storage.
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
            
            $entidad = Entidad::findOrFail($id);
            $entidad->update($data);

            return redirect()->route('entidads.entidad.index')
                ->with('success_message', 'Entidad was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified entidad from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $entidad = Entidad::findOrFail($id);
            $entidad->delete();

            return redirect()->route('entidads.entidad.index')
                ->with('success_message', 'Entidad was successfully deleted.');
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
                'FlagActivo' => 'required|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
