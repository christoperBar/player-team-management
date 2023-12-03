@extends('layouts.app')

@section('content')
    <div class="card-body">
        <h1>View Team</h1>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Telp</th>
                    @auth
                        @if(Auth::user()->isAdmin() || Auth::user()->isEditor())
                            <th scope="col">Aksi</th>
                        @endif
                    @endauth
                </tr>
            </thead>
            <tbody>
                @if (!$teams)
                    <p>balap</p>
                @else
                    @foreach ($teams as $index => $team)
                        <tr>
                            <th scope="row">{{ $team->id}}</th>
                            <td>{{ $team->nama }}</td>
                            <td>{{ $team->alamat }}</td>
                            <td>{{ $team->kota }}</td>
                            <td>{{ $team->telp }}</td>
                            @auth
                                @if(Auth::user()->isAdmin() || Auth::user()->isEditor())
                                    <td>
                                        <a href="/team/{{ $team->id }}">
                                            <button class="btn btn-warning">Update</button>
                                        </a>
                                        <form action="/team/{{ $team->id }}" method="POST">
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
        <br>
        <div>
            {{ $teams->links() }}
        </div>
    </div>
@endsection
