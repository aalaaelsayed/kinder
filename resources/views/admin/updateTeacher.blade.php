
<!DOCTYPE html>
<html lang="en">
<head>
  <title>teacher update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navteacher')
<div class="container">
  <h2>Add new teacher data</h2>
  <form action="{{ route('updateachers',$teachers->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">teacherName:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="teacherName" value="{{ $teachers->teacherName}}">
    </div>
    <div class="form-group">
      <label for="title">position:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="position" value="{{ $teachers->position}}">
    </div>
    <div class="form-group">
      <label for="title">facebook:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="facebook" value="{{ $teachers->facebook}}">
    </div>
    <div class="form-group">
      <label for="title">twiter:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="twiter" value="{{ $teachers->twiter}}">
    </div>
    <div class="form-group">
      <label for="title">instagram:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="instagram" value="{{ $teachers->instagram}}">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="image" >
      <img src=" {{ asset ('/Assets/images/'. $teachers->image ) }} "  >
      @error('image')
        {{ $message }}
      @enderror
    </div>
   
    <div class="checkbox">
      <label><input type="checkbox" name="active" @checked($teachers->active)> active me</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>