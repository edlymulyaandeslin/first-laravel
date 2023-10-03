@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center vh-100">
                <h2>Congratulationss!!</h2>
                <h1>Selamat Datang {{ $namaDpn }} {{ $namaBel }}</h1>
                <h2>Di Garuda Cyber Indonesia</h2>
                <a href="/" class="btn btn-outline-danger mt-4">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
