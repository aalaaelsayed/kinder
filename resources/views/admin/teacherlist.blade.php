<!DOCTYPE html>
<html lang="en">
<head>
  <title> teacher list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navteacher')
<div class="container">
  <h2> teacher list</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>teacherName</th>
        <th>position</th>
        <th>facebook</th>

        <th>edit</th>
        <th>show</th>
        <th>delete</th>




      </tr>
    </thead>
    <tbody>

    @foreach($teachers as $teacher)


      <tr>
        <td>{{ $teacher->teacherName }}</td>
        <td>{{ $teacher->position }}</td>
        <td>{{ $teacher->facebook }} </td>

        <td><a href="editteachers/{{ $teacher->id }}">Edit</a></td>
        <td><a href="showteacher/{{ $teacher->id }}">show</a></td>
        <td><a href="deleteteacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>

     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
