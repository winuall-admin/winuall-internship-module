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
        @if($user != 0)
            <form action="/ans" method="POST">
                {!! csrf_field() !!}
                <textarea type="textarea" name="answer" placeholder="Add an answer" rows="5" cols="70" required/></textarea>
                <br />
                <input type="hidden" name="qid" value="{{$Question->id}}" />
                <button type="submit">Submit</button>
            </form>
        @endif
    </body>
</html>
