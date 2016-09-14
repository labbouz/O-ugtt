<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Delegation;

use App\Gouvernorat;

use Illuminate\Support\Facades\Redirect;

class DelegationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delegations = DB::table('delegations')
            ->join('gouvernorats', 'gouvernorats.id', '=', 'delegations.gouvernorat_id')
            ->select('delegations.*', 'gouvernorats.nom_gouvernorat')
            ->get();

        return view('delegation.index', compact('delegations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $GouvernorastList = Gouvernorat::lists('nom_gouvernorat', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('gouvernorats.gouvernorat'), '');

        return view('delegation.add', compact('GouvernorastList'));
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
            'nom_delegation' => 'required|max:255',
            'gouvernorat_id' => 'required|integer|min:1',
        ]);

        Delegation::create([
            'nom_delegation' => $request->nom_delegation,
            'gouvernorat_id' => $request->gouvernorat_id,
        ]);

        return redirect()->route('delegation.index')->withFlashMessage(trans('delegations.message_save_succes_delegation'));
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
        $delegation = Delegation::find($id);

        $GouvernorastList = Gouvernorat::lists('nom_gouvernorat', 'id');

        return view('delegation.edit', compact('delegation','GouvernorastList'));
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
        $delegationUpdated = Delegation::find($id);
        $delegationUpdated->fill( $request->all() )->save();

        return redirect()->route('delegation.index')->withFlashMessage(trans('delegations.message_update_succes_delegation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Delegation::find($id)->delete();
        return redirect()->route('delegation.index')->withFlashMessage(trans('delegations.message_delete_succes_delegation'));
    }
}
