@extends('layouts.master');

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Film</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/film" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}"
                            placeholder="Enter Title" required>
                        @error('judul')
                            <div class="alert alert-danger">{{ 'Golek judul liane, wes onok sing nggae' }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <input type="text" class="form-control" id="desc" name="desc" value="{{ old('desc', '') }}"
                            placeholder="desc" required>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', '') }}"
                            placeholder="tahun" required>
                        @error('tahun')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre', '') }}"
                            placeholder="genre" required>
                        @error('genre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="pemain">Pemain</label>
                        <input type="text" class="form-control" id="pemain" name="pemain" value="{{ old('pemain', '') }}"
                            placeholder="pemain" required>
                        @error('pemain')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
