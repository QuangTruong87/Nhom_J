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
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listofuser') }}">List Of User</a>
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
@yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of User</title>
</head>
<body>
<section class="container" >
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="align-middle">ID</th>
                <th class="align-middle">Name</th>
                <th class="align-middle">Avatar</th>
                <th class="align-middle">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="align-middle">{{ $user->id }}</td>
                <td class="align-middle">{{ $user->name }}</td>
                <td class="align-middle"><img style="width: 120px" src="{{asset('images/'.$user->avatar)}}" alt="avatar"></td>
                <td class="align-middle"><a href="{{route('detail')}}">View User</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $users->links('pagination::bootstrap-4') }}</div>
</section>
</body>
</html>