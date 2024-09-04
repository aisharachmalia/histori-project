<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tokoh</title>
    <!-- Include CSS and JS here -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Tokoh</div>
                    <div class="card-body">
                        <form action="{{ route('tokoh.update', $tokoh->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control mb-3" name="nama" value="{{ $tokoh->nama }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control mb-3" name="tgl_lahir" value="{{ $tokoh->tgl_lahir }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-control" name="kategori_id" required>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ $kategori->id == $tokoh->kategori_id ? 'selected' : '' }}>
                                            {{ $kategori->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <div>
                                    <img src="{{ asset('images/tokoh/' . $tokoh->foto) }}" width="100" alt="Current photo">
                                </div>
                                <input type="file" class="form-control mt-2" name="foto">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <!-- Include JS here -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
</body>
</html>
