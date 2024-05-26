<h1>Users</h1>
<a href="{{ route('admin.createUser') }}">Create User</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type }}</td>
                <td>
                    <form action="{{ route('admin.destroyUser', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>