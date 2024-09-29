<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="box">
        <span class="borderLine">

        </span>
        <form method="post" action="/register">
            @csrf
            <h2>Register</h2>
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#"></a>
                <a href="/login">Sign In</a>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>