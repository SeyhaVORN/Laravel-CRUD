@extends('layouts.frontend')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header">
                    <h4>Edit Employee
                        <a href="{{ route('employee') }}" class="btn btn-danger float-end">List Employees</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-employee', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $employee->name }}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Email</label>
                            <input type="email" name="email" value="{{ $employee->email }}" class="form-control"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Phone</label>
                            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="designation">Designation</label>
                            <input type="text" name="designation" value="{{ $employee->designation }}"
                                class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="designation">Status</label>
                            <input type="checkbox" name="status" {{ $employee->status == 1 ? 'checked' : '' }}> Unactive-1
                            / Active-0
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary float-start">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
