<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;

use App\Http\Requests;
use App\Http\Requests\AddUserRequestAdmin;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function observateur()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(AddUserRequestAdmin $request, User $user)
    {

        return $request->is_admin;

        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->withFlashMessage('تم اضافة العضو بنجاح');

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

    public function myProfile(User $user)
    {
        $user = $user->find(Auth::user()->id);
        return view('users.myprofile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function edit($id, User $user) {
        $user = $user->find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, User $user, Request $request)
    {
        $userUpdated = $user->find($id);
        $userUpdated->fill( $request->all() )->save();

        return Redirect::back()->withFlashMessage('تم التعديل بنجاح');
    }

    public  function updatePassword(Request $request, User $user) {
        $userUpdated = $user->find($request->user_id);
        $password = bcrypt($request->password);
        $userUpdated->fill( ['password'=>$password] )->save();
        return Redirect::back()->withFlashMessage('تم تغيير كلمة المرور بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        $userUpdated = $user->find($id)->delete();
        return redirect()->route('users.index')->withFlashMessage('تم حذف العضو بنجاح');
    }
}
