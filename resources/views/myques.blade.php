<!DOCTYPE html>
<html>
    <head>
        <title>My Questions</title>
        <style>
            body{
                margin: 40px;
            }
        </style>
    </head>
    <body>
        <h1>{{$user->name}}</h1>
        <main>
            <h3>Total Questions: <emp>{{count($questions)}}</emp></h3>
            <ol>
            @foreach($questions as $question)
                <li><a href="../question/{{$question->id}}">{{$question->question}}</a></li>
            @endforeach
            </ol>
        </main>
            
    </body>
</html>
