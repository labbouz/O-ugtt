<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Move;

use Illuminate\Support\Facades\Redirect;

class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moves = Move::all();
        return view('move.index', compact('moves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('move.add');
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
            'nom_move' => 'required|max:255',
        ]);

        Move::create([
            'nom_move' => $request->nom_move,
        ]);

        return redirect()->route('move.index')->withFlashMessage(trans('move.message_save_succes_move'));
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
        $move = Move::find($id);
        return view('move.edit', compact('move'));
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
        $moveUpdated = Move::find($id);
        $moveUpdated->fill( $request->all() )->save();

        return redirect()->route('move.index')->withFlashMessage(trans('move.message_update_succes_move'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Move::find($id)->delete();
        return redirect()->route('move.index')->withFlashMessage(trans('message_delete_succes_move'));
    }
}
