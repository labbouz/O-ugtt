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

use Auth;
use App\User;


class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes = Societe::all();

        return view('societe.index', compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_auth = User::find(Auth::user()->id);
        $TypesSocietestList = TypeSociete::lists('nom_type_societe', 'id')->prepend(' ', '');

        /******* Gouvernorats & Delegations **********/
        $GouvernoratsPermission= Gouvernorat::all();
        $array_gouvernorats_permission =array();
        foreach ($GouvernoratsPermission as $Gouvernorat) {
            // filtrer les gouvernorats permessione
            if ( $user_auth->can('view.'.$Gouvernorat->permission_slug) ) {
                $array_gouvernorats_permission[$Gouvernorat->id] = $Gouvernorat->nom_gouvernorat;
            }
        }
        $GouvernoratsList = collect($array_gouvernorats_permission);
        if(count($array_gouvernorats_permission)>1) {
            $GouvernoratsList->prepend(trans('main.selectionnez') . ' ' . trans('societe.gouvernorat'), '');
            $DelegationsList = Delegation::lists('nom_delegation', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.delegatio'), '');
        } else {
            $DelegationsList = Delegation::where('gouvernorat_id', key($array_gouvernorats_permission))->lists('nom_delegation', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.delegatio'), '');
        }

        /******* Secteurs & Conventions **********/

        $SecteursPermission= Secteur::all();
        $array_secteurs_permission =array();
        foreach ($SecteursPermission as $Secteur) {
            // filtrer les secteurs permessione
            if ( $user_auth->can('view.secteur_'.$Secteur->id) ) {
                $array_secteurs_permission[$Secteur->id] = $Secteur->nom_secteur;
            }
        }
        $SecteurstList = collect($array_secteurs_permission);
        if(count($array_secteurs_permission)>1) {
            $SecteurstList->prepend(trans('main.selectionnez') . ' ' . trans('societe.secteur'), '');
            $ConventionstList = Convention::lists('nom_convention', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.convention'), 0);
        } else {
            $ConventionstList = Convention::where('secteur_id', key($array_secteurs_permission))->lists('nom_convention', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.convention'), 0);
        }

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

        ]); //            'convention_id' => 'required|integer|min:1',

        Societe::create([
            'nom_societe' => $request->nom_societe,
            'nom_marque' => $request->nom_marque,
            'type_societe_id' => $request->type_societe_id,
            'gouvernorat_id' => $request->gouvernorat_id,
            'delegation_id' => $request->delegation_id,
            'secteur_id' => $request->secteur_id,
            'accord_de_fondation' => $request->accord_de_fondation,
            'convention_cadre_commun' => $request->convention_cadre_commun,
            'convention_id' => $request->convention_id,
            'nombre_travailleurs_cdi' => $request->nombre_travailleurs_cdi,
            'nombre_travailleurs_cdd' => $request->nombre_travailleurs_cdd,
            'date_cration_societe' => $request->date_cration_societe,
            'createdby' => Auth::user()->id,
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
        $user_auth = User::find(Auth::user()->id);
        $societe = Societe::find($id);
        $TypesSocietestList = TypeSociete::lists('nom_type_societe', 'id');


        /******* Gouvernorats & Delegations **********/
        $GouvernoratsPermission= Gouvernorat::all();
        $array_gouvernorats_permission =array();
        foreach ($GouvernoratsPermission as $Gouvernorat) {
            // filtrer les gouvernorats permessione
            if ( $user_auth->can('view.'.$Gouvernorat->permission_slug) ) {
                $array_gouvernorats_permission[$Gouvernorat->id] = $Gouvernorat->nom_gouvernorat;
            }
        }
        $GouvernoratsList = collect($array_gouvernorats_permission);
        $DelegationsList = Delegation::where('gouvernorat_id', $societe->gouvernorat_id)->lists('nom_delegation', 'id');

        /******* Secteurs & Conventions **********/
        $SecteursPermission= Secteur::all();
        $array_secteurs_permission =array();
        foreach ($SecteursPermission as $Secteur) {
            // filtrer les secteurs permessione
            if ( $user_auth->can('view.secteur_'.$Secteur->id) ) {
                $array_secteurs_permission[$Secteur->id] = $Secteur->nom_secteur;
            }
        }
        $SecteurstList = collect($array_secteurs_permission);
        $ConventionstList = Convention::where('secteur_id', $societe->secteur_id)->lists('nom_convention', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('societe.convention'), 0);



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
                        'accord_de_fondation' => $request->accord_de_fondation,
                        'convention_cadre_commun' => $request->convention_cadre_commun,
                        'convention_id'=>$request->convention_id,
                        'nombre_travailleurs_cdi'=>$request->nombre_travailleurs_cdi,
                        'nombre_travailleurs_cdd'=>$request->nombre_travailleurs_cdd,
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
