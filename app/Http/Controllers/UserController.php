<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('backOffice.pages.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $avatars = Avatar::all();

        return view('backOffice.partials.users.create', compact('roles', 'avatars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'max:30'],
            'nickName' => ['required', 'max:30'],
            'year' => ['required', 'integer'],
            'email' => ['required', 'max:50'],
            'password' => ['required', 'max:50'],

            'role_id' => ['required'],
            'avatar_id' => ['required'],
        ]);
        
        $store = new User;
        $store->name = $request->name;
        $store->nickName = $request->nickName;
        $store->year = $request->year;
        $store->email = $request->email;
        $store->password = $request->password;

        $store->role_id = 2;
        $store->avatar_id = $request->avatar_id;
        $store->save();

        return redirect('back-office/users')->with('Validate', 'User créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        $avatars = Avatar::all();

        return view('backOffice.partials.users.edit', compact('users', 'roles', 'avatars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        $roles = Role::all();
        $avatars = Avatar::all();

        return view('backOffice.partials.users.edit', compact('edit', 'roles', 'avatars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'name' => ['required', 'max:30'],
            'nickName' => ['required', 'max:30'],
            'year' => ['required', 'integer'],

            'avatar_id' => ['required'],
        ]);

        $update = User::find($id);
        $update->name = $request->name;
        $update->nickName = $request->nickName;
        $update->year = $request->year;
        
        $update->role_id = 2;
        $update->avatar_id = $request->avatar_id;
        $update->save();

        return redirect('/back-office/users')->with('warning', 'User modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = User::find($id);
        $destroy->delete();

        return redirect('back-office/users');
    }
}
