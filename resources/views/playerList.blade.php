@extends('layouts.app')

@section('content')
<div class="card-body">
    <h1>View Player</h1>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>s
                <th scope="col">Umur</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Team</th>
                @auth
                    @if(Auth::user()->isAdmin() || Auth::user()->isEditor())
                        <th scope="col">Aksi</th>
                    @endif
                @endauth
            </tr>
        </thead>
        <tbody>
            @if (!$players)
                <p>balap</p>
            @else
                @foreach ($players as $index => $player)
                    <tr>
                        <th scope="row">{{ $indek++}}</th>
                        <td>{{ $player->nama_player }}</td>
                        <td>{{ $player->umur }}</td>
                        <td>{{ $player->email }}</td>
                        <td>{{ $player->role }}</td>
                        <td>{{ $player->team->nama }}</td>
                        @auth
                            @if(Auth::user()->isAdmin() || Auth::user()->isEditor())
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
                            @endif
                        @endauth
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</div>
@endsection