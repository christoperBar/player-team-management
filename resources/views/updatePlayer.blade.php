@extends('layouts.template')

@section('layout_content')
<div class="card-body">
    <h1>Update Player</h1>
    <form method="POST" action="/player/{{$player->id }}" class="w-75 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama_player">Nama</label>
                <input class="form-control" name="nama_player" value="{{$player->nama_player }}">
            </div>
            <div class="form-group col-md-6">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur"
                value="{{$player->umur }}">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" value="{{$player->email }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="role">Role</label>
                <input class="form-control" name="role" value="{{$player->role }}">
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
        <button name="button_registers" type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection