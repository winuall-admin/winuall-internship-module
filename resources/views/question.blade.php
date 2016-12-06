<!DOCTYPE html>
<html>
    <head>
        <title>Question</title>
        <style>
            body{
                margin: 40px;
            }
        </style>
    </head>
    <body>
        <h1>{{ $Question->question }}</h1>
        @foreach($Answers as $answer)
            <p>{{ $answer->answer }}
            <span><a href="../answer/{{$answer->id}}">Read More</a></span></p>
        @endforeach
    </body>
</html>
