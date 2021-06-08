<?php

namespace App\Http\Controllers;

use App\Models\Materiauno;
use Illuminate\Http\Request;

/**
 * Class MateriaunoController
 * @package App\Http\Controllers
 */
class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiaunos = Materiauno::paginate();

        return view('materiauno.watch', compact('materiaunos'))
            ->with('i', (request()->input('page', 1) - 1) * $materiaunos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiauno = new Materiauno();
        return view('materiauno.create', compact('materiauno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materiauno::$rules);

        $materiauno = Materiauno::create($request->all());

        return redirect()->route('materiauno.index')
            ->with('success', 'Materiauno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiauno = Materiauno::find($id);

        return view('materiauno.show', compact('materiauno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiauno = Materiauno::find($id);

        return view('materiauno.edit', compact('materiauno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materiauno $materiauno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiauno $materiauno)
    {
        request()->validate(Materiauno::$rules);

        $materiauno->update($request->all());

        return redirect()->route('materiauno.index')
            ->with('success', 'Materiauno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiauno = Materiauno::find($id)->delete();

        return redirect()->route('materiauno.index')
            ->with('success', 'Materiauno deleted successfully');
    }
}
