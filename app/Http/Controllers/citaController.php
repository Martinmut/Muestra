<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cita;
use Illuminate\Http\Request;

class citaController extends Controller
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
            $cita = Cita::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('usuario_id', 'LIKE', "%$keyword%")
                ->orWhere('vehiculo_id', 'LIKE', "%$keyword%")
                ->orWhere('lugar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cita = Cita::latest()->paginate($perPage);
        }

        return view('cita.index', compact('cita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cita.create');
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
        
        $requestData = $request->all();
        
        Cita::create($requestData);

        return redirect('cita')->with('flash_message', 'Cita added!');
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
        $citum = Cita::findOrFail($id);

        return view('cita.show', compact('citum'));
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
        $citum = Cita::findOrFail($id);

        return view('cita.edit', compact('citum'));
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
        
        $requestData = $request->all();
        
        $citum = Cita::findOrFail($id);
        $citum->update($requestData);

        return redirect('cita')->with('flash_message', 'Cita updated!');
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
        Cita::destroy($id);

        return redirect('cita')->with('flash_message', 'Cita deleted!');
    }
}
