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
                <tr>
                    @if (!$teams)
                        <p>balap</p>
                    @else
                        @foreach ($teams as $team)
                            <th scope="row">{{ $team->id }}</th>
                            <td>{{ $team->nama }}</td>
                            <td>{{ $team->alamat }}</td>
                            <td>{{ $team->kota }}</td>
                            <td>{{ $team->telp }}</td>
                        @endforeach
                    @endif

                    <td>
                        <a href="View_updateteam.php?updateID=1">
                            <button class="btn btn-warning">Update</button>
                        </a>
                        <a href="Controller_team.php?deleteID=1">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>


            </tbody>
        </table>

    </div>

@endsection
