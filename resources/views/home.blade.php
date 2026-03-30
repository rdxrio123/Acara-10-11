@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini adalah merupakan halaman Home</p>
        </div>
        <p> Nama: : {{ $nama }}</p>
        <p> Pelajaran: </p>
        <ul>
            @foreach ($pelajaran as $item)
                <li>{{ $item }}</li>
            @endforeach 
        </ul>

    </div>
