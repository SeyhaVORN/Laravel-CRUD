@extends('layouts.frontend')

@section('content')
    <div class="container mt-4">
        <div class="card-header">
            <h4>My Employee
                <a href="{{ route('add-employee') }}" class="btn btn-primary float-end">Add Employee</a>
            </h4>
        </div>
        <div class="card-header">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Designation</th>
                        <th>status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="search-list">
                    @foreach ($employee as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('edit-employee', $item->id) }}"><button
                                        class="btn btn-sm btn-primary ml-2">Edit</button></a>
                            </td>
                            <td>
                                {{-- <a href="{{ route('delete-employee', $item->id) }}"><button
                                        class="btn btn-danger">Delete</button></a> --}}
                                <form action="{{ route('delete-employee', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('input#search').on('keyup', function() {
                var query = $(this).val();
                console.log(query);
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': query
                    },
                    success: function(res) {
                        console.log(res);
                        $('tbody#search-list').html(res.html);
                    }
                });
            });
        });
    </script>
@endpush
