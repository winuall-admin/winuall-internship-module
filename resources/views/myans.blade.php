<!DOCTYPE html>
<html>
    <head>
        <title>My Answers</title>
        <style>
            body{
                margin: 40px;
            }
        </style>
    </head>
    <body>
        <h1>{{$user->name}}</h1>
        <main>
            <h3>Total Answers: <emp>{{count($answers)}}</emp></h3>
            <ol>
            @foreach($answers as $answer)
                <li>{{$answer->answer}} <span><a href="../answer/{{$answer->id}}">Read here</a></span></li>
            @endforeach
            </ol>
        </main>
            
    </body>
</html>
