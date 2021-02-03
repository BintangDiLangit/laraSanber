@extends('layouts.master');

@section('content')
    <div class="mt-3 ml-5">
        <h1>{{ $query->judul }}</h1>
        <p>{{ $query->desc }}</p>
        <p>{{ $query->tahun }}</p>
        <label for="">Genre</label>
        <ul>
            @foreach ($genre as $value)

                <li>{{ $value->nama }}</li>

            @endforeach
        </ul>
    </div>
@endsection
