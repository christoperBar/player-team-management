@extends('layouts.template')

@section('layout_content')
<div class="card-body">
    <h1>New Team</h1>
    <form method="POST" action="/team" class="w-75 mx-auto">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="alamat">Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input class="form-control" name="kota" placeholder="Kota">
        </div>
        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="number" class="form-control" name="telp"
                placeholder="08...">
        </div>
        <button name="button_registers" type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection