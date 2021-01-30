@extends('layouts.master');

@section('content')
    <div class="mt-3 ml-5">
        <h4>{{ $ques->judul }}</h4>
        <p>{{ $ques->isi }}</p>
    </div>

@endsection
