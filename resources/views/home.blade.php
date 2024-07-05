@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="ongkir-header">
            <h1>LaraCeki</h1>
            <p class="lead">
                Laravel Cek Ongkir
            </p>
        </div>

        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-truck" style="font-size: 80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cek ongkir makin mudah</li>
                    </ul>
                    <button class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-box" style="font-size: 80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Lacak Paket</li>
                    </ul>
                    <button class="btn btn-lg btn-block btn-outline-primary">Get Started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-plane-departure" style="font-size: 80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cek ongkir Internasional</li>
                    </ul>
                    <button class="btn btn-lg btn-block btn-outline-primary">Contact Us</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Form Cek Ongkir</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-row">
                        <div class="col">
                            <h5 class="text-muted">Origin :</h5>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <select name="provinsi_pengirim" id="" class="form-control">
                                    <option value="#">Pilih Provinsi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="kokab_pengirim" id="" class="form-control">
                                    <option value="#">Pilih Kota/Kabupaten</option>
                                </select>
                            </div>
                            <h5 class="text-muted">Destination :</h5>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="kokab_pengirim" id="" class="form-control">
                                    <option value="#">Pilih Kota/Kabupaten</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="text-muted">Ekpedisi :</h5>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="inlineCheckbox1" value="">
                                <label for="inlineCheckbox1" class="form-check-label">JNE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="inlineCheckbox2" value="">
                                <label for="inlineCheckbox2" class="form-check-label">TIKI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
