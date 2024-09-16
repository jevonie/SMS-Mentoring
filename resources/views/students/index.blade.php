@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                    <div class="col-md-6 fs-3">{{ __('Students') }}</div>
                    <div class="d-flex justify-content-end col-md-6">
                        <form action="{{route("student.index")}}" method="get">
                            <input type="search" class="form-control" placeholder="Search here.." name="search" id="search">
                        </form>
                        <a href="{{route("student.create")}}" class="btn btn-primary  mx-3">Add Student</a>
                    </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <table class="table table-primary" >
                                <thead>
                                    <tr>
                                        <th scope="col">ID Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Contact #</th>
                                        <th scope="col">Birthday</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <td scope="col">Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($students as $item)
                                       <tr>
                                        <td>{{$item->student_id}}</td>
                                        <td>{{$item->last_name}}, {{$item->first_name}} {{$item->middle_name}}</td>
                                        <td>{{$item->course}}</td>
                                        <td>{{$item->contact_no}}</td>
                                        <td>{{$item->birthday}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <a href="{{route("student.edit", $item->id)}}" class="btn btn-primary">Edit</a>
                                            <form action="{{route("student.destroy", $item->id)}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this student?')">Delete</button>
                                            </form>
                                        </td>
                                       </tr>
                                   @empty
                                       
                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
