<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <input type="text" name="ic_number" placeholder="IC Number" value="{{ old('ic_number') }}">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btn-login">Login</button>
        </form>
        <a href="/account_recovery">Forgot password ?</a>
    </div>
</body>
</html>
