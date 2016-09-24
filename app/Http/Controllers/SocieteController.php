<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\TypeSociete;
use App\Gouvernorat;
use App\Delegation;
use App\Secteur;
use App\Convention;
use App\Societe;


class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes = DB::table('societes')
            ->join('types_societes', 'types_societes.id', '=', 'societes.type_societe_id')
            ->select('societes.*', 'types_societes.nom_type_societe')
            ->get();

        return view('societe.index', compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TypesSocietestList = TypeSociete::lists('nom_type_societe', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.type_societe'), '');
        $GouvernoratsList = Gouvernorat::lists('nom_gouvernorat', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.gouvernorat'), '');
        $DelegationsList = Delegation::lists('nom_delegation', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.delegatio'), '');
        $SecteurstList = Secteur::lists('nom_secteur', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.secteur'), '');
        $ConventionstList = Convention::lists('nom_convention', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.convention'), '');



        return view('societe.add', compact('TypesSocietestList','GouvernoratsList','DelegationsList','SecteurstList','ConventionstList'));
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
            'nom_societe' => 'required|max:255',
            'type_societe_id' => 'required|integer|min:1',
            'gouvernorat_id' => 'required|integer|min:1',
            'delegation_id' => 'required|integer|min:1',
            'secteur_id' => 'required|integer|min:1',
            'convention_id' => 'required|integer|min:1',
        ]);

        Societe::create([
            'nom_societe' => $request->nom_societe,
            'type_societe_id' => $request->type_societe_id,
            'gouvernorat_id' => $request->gouvernorat_id,
            'delegation_id' => $request->delegation_id,
            'secteur_id' => $request->secteur_id,
            'convention_id' => $request->convention_id,
            'nombre_travailleurs' => $request->nombre_travailleurs,
            'cdi' => intval($request->cdi),
            'date_cration_societe' => $request->date_cration_societe,
        ]);

        return redirect()->route('societe.index')->withFlashMessage(trans('delegations.message_save_succes_societe'));
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
        $societe = Societe::find($id);

        $TypesSocietestList = TypeSociete::lists('nom_type_societe', 'id');
        $GouvernoratsList = Gouvernorat::lists('nom_gouvernorat', 'id');
        $DelegationsList = Delegation::lists('nom_delegation', 'id');
        $SecteurstList = Secteur::lists('nom_secteur', 'id');
        $ConventionstList = Convention::lists('nom_convention', 'id');

        return view('societe.edit', compact('societe','TypesSocietestList','GouvernoratsList','DelegationsList','SecteurstList','ConventionstList'));
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
        $societeUpdated = Societe::find($id);
        $societeUpdated->fill( [
                        'nom_societe'=>$request->nom_societe,
                        'type_societe_id'=>$request->type_societe_id,
                        'gouvernorat_id'=>$request->gouvernorat_id,
                        'delegation_id'=>$request->delegation_id,
                        'secteur_id'=>$request->secteur_id,
                        'convention_id'=>$request->convention_id,
                        'nombre_travailleurs'=>$request->nombre_travailleurs,
                        'cdi'=>intval($request->cdi),
                        'date_cration_societe'=>$request->date_cration_societe])->save();

        return redirect()->route('societe.index')->withFlashMessage(trans('societe.message_update_succes_societe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Societe::find($id)->delete();
        return redirect()->route('societe.index')->withFlashMessage(trans('delegations.message_delete_succes_societe'));
    }
}
