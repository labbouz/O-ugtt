<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeViolation;
use App\Violation;
use App\Societe;
use App\Dossier;
use App\Move;
use App\Media;
use App\Plainte;

use App\Dossier_move;
use App\Media_dossier;
use App\Plainte_dossier;

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
        $medias = Media::all();
        $plaintes = Plainte::all();

        $ListViolations = Violation::all();

        $StructuresSyndicalestList = StructureSyndicale::lists('type_structure_syndicale', 'id')->prepend(' ', '');

        $dossier = new Dossier();
        $dossier->societe_id =  $societe_id;

        return view('dossier.add', compact('dossier','societe','types_violations', 'moves','medias','plaintes', 'ListViolations','StructuresSyndicalestList') );
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

        $dossier = Dossier::create([
            'settlement_status' => $request->settlement_status,
            'societe_id' => $request->societe_id,
            'remarque' => $request->remarque,
        ]);

        if (count($request->moves) > 0) {
            $moves = $request->moves;
            foreach ($moves as $id_move) {
                $dossier_move = new Dossier_move();
                $dossier_move->move_id = $id_move;
                $dossier_move->dossier_id = $dossier->id;
                $dossier_move->save();
            }
        }

        if (count($request->medias) > 0) {
            $medias = $request->medias;
            foreach ($medias as $id_media) {
                $media_dossier = new Media_dossier();
                $media_dossier->media_id = $id_media;
                $media_dossier->dossier_id = $dossier->id;
                $media_dossier->save();
            }
        }

        if (count($request->plaintes) > 0) {
            $plaintes = $request->plaintes;
            foreach ($plaintes as $id_plainte) {
                $plainte_dossier = new Plainte_dossier();
                $plainte_dossier->	plainte_id = $id_plainte;
                $plainte_dossier->dossier_id = $dossier->id;
                $plainte_dossier->save();
            }
        }

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

        $societe = Societe::find($dossier->societe_id);
        $types_violations = TypeViolation::all();
        $moves = Move::all();
        $medias = Media::all();
        $plaintes = Plainte::all();

        $ListViolations = Violation::all();

        $StructuresSyndicalestList = StructureSyndicale::lists('type_structure_syndicale', 'id')->prepend(' ', '');





        return view('dossier.edit', compact('dossier','societe','types_violations', 'moves', 'medias', 'plaintes','ListViolations','StructuresSyndicalestList') );
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

        $dossierUpdated->moves()->sync($request->moves);

        $dossierUpdated->medias()->sync($request->medias);

        $dossierUpdated->plaintes()->sync($request->plaintes);


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
