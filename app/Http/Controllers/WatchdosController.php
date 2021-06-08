<?php

namespace App\Http\Controllers;

use App\Models\Materiado;
use Illuminate\Http\Request;

/**
 * Class MateriadoController
 * @package App\Http\Controllers
 */
class WatchdosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiados = Materiado::paginate();

        return view('materiado.watch', compact('materiados'))
            ->with('i', (request()->input('page', 1) - 1) * $materiados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiado = new Materiado();
        return view('materiado.create', compact('materiado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materiado::$rules);

        $materiado = Materiado::create($request->all());

        return redirect()->route('materiados.index')
            ->with('success', 'Materiado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiado = Materiado::find($id);

        return view('materiado.show', compact('materiado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiado = Materiado::find($id);

        return view('materiado.edit', compact('materiado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materiado $materiado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiado $materiado)
    {
        request()->validate(Materiado::$rules);

        $materiado->update($request->all());

        return redirect()->route('materiados.index')
            ->with('success', 'Materiado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiado = Materiado::find($id)->delete();

        return redirect()->route('materiados.index')
            ->with('success', 'Materiado deleted successfully');
    }
}
