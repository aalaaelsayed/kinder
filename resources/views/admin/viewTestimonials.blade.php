<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Testimoninals</title>
</head>
<body>
    <h1>{{ $testimonials->clientName }}</h1>
    <h5>{{ $testimonials->created_at  }}</h5>
    <h5>{{ $testimonials->updated_at  }}</h5>
    <p>{{ $testimonials->profession  }}</p>
    <p>  {{($testimonials->published)?"checked":""}}</p>
    <p>{{ $testimonials->content  }}</p>





</body>
</html>