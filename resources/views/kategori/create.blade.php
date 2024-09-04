@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Kategori</div>
                <div class="card-body">
                  <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <label for="nama_kategori">Nama Kategori:</label>
                    <input type="text" id="nama_kategori" name="nama_kategori">
                    <button type="submit">Simpan</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection