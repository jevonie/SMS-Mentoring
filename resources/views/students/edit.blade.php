@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Students Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route("student.update",$student->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Student ID</label>
                                <input
                                    type="text"
                                    name="student_id"
                                    id="student_id"
                                    value="{{$student->student_id}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('student_id')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">First Name</label>
                                <input
                                    type="text"
                                    name="first_name"
                                    id="first_name"
                                    value="{{$student->first_name}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('first_name')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Last Name</label>
                                <input
                                    type="text"
                                    name="last_name"
                                    id="last_name"
                                    value="{{$student->last_name}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('last_name')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Middle Name</label>
                                <input
                                    type="text"
                                    name="middle_name"
                                    id="middle_name"
                                    value="{{$student->middle_name}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <input
                                    type="text"
                                    name="course"
                                    id="course"
                                    value="{{$student->course}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('course')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Contact #</label>
                                <input
                                    type="number"
                                    name="contact_no"
                                    id="contact_no"
                                    value="{{$student->contact_no}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Birthday</label>
                                <input
                                    type="date"
                                    name="birthday"
                                    id="birthday"
                                    value="{{$student->birthday}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('birthday')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input
                                    type="text"
                                    name="address"
                                    id="address"
                                    value="{{$student->address}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                                @error('address')
                                    <small id="helpId" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{$student->email}}"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
