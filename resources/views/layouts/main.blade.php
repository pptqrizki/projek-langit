<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
<table>
    <tr>
        <td>
            <a href="{{ route('home') }}">Home</a>
         </td>
    </tr>
    <tr>
        <td>
            <a href="{{ route('about') }}">About</a>
         </td>
    </tr>
    <tr>
        <td>
            <a href="{{ route('profil') }}">Profil</a>
         </td>
    </tr>
    <tr>
        <td>
            <a href="{{ route('siswa') }}">Daftar siswa</a>
         </td>
    </tr>
</table>

    @yield('content')
</body>
</html>