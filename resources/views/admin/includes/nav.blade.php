<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">testimonials</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/viewTestimonials">Home</a></li>
      <li><a href="{{ route('testimonials') }}">list</a></li>

      <li><a href="{{ route('addtest') }}">create</a></li>
      <li><a href="{{ route('trashed') }}">trashed</a></li>


      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>