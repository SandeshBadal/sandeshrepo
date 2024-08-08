<caption>Data</caption>
<link rel="stylesheet" href="{{ asset('lisst/tab.css') }}">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($tables as $value)
            <tr>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['address'] }}</td>
                <td>{{ $value['email'] }}</td>
                <td>{{ $value['phone'] }}</td>
                <td>{{ $value['gender'] }}</td>
                <td>
                    <button> <a href="{{ route('table.edit', $value->id) }}">Edit</a></button>
                    <button><a href="{{ route('table.show', $value->id) }}">show</a></button>
                    <form action="{{ route('table.destroy', $value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>
