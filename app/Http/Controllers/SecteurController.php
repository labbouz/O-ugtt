<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Secteur;

use DB;

use Illuminate\Support\Facades\Redirect;

use Kodeine\Acl\Models\Eloquent\Permission;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteurs = Secteur::all();
        return view('secteur.index', compact('secteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secteur.add');
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
            'nom_secteur' => 'required|max:255',
        ]);

        $secteuradedd = Secteur::create([
            'nom_secteur' => $request->nom_secteur,
        ]);

        Permission::create([
            'name'        => 'secteur_'.$secteuradedd->id,
            'slug'        => [
                'create'     => true,
                'read'     => true,
                'view'       => true,
                'update'     => true,
                'delete'     => true,
            ],
            'description' => trans('users.permission_secteur').' '.$secteuradedd->nom_secteur
        ]);
        return redirect()->route('secteur.index')->withFlashMessage(trans('secteur.message_save_succes_secteur'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secteur = Secteur::find($id);
        return view('secteur.show', compact('secteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secteur = Secteur::find($id);
        return view('secteur.edit', compact('secteur'));
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
        $secteurUpdated = Secteur::find($id);
        $secteurUpdated->fill( $request->all() )->save();

        DB::table('permissions')
            ->where('name', 'secteur_'.$secteurUpdated->id)
            ->update(['description' => trans('users.permission_secteur').' '.$secteurUpdated->nom_secteur]);

        return redirect()->route('secteur.index')->withFlashMessage(trans('secteur.message_update_succes_secteur'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Secteur::find($id)->delete();
        return redirect()->route('secteur.index')->withFlashMessage(trans('message_delete_succes_secteur'));
    }
}
