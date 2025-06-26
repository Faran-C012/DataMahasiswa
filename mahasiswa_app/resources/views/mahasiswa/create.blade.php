@extends('layouts.app')

@section('content')
<h2>Tambah Mahasiswa</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $err)
            <li style="color: red">{{ $err }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('mahasiswa.store') }}">
    @csrf
    <p>Nama: <input type="text" name="nama" value="{{ old('nama') }}"></p>
    <p>NIM: <input type="text" name="nim" value="{{ old('nim') }}"></p>
    <p>Jurusan: <input type="text" name="jurusan" value="{{ old('jurusan') }}"></p>
    <button type="submit">Simpan</button>
</form>
@endsection