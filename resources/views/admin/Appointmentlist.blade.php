<!DOCTYPE html>
<html lang="en">
<head>
  <title> Appointment list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')
<div class="container">
  <h2> Appointmentl list</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>guardianName</th>
        <th>guradianEmail</th>
        <th>childName</th>
        <th>childAge</th>

        <th>show</th>




      </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)

      <tr>
        <td>{{ $appointment->guardianName }}</td>
        <td>{{ $appointment->guradianEmail }}</td>
        <td>{{ $appointment->childName }} </td>
        <td>{{$appointment->childAge}}</td>
        <td><a href="Appointmentllist/{{ $appointment->id }}">show</a></td>

      </tr>

     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
