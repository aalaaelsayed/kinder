<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Appointments</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/viewappointments">Home</a></li>
      <li><a href="{{ route('appointments') }}">list</a></li>
      <li><a href="{{ route('trashedAppointments') }}">trashed</a></li>


      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>