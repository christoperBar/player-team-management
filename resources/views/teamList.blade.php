@extends('layouts.template')

@section('layout_content')
    <div class="card-body">
        <h1>View Team</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (!$teams)
                    <p>balap</p>
                @else
                    @foreach ($teams as $index => $team)
                        <tr>
                            <th scope="row">{{ $index +1}}</th>
                            <td>{{ $team->nama }}</td>
                            <td>{{ $team->alamat }}</td>
                            <td>{{ $team->kota }}</td>
                            <td>{{ $team->telp }}</td>
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
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
