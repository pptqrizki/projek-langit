@extends('layouts.main')
@section('title', 'Data Siswa')

@section('content')
<br>
<br>

<a href="{{ route('add-siswa') }}">Tambah Data</a>

<br>
<br>
    
<table border="1" width="100%">
         <tr>
                <th>no</th>
                <th>nama</th>
                <th>kelas</th>
                <th>jurusan</th>
                <th>email</th>
                <th>jenis_kelamin</th>
                <th>alamat</th>


          @forelse ($Student as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->jurusan }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>

                @empty

                <tr>
                    <td colspan="7" align="center" style="color: red;">Data SISWA BELUM TERSEDIA</td>
                </tr>
            @endforelse
        </table>
@endsection
  