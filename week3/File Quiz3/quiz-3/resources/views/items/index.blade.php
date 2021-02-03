@extends('layouts.master')
@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Film</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary" href="/film/create">Create New Film</a>
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
                        @forelse ($films as $key => $film)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $film->judul }}</td>
                                <td>{{ $film->desc }}</td>
                                <td>{{ $film->tahun }}</td>
                                <td style="display: flex">
                                    <a href="/film/{{ $film->id }}" class="btn btn-info btn-sm mr-2">show</a>
                                    <a href="/film/{{ $film->id }}/edit" class="btn btn-default btn-sm mr-2">edit</a>
                                    <form action="/film/{{ $film->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No film</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Memasangkan script sweet alert",
            icon: "success",
            confirmButtonText: "Cool",
        });

    </script>
@endpush
