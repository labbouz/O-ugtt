<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeViolation;
use App\Violation;
use App\Societe;
use App\Dossier;
use App\Move;

use App\StructureSyndicale;

use DB;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dossiers = DB::table('dossiers')
            ->join('societes', 'societes.id', '=', 'dossiers.societe_id')
            ->join('gouvernorats', 'gouvernorats.id', '=', 'societes.gouvernorat_id')
            ->join('secteurs', 'secteurs.id', '=', 'societes.secteur_id')
            ->select('dossiers.*', 'societes.nom_societe', 'secteurs.nom_secteur', 'gouvernorats.nom_gouvernorat')
            ->get();

        return view('dossier.index', compact('dossiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectSociete()
    {
        $societes = Societe::all();

        return view('societe.select', compact('societes'));
    }

    public function create($societe_id)
    {
        $societe = Societe::find($societe_id);

        $types_violations = TypeViolation::all();
        $moves = Move::all();

        $ListViolations = Violation::all();

        $StructuresSyndicalestList = StructureSyndicale::lists('type_structure_syndicale', 'id')->prepend(' ', '');



        return view('dossier.add', compact('societe','types_violations', 'moves', 'ListViolations','StructuresSyndicalestList') );
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
            'settlement_status' => 'required|max:255',
            'societe_id' => 'required|integer|min:1',
        ]);

        Dossier::create([
            'settlement_status' => $request->settlement_status,
            'societe_id' => $request->societe_id,
        ]);

        return redirect()->route('dossier.index')->withFlashMessage(trans('delegations.message_save_succes_dossier'));
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
        $dossier = Dossier::find($id);

        return view('dossier.edit', compact('dossier'));
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
        $dossierUpdated = Dossier::find($id);
        $dossierUpdated->fill( $request->all() )->save();

        return redirect()->route('dossier.index')->withFlashMessage(trans('dossier.message_update_succes_dossier'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dossier::find($id)->delete();
        return redirect()->route('dossier.index')->withFlashMessage(trans('dossier.message_delete_succes_dossier'));
    }
}
