<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculo;
use Illuminate\Http\Request;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $vehiculo = Vehiculo::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('matricula', 'LIKE', "%$keyword%")
                ->orWhere('color', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vehiculo = Vehiculo::latest()->paginate($perPage);
        }

        return view('vehiculo.index', compact('vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'nombre' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        Vehiculo::create($requestData);

        return redirect('vehiculo')->with('flash_message', 'Vehiculo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nombre' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($requestData);

        return redirect('vehiculo')->with('flash_message', 'Vehiculo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Vehiculo::destroy($id);

        return redirect('vehiculo')->with('flash_message', 'Vehiculo deleted!');
    }
}
