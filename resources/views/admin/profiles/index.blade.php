<h1>Expert Profiles</h1>
<a href="{{ route('experts.createProfile') }}">Create Profile</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Category</th>
            <th>Tarif</th>
            <th>Image</th>            
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->nom }}</td>
                <td>{{ $profile->tel }}</td>
                <td>{{ $profile->categorie }}</td>
                <td>{{ $profile->tarif }}</td>
                <td><img src="{{ asset('storage/' . $profile->photo) }}" alt="" style="width: 100px;"></td>
                
                <td>
                    <a href="{{ route('experts.editProfile', $profile->id) }}">Edit</a>
                    <form action="{{ route('experts.destroyProfile', $profile->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>