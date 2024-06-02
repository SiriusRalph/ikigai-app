<h1>Create Expert Profile</h1>
<form action="{{ route('experts.storeProfile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="user_id">Select Expert User:</label>
        <select name="user_id" id="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="nom">Name:</label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <div>
        <label for="tel">Phone:</label>
        <input type="text" name="tel" id="tel" required>
    </div>
    <div>
        <label for="categorie">Category:</label>
        <input type="text" name="categorie" id="categorie" required>
    </div>
    <div>
        <label for="tarif">Tarif:</label>
        <input type="text" name="tarif" id="tarif" required>
    </div>
    <div>
        <label for="experience">Années d'expérience:</label>
        <input type="number" name="experience" id="experience" required>
    </div>
    <div>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" required>
    </div>
    <button type="submit">Create Profile</button>
</form>