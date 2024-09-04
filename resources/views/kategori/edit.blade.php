@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Kategori</div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="nama_kategori">Nama Kategori:</label>
                        <input type="text" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
                        <button type="submit">Simpan</button>
                        <a href="{{url('kategori')}}" class="btn btn-success">Back</a>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection