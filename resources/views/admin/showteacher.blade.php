<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view teacher</title>
</head>
<body>

    <h1>{{ $teachers->teacherName }}</h1>
    <h5>{{ $teachers->created_at  }}</h5>
    <h5>{{ $teachers->updated_at  }}</h5>
    <p>{{ $teachers->position  }}</p>
    <p>{{$teachers->capacity}}</p>
    <p>{{ $teachers->facebook  }}</p>
    <p>{{ $teachers->twiter  }}</p>
    <p>{{ $teachers->instagram  }}</p>




</body>
</html>