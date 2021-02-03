@extends('layouts.master');

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Question Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary" href="{{ route('questions.create') }}">Create New Question</a>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th style="width: 10px">No.</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($questions as $key => $question)
                            {{-- @foreach ($questions as $key => $question) --}}
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $question->judul }}</td>
                                    <td>{{ $question->isi }}</td>
                                    <td style="display: flex">
                                        <a href="{{ route('questions.show', ['question' => $question->id]) }}"
                                            class="btn btn-info btn-sm mr-2">show</a>

                                        <a href="/questions/{{ $question->id }}/edit"
                                            class="btn btn-default btn-sm mr-2">edit</a>
                                        <form action="/questions/{{ $question->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                {{--
                            @endforeach --}}
                        @empty
                            <tr>
                                <td colspan="4" align="center">No Question</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
@endsection
