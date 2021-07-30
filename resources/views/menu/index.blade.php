@extends('layout/template') 

@section('judul', 'Menu')


@section('container')

<div class="container maincontent">
       <div class="row">
        <div class="col bg2 left">
        <li><a href="#" class="adding" role="button">Foods</a></li><br>
        <li><a href="#" class="adding" role="button">Drinks</a></li><br>
        </div>
    <div class="col-9 bg3">
        <h1 class="MT-3 txt">Meals</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image Preview</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($foods as $fds)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Foods/'.$fds->gambar)}}" alt="" width="70"></td>
                    <td>{{$fds->nama}}</td>
                    <td>{{$fds->harga}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br><br><br>
        <div class="col-12 bg6">
        <h1 class="MT-3 txt">Beverages</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image Preview</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($drinks as $dks)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Drinks/'.$dks->gambar)}}" alt="" width="70"></td>
                    <td>{{$dks->nama}}</td>
                    <td>{{$dks->harga}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection