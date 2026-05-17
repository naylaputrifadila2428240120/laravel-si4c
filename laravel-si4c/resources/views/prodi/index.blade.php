@extends('main')

@section('title', 'Program Studi')
@section('content')

<h2>Data Program Studi</h2>
<a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah Prodi</a>
<table class="table table-bordered mt-3">
                <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Singkatan</th>
                        <th>Kaprodi</th>
                        <th>Fakultas</th>
                </tr>
                @foreach ($prodis as $item)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_prodi }}</td>
                        <td>{{ $item->singkatan }}</td>
                        <td>{{ $item->kaprodi }}</td>
                        <td>{{ $item->fakultas->nama }}</td>
                </tr>
                @endforeach 
        </table>
@endsection