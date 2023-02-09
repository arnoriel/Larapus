@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Penulis</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection
@section('js')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Data Buku
                        <a href="{{route('book.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a>
                    </div>
                    <div class="car-body">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Buku</th>
                                    <th>Author</th>
                                    <th>Jumlah</th>
                                    <th>Cover Buku</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1 @endphp
                                @foreach ($book as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->author->name}}</td>
                                        <td>{{$data->amount}}</td>
                                        <td><img src="{{$data->cover()}}" alt="" width="50px" height="50px"></td>
                                        <td>
                                            <form action="{{route('book.destroy',$data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('book.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                                <a href="{{route('book.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection