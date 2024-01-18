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
@include('admin.includes.navclasses')
<div class="container">
  <h2>Add new class data</h2>
  <form action="{{ route('storeClasses') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">className:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="className" value="{{old ('className')}}">
      @error('className')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">time:</label>
      <input type="time" class="form-control" id="title" placeholder="Enter title" name="time" value="{{old ('time')}}">
      @error('time')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">capacity:</label>
      <textarea class="form-control" name="capacity" id="" cols="60" rows="3">{{old ('capacity')}}</textarea>
      @error('capacity')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">age:</label>
      <textarea class="form-control" name="age" id="" cols="60" rows="3">{{old ('age')}}</textarea>
      @error('age')
          {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">price:</label>
      <textarea class="form-control" name="price" id="" cols="60" rows="3">{{old ('price')}}</textarea>
      @error('price')
          {{ $message}}
      @enderror
    </div>
 
    <div class="form-group">
      <label for="category">teacher:</label>
      <select name="teacherId" id="">
        <option value="">Select teacher</option>
        @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}">{{ $teacher->teacherName }}</option>
        @endforeach
      </select>
      @error('teacherId')
        {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="image">class_image:</label>
      <input type="file" class="form-control" id="image"  name="class_image">
      @error('class_image')
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