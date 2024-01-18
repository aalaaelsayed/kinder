<!DOCTYPE html>
<html lang="en">
<head>
  <title> Classes list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navclasses')
<div class="container">
  <h2> Classes list</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>className</th>
        <th>time</th>
        <th>capacity</th>
        <th>active</th>

        <th>edit</th>
        <th>show</th>
        <th>delete</th>




      </tr>
    </thead>
    <tbody>

    @foreach($classes as $class)


      <tr>
        <td>{{ $class->className }}</td>
        <td>{{ $class->time }}</td>
        <td>{{ $class->capacity }} </td>
        <td>@if($class->active)yes @else no @endif</td>
        <td><a href="editClasses/{{ $class->id }}">Edit</a></td>
        <td><a href="showClasses/{{ $class->id }}">show</a></td>
        <td><a href="deleteClasses/{{ $class->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>

     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
