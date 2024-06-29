@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <h1>Add Student</h1>
            </div>
            <div class="col-12 col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success  alert-dismissible">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger  alert-dismissible">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-8 border m-3 p-3">
                <form method="POST" action="{{ route('student.save') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value=""/>
                        </div>
                        <div class="col-md-6">
                            <label>Student School</label>
                            <input type="text" class="form-control" name="school" value=""/>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student Address</label>
                            <input type="text" class="form-control" name="address" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student NIC</label>
                            <input type="text" class="form-control" name="nic" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Student Phone</label>
                            <input type="tel" class="form-control" name="phone" value=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Student Status</label>
                            <select class="form-control" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Add Student"/>
                            <a href="{{ route('student') }}" class="btn bt-lg btn-warning">Back to Students</a>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection


@push('css')
    <style>

    </style>
@endpush
