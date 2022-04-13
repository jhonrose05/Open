<?php

namespace App\Http\Controllers;

use App\Models\Inversion;
use Illuminate\Http\Request;

/**
 * Class InversionController
 * @package App\Http\Controllers
 */
class InversionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inversion = Inversion::paginate();

        return view('inversion.index', compact('inversion'))
            ->with('i', (request()->input('page', 1) - 1) * $inversion->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inversion = new Inversion();
        $usuario = Auth()->user()->id;
        // print_r($usuario);die();
        return view('inversion.create', compact('inversion','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inversion::$rules);

        $inversion = Inversion::create($request->all());

        return redirect()->route('inversion.index')
            ->with('success', 'Inversion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inversion = Inversion::find($id);

        return view('inversion.show', compact('inversion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inversion = Inversion::find($id);

        return view('inversion.edit', compact('inversion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inversion $inversion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inversion $inversion)
    {
        request()->validate(Inversion::$rules);

        $inversion->update($request->all());

        return redirect()->route('inversion.index')
            ->with('success', 'Inversion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inversion = Inversion::find($id)->delete();

        return redirect()->route('inversion.index')
            ->with('success', 'Inversion deleted successfully');
    }
}
