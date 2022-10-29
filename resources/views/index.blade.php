@extends('navbar')

@section('content')

@if ($errors->any())
    <strong>{{$errors->first()}}</strong>
@endif
<center>
<div class="jumbotron text-center">
    <h1>Teacher Data</h1>
</div>

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Age</th>
            <th scope="col">Position</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    @foreach ($teacher as $t)
    <tbody>
        <tr>
            <th scope="row">{{ $t->teacher_id }}</td>
            <td>{{ $t->teacher_name }}</td>
            <td>{{ $t->gender }}</td>
            <td>{{ $t->phone_num }}</td>
            <td>{{ $t->age }}</td>
            <td>{{ $t->position }}</td>
            <td>{{ $t->address }}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="/teacher/edit/{{ $t->teacher_id }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/teacher/delete/{{ $t->teacher_id }}">Delete</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<br><br>
<a class="btn btn-primary btn-lg" href="/teacher/add">Add New Teacher</a>
</center>
@endsection
