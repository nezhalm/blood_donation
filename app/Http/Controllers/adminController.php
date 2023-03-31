<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\center;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function add(Request $request)
    {

        $center = new center();
        $center->nom = $request->input('nom');
        $center->ville = $request->input('ville');
        $center->image = $request->input('image');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $center->image = $filename;
        } else {
            return $request;
            $center->image = '';
        }

        $center->save();
        return redirect()->route('centres.centres');

    }
    public function archive(string $id)
    {

        $livre_archived = center::find($id);
        DB::table('centers')
            ->where('id', $livre_archived->id)
            ->update(['archived' => 1]);
        return redirect()->route('centres.centres');

    }
    public function delete(string $id)


        {
            $cat = center::find($id);
            $cat->delete();
            return redirect()->route('centres.centres');
        }

        public function index()
        {
            return view('admin.rendez-vous');
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
