<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('style1.css') }}">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="{{ url('login') }}" method="post" class="login" accept-charset="utf-8">
                @csrf
                <input type="text" name="email" placeholder="username" value="">
                <input type="password" name="password" id="password" placeholder="password" value="">
                <button type="submit" name="btn_simpan" value="Login">Login</button>
            </form>
        </div>
    </div>    
</body>
</html>
