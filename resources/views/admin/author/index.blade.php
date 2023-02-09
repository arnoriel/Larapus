@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Buku</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
{{-- <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css')}}"> --}}
<link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">

@endsection
@section('js')
{{-- <script src="{{ asset('DataTables/datatables.min.js')}}"> --}}
    
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">

</script>

    </script> 
    <script>$(document).ready( function () {
        $('#author').DataTable();
    } );</script>  
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Data Penulis
                        <a href="{{route('author.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a>
                    </div>
                    <div class="car-body">
                        <div class="table-responsive">
                            <table class="table" id="author">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Penulis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1 @endphp
                                @foreach ($author as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>
                                            <form action="{{route('author.destroy',$data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('author.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                                <a href="{{route('author.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection