@extends('layouts.frontend')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Posts <a href="{{ url('post/create') }}" class="btn btn-primary float-end">Add post</a>
                    </div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
