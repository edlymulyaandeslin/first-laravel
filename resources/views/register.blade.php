@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center ">
                <h1 class="my-5">Registrasi Garuda Cyber</h1>
                <form method="GET" action="/welcome" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" placeholder="John" name="namaDepan" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" placeholder="Doe" name="namaBelakang" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" placeholder="contoh : pasir pengaraian" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kabupaten</label>
                        <select class="form-select">
                            <option selected disabled>Select</option>
                            <option>Kab. Rokan Hulu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select">
                            <option selected disabled>Select</option>
                            <option>Riau</option>
                            <option>Jakarta</option>
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
