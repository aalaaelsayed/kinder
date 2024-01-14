
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Testimoninals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')
<div class="container">
  <h2>Add new Testimoninals data</h2>
  <form action="{{ route('updateTestimoninals',$testimonials->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">clientName:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="clientName" value="{{ $testimonials->clientName}}">
    </div>
    <div class="form-group">
      <label for="title">profession:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="profession" value="{{ $testimonials->profession}}">
    </div>
    <div class="form-group">
      <label for="description">content:</label>
      <textarea class="form-control" name="content" id="" cols="60" rows="3">{{ $testimonials->content}}</textarea>
    </div>
  
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image" >
      <img src=" {{ asset ('/Assets/images/'. $testimonials->image ) }} "  >
      @error('image')
        {{ $message }}
      @enderror
    </div>
   
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($testimonials->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>