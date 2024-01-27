<!DOCTYPE html>
<html lang="en">
<head>
  <title> contacts list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include ('admin.includes.navcontact')
<div class="container">
  <h2> contacts list</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
    <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>message</th>
        <th>Show</th>
        <th>Delete</th>
        <th>UnreadMessage</th>

      </tr>
    
    </thead>
    <tbody>
    @foreach($contents as $content)

      <tr>
        <td>{{ $content->name }}</td>
        <td>{{ $content->email }}</td>
        <td>{{ $content->subject }}</td>
        <td>{{ $content->message }}</td>
      
        <td><a href="showcontact/{{ $content->id }}">Show</a></td>
        <td><a href="deletecontact/{{ $content->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        <td>@if($content->read_at)read @else unread @endif</td>

      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>