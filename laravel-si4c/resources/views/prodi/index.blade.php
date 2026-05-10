@extends('main')
@section('content')

<h2>Data prodi</h2>
<table>
                <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Singkatan</th>
                        <th>Dekan</th>
                </tr>
                @foreach ($fakultas      as $item)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->singkatan }}</td>
                        <td>{{ $item->dekan }}</td>
                </tr>
                @endforeach 
        </table>
@endsection