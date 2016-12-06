<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            body{
                margin: 40px;
            }
            form{
                margin: 40px;
            }
            input, button{
                margin: 5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
        
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email/Phone">
        
                <input type="password" name="password" id="password" placeholder="Password">
            <br>
                <input type="checkbox" name="remember"> Remember Me
        
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>
