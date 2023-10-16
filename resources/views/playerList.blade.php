@extends('layouts.template')

@section('layout_content')
<div class="card-body">
    <h1>View Player</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Team</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if (!$players)
                <p>balap</p>
            @else
                @foreach ($players as $index => $player)
                    <tr>
                        <th scope="row">{{ $index +1}}</th>
                        <td>{{ $player->nama_player }}</td>
                        <td>{{ $player->umur }}</td>
                        <td>{{ $player->email }}</td>
                        <td>{{ $player->role }}</td>
                        <td>{{ $player->team->nama }}</td>
                        <td>
                            <a href="/player/{{ $player->id }}">
                                <button class="btn btn-warning">Update</button>
                            </a>
                            <form action="/player/{{ $player->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection