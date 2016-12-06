<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style>
            a{
                text-decoration: none;
                color: black;
            }
            a:link {
                text-decoration: none;
                color: black;
            }
            
            a:visited {
                text-decoration: none;
                color: black;
            }
            
            a:hover {
                text-decoration: underline;
                color: black;
            }
            body{
                margin:40px;
            }
            main{
                margin: 40px;
            }
        </style>
    </head>
    <body>
            <h1>Home</h1>
            <a href="login" style="margin-left:60px"><em>Login</em></a>
            <a href="register" style="margin-left:10px"><em>Register</em></a>
            <a href="profile" style="margin-left:10px"><em>Profile</em></a>
            <a href="myques" style="margin-left:10px"><em>My Questions</em></a>
            <a href="myans" style="margin-left:10px"><em>My Answers</em></a>
        <main>
            @foreach($questions as $question)
                <h3><a href="question/{{ $question->id }}" >{{ $question->question }}</a></h3>
            @endforeach
        </main>
    </body>
</html>
