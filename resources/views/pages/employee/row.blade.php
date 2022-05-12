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
            <form action="{{ route('delete-employee', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
