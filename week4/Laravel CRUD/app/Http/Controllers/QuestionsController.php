<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        // $questions = DB::table('questions')->get(); // select * from questions
        // dd($query);

        // menggunakan model eloquent
        $questions = Question::orderBy('created_at', 'desc')->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required'
        ]);

        // Dengan query builder
        // $query = DB::table('questions')->insert([
        //     'judul' => $request['judul'],
        //     'isi' => $request['isi']
        // ]);

        // Dengan eloquent save()
        // $ques = new Question;
        // $ques->judul = $request['judul'];
        // $ques->isi = $request['isi'];
        // $ques->save(); // insert into questions(judul,isi) values()

        // Dengan eloquent mess => harus ngisi fillable nya dulu di modelnya => App/Question.php
        $question = Question::create([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        // with untuk membuat session
        return redirect('/questions')->with('success', 'Ques Saved Successfully!');
    }

    public function show($id)
    {
        // first agar datanya dapat 1
        // jika menggunakan ->get() maka output akan menjadi array
        // $ques = DB::table('questions')->where('id', $id)->first();

        // menggunakan eloquent
        $ques = Question::find($id);
        return view('questions.show', compact('ques'));
    }

    public function edit($id)
    {
        // $ques = DB::table('questions')->where('id', $id)->first();

        // menggunakan eloquent
        $ques = Question::find($id);
        return view('questions.edit', compact('ques'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required', // |unique:questions => kalau mau gapake unique
            'isi' => 'required'
        ]);

        // with query builder
        // $query = DB::table('questions')
        //     ->where('id', $id)
        //     ->update([
        //         'judul' => $request['judul'],
        //         'isi' => $request['isi']
        //     ]);

        // with eloquent | mess update
        $question = Question::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);
        return redirect('/questions')->with('success', 'Ques Update Successfully!');
    }

    public function destroy($id)
    {
        // query builder
        // $query = DB::table('questions')
        //     ->where('id', $id)
        //     ->delete();

        // eloquent destroy
        Question::destroy($id);
        return redirect('/questions')->with('success', 'Ques Delete Successfully!');
    }
}
