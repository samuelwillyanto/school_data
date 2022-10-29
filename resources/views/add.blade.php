@extends('navbar')

@section('content')
<h2 class="jumbotron text-center">Add New Teacher's Data</h2>

<a href="/teacher" class="btn btn-secondary">Back</a>
<br><br>
@if ($errors->any())
    <strong>{{$errors->first()}}</strong>
@endif

<form action="/teacher/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Teacher Name</label>
        <input type="text" class="form-control" name="teacher_name">
    </div>

    <div class="form-group">
        <label for="">Gender</label>
        <input type="text" class="form-control" name="gender">
    </div>

    <div class="form-group">
        <label for="">Phone Number</label>
        <input type="text" class="form-control" name="phone_num">
    </div>

    <div class="form-group">
        <label for="">Age</label>
        <input type="text" class="form-control" name="age">
    </div>

    <div class="form-group">
        <label for="">Position</label>
        <input type="text" class="form-control" name="position">
    </div>

    <div class="form-group">
       <label for="">Address</label>
      <input type="text" class="form-control" name="address">
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>

</form>

@endsection
