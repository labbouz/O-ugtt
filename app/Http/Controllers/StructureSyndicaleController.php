<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\StructureSyndicale;

use Illuminate\Support\Facades\Redirect;

class StructureSyndicaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structures_syndicales = StructureSyndicale::all();
        return view('structure_syndicale.index', compact('structures_syndicales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('structure_syndicale.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type_structure_syndicale' => 'required|max:255',
        ]);

        StructureSyndicale::create([
            'type_structure_syndicale' => $request->type_structure_syndicale,
            'description_type' => $request->description_type,
        ]);



        return redirect()->route('structure_syndicale.index')->withFlashMessage(trans('syndicale.message_save_succes_structure_syndicale'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $structure_syndicale = StructureSyndicale::find($id);
        return view('structure_syndicale.edit', compact('structure_syndicale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $structure_syndicaleUpdated = StructureSyndicale::find($id);
        $structure_syndicaleUpdated->fill( $request->all() )->save();

        return redirect()->route('structure_syndicale.index')->withFlashMessage(trans('syndicale.message_update_succes_structure_syndicale'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StructureSyndicale::find($id)->delete();
        return redirect()->route('structure_syndicale.index')->withFlashMessage(trans('syndicale.message_delete_succes_structure_syndicale'));
    }
}
