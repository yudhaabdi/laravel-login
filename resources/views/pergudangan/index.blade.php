@extends('template/header_pergudangan')

@section('title', 'dashboard')

@section('container')
    
<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($jenisbarang as $jb)
            <tr>
                <td>{{ $jb->id_jenis_barang }}</td>
                <td>{{ $jb->jenis_barang }}</td>
                <td> 
                    <a href="#">Edit</a>
                    |
                    <a href="#">Hapus</a>
                </td>
            </tr>
                
            @endforeach
            
        </tbody>
      </table>

@endsection
