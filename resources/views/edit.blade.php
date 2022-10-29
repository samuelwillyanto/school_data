@extends('navbar')

@section('content')

@if ($errors->any())
            <strong>{{$errors->first()}}</strong>
@endif

<h2 class="jumbotron text-center">Edit Teacher's Data</h2>

<a href="/teacher" class="btn btn-secondary">Back</a>
<br><br>
@foreach ($teacher as $t)
    <form action="/teacher/update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Teacher ID</label>
            <input type="text" class="form-control" class="form-control" name="teacher_id" value="{{ $t->teacher_id }}">
        </div>

        <div class="form-group">
            <label for="">Teacher Name</label>
            <input type="text" class="form-control" name="teacher_name" value="{{ $t->teacher_name }}">
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <input type="text" class="form-control" name="gender" value="{{ $t->gender }}">
        </div>

        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="phone_num" value="{{ $t->phone_num }}">
        </div>

        <div class="form-group">
            <label for="">Age</label>
            <input type="text" class="form-control" name="age" value="{{ $t->age }}">
        </div>

        <div class="form-group">
            <label for="">Position</label>
            <input type="text" class="form-control" name="position" value="{{ $t->position }}">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $t->address }}">
        </div>

        <div class="form-group">
            <label for="">Teacher Name</label>
            <input type="text" class="form-control" name="teacher_name" value="{{ $t->teacher_name }}">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>

    </form>
@endforeach
@endsection
