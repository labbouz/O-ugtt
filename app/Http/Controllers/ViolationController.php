<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\TypeViolation;
use App\Gravite;
use App\Violation;

use Illuminate\Support\Facades\Redirect;


class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $violations = DB::table('violations')
            ->join('types_violations', 'types_violations.id', '=', 'violations.type_violationt_id')
            ->join('gravites', 'gravites.id', '=', 'violations.gravite_id')
            ->select('violations.*', 'types_violations.nom_type_violation', 'types_violations.class_color_type_violation', 'gravites.nom_gravite', 'gravites.class_color_gravite')
            ->get();

        return view('violation.index', compact('violations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_type_violation=null)
    {
        $TypeViolationtList = TypeViolation::lists('nom_type_violation', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('violations.type_violation'), '');

        $GraviteList = Gravite::lists('nom_gravite', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('violations.gravite'), '');

        if(!is_null($id_type_violation)) {
            $typeViolation = TypeViolation::find($id_type_violation);
            return view('violation.add', compact('TypeViolationtList','GraviteList', 'typeViolation'));
        } else {
            return view('violation.add', compact('TypeViolationtList','GraviteList'));
        }

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
            'nom_violation' => 'required|max:255',
            'type_violationt_id' => 'required|integer|min:1',
            'gravite_id' => 'required|integer|min:1',
        ]);

        $violation = Violation::create([
            'nom_violation' => $request->nom_violation,
            'description_violation' => $request->description_violation,
            'type_violationt_id' => $request->type_violationt_id,
            'gravite_id' => $request->gravite_id,
            'class_color_violation' => $request->class_color_violation,
        ]);

        return redirect()->route('violation.show',$violation->type_violationt_id)->withFlashMessage(trans('violations.message_save_succes_violation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_type_violation)
    {
        $violations = DB::table('violations')
            ->join('types_violations', 'types_violations.id', '=', 'violations.type_violationt_id')
            ->join('gravites', 'gravites.id', '=', 'violations.gravite_id')
            ->select('violations.*', 'types_violations.nom_type_violation', 'types_violations.class_color_type_violation', 'gravites.nom_gravite', 'gravites.class_color_gravite')
            ->where('violations.type_violationt_id', '=', $id_type_violation)
            ->get();

        $typeViolation = TypeViolation::find($id_type_violation);


        return view('violation.index', compact('violations','typeViolation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $violation = Violation::find($id);

        $TypeViolationtList = TypeViolation::lists('nom_type_violation', 'id');

        $GraviteList = Gravite::lists('nom_gravite', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('violations.gravite'), '');

        return view('violation.edit', compact('violation','TypeViolationtList','GraviteList'));
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
        $violationUpdated = Violation::find($id);
        $violationUpdated->fill( $request->all() )->save();

        return redirect()->route('violation.show',$violationUpdated->type_violationt_id)->withFlashMessage(trans('violations.message_update_succes_violation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Violation::find($id)->delete();
        return redirect()->route('violation.index')->withFlashMessage(trans('violations.message_delete_succes_violation'));
    }
}
