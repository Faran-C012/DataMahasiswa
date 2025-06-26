@extends('layouts.app')

@section('content')
<h2>Daftar Mahasiswa</h2>
<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
                <a href="{{ url('/mahasiswa/export-excel') }}" class="btn btn-success mb-2">Export Excel</a>
                <a href="{{ url('/mahasiswa/export-pdf') }}" class="btn btn-danger mb-2">Export PDF</a>
                <a href="{{ url('/mahasiswa/cetak/'.$mhs->id) }}" target="_blank" class="btn btn-sm btn-info">Cetak</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $mahasiswa->links() }}
@endsection