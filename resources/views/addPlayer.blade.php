@extends('layouts.template')

@section('layout_content')
<div class="card-body">
    <h1>New Player</h1>
    <form method="POST" action="/player" class="w-75 mx-auto">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama_player">Nama</label>
                <input class="form-control" name="nama_player" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur"
                    placeholder="Umur">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="role">Role</label>
                <input class="form-control" name="role" placeholder="Duelist/Initiator...">
            </div>
            <div class="form-group col-md-6">
                <label for="inputTeam">Team</label>
                <br>
                <select name="team_id" aria-label="Default select example">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button name="button_registers" type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection