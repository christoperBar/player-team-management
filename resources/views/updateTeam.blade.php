@extends('layouts.app')

@section('content')
<div class="card-body">
    <h1>Update Team</h1>
    <form method="POST" action="/team/{{$team->id }}" class="w-75 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input class="form-control" name="nama" value="{{ $team->nama }}">
            </div>
            <div class="form-group col-md-6">
                <label for="alamat">Alamat</label>
                <input class="form-control" name="alamat" value="{{ $team->alamat }}">
            </div>
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input class="form-control" name="kota" value="{{ $team->kota }}">
        </div>
        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="number" class="form-control" name="telp"
            value="{{ $team->telp }}">
        </div>
        <button name="button_registers" type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection