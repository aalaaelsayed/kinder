
<!DOCTYPE html>
<html lang="en">
<head>
  <title>update classes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.navclasses')
<div class="container">
  <h2>Add new classes data</h2>
  <form action="{{ route('updateClasses',$classes->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">className:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="className" value="{{ $classes->className}}">
    </div>
    <div class="form-group">
      <label for="title">capacity:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="capacity" value="{{ $classes->capacity}}">
    </div>
    <div class="form-group">
      <label for="title">time:</label>
      <input type="time" class="form-control" id="title" placeholder="Enter title" name="time" value="{{ $classes->time}}">
    </div>
    <div class="form-group">
      <label for="title">age:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="age" value="{{ $classes->age}}">
    </div>
    <div class="form-group">
      <label for="title">price:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="price" value="{{ $classes->price}}">
    </div>

  
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image"  name="class_image" >
      <img src=" {{ asset ('/Assets/images/'. $classes->class_image ) }} "  >
      @error('class_image')
        {{ $message }}
      @enderror

    </div>
    <div class="form-group">
      <label for="category">teacherId:</label>
      <select name="teacherId" id="">
      @foreach($teachers as $teacher) 
            <option value="{{ $teacher->id }}" {{ $teacher->id == $teacher->teacherId ? 'selected' : '' }}>
              {{ $teacher->teacherName  }}
            </option>        
           @endforeach 
      </select>
      @error('teacherId')
        {{ $message }}
      @enderror
    </div>
   
    <div class="checkbox">
      <label><input type="checkbox" name="active" @checked($classes->active)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>