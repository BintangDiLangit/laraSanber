<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = DB::table('pertanyaan')->get();
        // dd($query);
        return view('pertanyaan.index', compact('questions'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        // with untuk membuat session
        return redirect('/pertanyaan')->with('success', 'Ques Saved Successfully!');
    }

    public function show($id)
    {
        // first agar datanya dapat 1
        // jika menggunakan ->get() maka output akan menjadi array
        $ques = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('ques'));
    }

    public function edit($id)
    {
        $ques = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('ques'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        return redirect('/pertanyaan')->with('success', 'Ques Update Successfully!');
    }

    public function destroy($id)
    {
        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->delete();
        return redirect('/pertanyaan')->with('success', 'Ques Delete Successfully!');
    }
}
