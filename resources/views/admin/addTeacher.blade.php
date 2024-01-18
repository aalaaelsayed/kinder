<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add classes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')
<div class="container">
  <h2>Add new teacher data</h2>
  <form action="{{ route('storeTeacher') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">teacherName:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="teacherName" value="{{old ('teacherName')}}">
      @error('teacherName')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">position:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="position" value="{{old ('position')}}">
      @error('position')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">capacity:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="capacity" value="{{old ('capacity')}}">
      @error('capacity')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">facebook:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="facebook" value="{{old ('facebook')}}">
      @error('facebook')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">twiter:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="twiter" value="{{old ('twiter')}}">
      @error('twiter')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">instagram:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="instagram" value="{{old ('instagram')}}">
      @error('instagram')
          {{ $message}}
      @enderror
    </div>

    <div class="form-group">
      <label for="image">image:</label>
      <input type="file" class="form-control" id="image"  name="image">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="active"> active me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>