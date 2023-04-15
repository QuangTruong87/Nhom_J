<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">PositronX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listuser') }}">List user</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
    <section class="container" >
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="align-middle">Avatar</th>
                <th class="align-middle">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td style="text-align:center" class="align-middle"><img style="width: 200px" src="{{ asset('images/' . $user->avatar) }}" alt="avatar"></td>
                <td class="align-middle">{{ $user->name }} <br> {{ $user->email }} <br> {{ $user->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@yield('content')
</body>
</html>
@if ($errors->has('login'))
    <div class="alert alert-danger">{{ $errors->first('login') }}</div>
@endif