<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <style>
            body{
                margin: 40px;
            }
            form{
                margin: 40px;
            }
            input, button{
                margin:5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Register</h1>
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
        
            <div>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
            </div>
        
            <div>
                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone">
            </div>
        
            <div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
            </div>
        
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
        
            <div>
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <div>
                {!! app('captcha')->display(); !!}
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </body>
</html>
