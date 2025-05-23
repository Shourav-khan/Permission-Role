<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("users.index", compact('users')); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all();
        return view('users.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required"
        ]);

       $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password) 
        ]);

                $user->syncRoles($request->role);

            return redirect()->route('allUsers.index')->with("success","User Created");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usr1 = User::find($id);
        return view('users.view', compact('usr1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $us = User::find($id);
        return view('users.edit', compact('us'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required"
        ]);

        $usr = User::find($id);

        $usr->name = $request->name;
        $usr->email = $request->email;
        $usr->password =  Hash::make($request->password);

        $usr->save(); 

        return redirect()->route('allUsers.index')->with("success","User Created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('allUsers.index');
    }
}
