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
        <header>
            <form action="ask" method="POST">
                {!! csrf_field() !!}
                <textarea type="textarea" name="question" placeholder="Ask a Question" rows="5" cols="70" required/></textarea>
                <br />
                <button type="submit">Submit</button>
            </form>
        </header>
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
