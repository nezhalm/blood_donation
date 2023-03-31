<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\center;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {

        $users = user::all();
        return view('admin.users',[
        'users' =>$users
    ]);
    }
    public function centres()
    {

        $centres = center::all();
        return view('admin.centres',[
        'centres' =>$centres
    ]);
    }
    public function formec()
    {


        return view('admin.add-centre');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
