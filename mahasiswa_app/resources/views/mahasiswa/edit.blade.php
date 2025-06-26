@extends('layouts.app')

@section('content')
<h2>Edit Mahasiswa</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $err)
            <li style="color: red">{{ $err }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
    @csrf @method('PUT')
    <p>Nama: <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"></p>
    <p>NIM: <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"></p>
    <p>Jurusan: <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"></p>
    <button type="submit">Perbarui</button>
</form>
@endsection