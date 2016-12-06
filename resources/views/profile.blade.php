<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <style>
            body{
                margin: 40px;
            }
        </style>
    </head>
    <body>
        <h1>Profile</h1>
        <div>
            Name: {{$user->name}}
        </div>
        <div>
            Email: {{$user->email}}
        </div>
        <div>
            Phone: {{$user->phone}}
        </div>
        <div>
            Total Questions: {{count($questions)}}
        </div>
        <div>
            Total Answers: {{count($answers)}}
        </div>
    </body>
</html>
