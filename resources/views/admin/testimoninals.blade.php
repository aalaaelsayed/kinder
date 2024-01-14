<!DOCTYPE html>
<html lang="en">
<head>
  <title> showTestimoninals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')
<div class="container">
  <h2> testimonials list</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>clientName</th>
        <th>profession</th>
        <th>content</th>
        <th>published</th>

        <th>edit</th>
        <th>show</th>
        <th>delete</th>




      </tr>
    </thead>
    <tbody>
    @foreach($testimonials as $testimonial)

      <tr>
        <td>{{ $testimonial->clientName }}</td>
        <td>{{ $testimonial->profession }}</td>
        <td>{{ $testimonial->content }} </td>
        <td>@if($testimonial->published)yes @else no @endif</td>
        <td><a href="editTestimoninals/{{ $testimonial->id }}">Edit</a></td>
        <td><a href="viewTestimoninals/{{ $testimonial->id }}">show</a></td>
        <td><a href="deleteTestimoninals/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>

     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
