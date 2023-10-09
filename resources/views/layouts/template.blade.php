<?php
// include("Controller_playerteam.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{{ $pagetitle }}</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif1 }}" href="/">Player List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif2 }}" href="View_addplayer.php">New Player</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif3 }}" href="View_team.php">Team List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif4 }}" href="View_addteam.php">New Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif5 }}" href="View_playerteam.php">Player Team Relation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aktif6 }}" href="View_addplayerteam.php">New Player Team Relation</a>
                    </li>
                </ul>
            </div>
            @yield('layout_content')
        </div>
    </div>
</body>

</html>