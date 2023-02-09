@extends('layouts.admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Penulis</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" name="name" value="{{$book->title}}" class="form-control" readonly>
                            <label for="">Nama Pembuat</label>
                            <input type="text" name="name" value="{{$book->author->name}}" class="form-control" readonly>
                            <label for="">Cover</label>
                            <br>
                            <img src="{{$book->cover()}}" width="100px" height="100px">
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{url('/administrator/book')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection