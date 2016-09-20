<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\StructureSyndicale;

use Auth;

use App\Http\Requests;
use App\Http\Requests\AddUserRequestAdmin;
use Illuminate\Support\Facades\Redirect;

use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;

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
        $RolestList = Role::lists('name', 'id');
        return view('users.add', compact('RolestList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(AddUserRequestAdmin $request)
    {

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();


        Profile::create([
            'user_id' => $user->id,
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

    public function myProfile()
    {
        $user = User::find(Auth::user()->id);
        $profile = $user->profile;
        return view('users.myprofile', compact('user','profile'));
    }

    public function editMyProfile(Request $request)
    {
        $profile = Profile::find(Auth::user()->id);
        $user = User::find(Auth::user()->id);
        $StructuresSyndicalestList = StructureSyndicale::lists('type_structure_syndicale', 'id')->prepend(trans('main.selectionnez') . ' ' . trans('users.structure_syndicale'), '');

        return view('users.editmyprofile', compact('user','profile','StructuresSyndicalestList'));
    }

    public function  updateMyProfile($id, Request $request)
    {

        $profileUpdated = Profile::find($id);
        $profileUpdated->fill( $request->all() )->save();

        return redirect()->route('myprofile')->withFlashMessage(trans('users.message_update_succes_myprofile'));

    }

    public function changePassword(Request $request)
    {
        $profile = Profile::find(Auth::user()->id);
        $user = User::find(Auth::user()->id);

        return view('users.changepassword', compact('user','profile'));
    }

    public function  updateMyPassword($id, Request $request)
    {
        $userUpdated = User::find(Auth::user()->id);
        $password = bcrypt($request->password);
        $userUpdated->fill( ['password'=>$password] )->save();

        return redirect()->route('myprofile')->withFlashMessage('تم تغيير كلمة المرور بنجاح');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function edit($id, User $user) {
        $user = $user->find($id);

        $RolestList = Role::lists('name', 'id');

        return view('users.edit', compact('user','RolestList'));
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

        return redirect()->route('users.index')->withFlashMessage('تم التعديل بنجاح');
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
