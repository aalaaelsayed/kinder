<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view appointments</title>
</head>
<body>

    <h1>{{ $appointments->guardianName }}</h1>
    <h5>{{ $appointments->created_at  }}</h5>
    <h5>{{ $appointments->updated_at  }}</h5>
    <p>{{ $appointments->guradianEmail  }}</p>
    <p>{{$appointments->childName}}</p>
    <p>{{ $appointments->childAge  }}</p>
    <p>{{ $appointments->message  }}</p>



</body>
</html>