<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index()
    {
        $films = DB::table('film')->get();
        // dd($query);
        return view('items.index', compact('films'));
    }

    public function create()
    {
        return view('items.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:film',
            'desc' => 'required',
            'tahun' => 'required',
            'genre' => 'required'
        ]);
        $query = DB::table('film')->insert([
            'judul' => $request['judul'],
            'desc' => $request['desc'],
            'tahun' => $request['tahun'],
            'genre' => $request['genre']
        ]);

        // with untuk membuat session
        return redirect('/film')->with('success', 'Film Saved Successfully!');
    }


    public function show($id)
    {
        // first agar datanya dapat 1
        // jika menggunakan ->get() maka output akan menjadi array
        $query = DB::table('film')->where('id', $id)->first();
        $genre = DB::table('genre')->where('film_id', $id)->get();
        return view('items.show', compact('query', 'genre'));
    }


    public function edit($id)
    {
        $query = DB::table('film')->where('id', $id)->first();
        return view('items.edit', compact('query'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:film',
            'desc' => 'required',
            'tahun' => 'required',
        ]);
        $query = DB::table('film')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'desc' => $request['desc'],
                'tahun' => $request['tahun']
            ]);
        return redirect('/film')->with('success', 'Ques Update Successfully!');
    }

    public function destroy($id)
    {
        $query = DB::table('film')
            ->where('id', $id)
            ->delete();
        return redirect('/film')->with('success', 'Film Delete Successfully!');
    }
}
