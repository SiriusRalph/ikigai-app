<h1>Edit Expert Profile</h1>
<form action="{{ route('experts.updateProfile', $profile->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nom">Name:</label>
        <input type="text" name="nom" id="nom" value="{{ $profile->nom }}" required>
    </div>
    <div>
        <label for="tel">Phone:</label>
        <input type="text" name="tel" id="tel" value="{{ $profile->tel }}" required>
    </div>
    <div>
        <label for="categorie">Category:</label>
        <input type="text" name="categorie" id="categorie" value="{{ $profile->categorie }}" required>
    </div>
    <div>
        <label for="tarif">Tarif:</label>
        <input type="text" name="tarif" id="tarif" value="{{ $profile->tarif }}" required>
    </div>
    <div>
        <label for="experience">Années d'expérience:</label>
        <input type="number" name="experience" id="experience" value="{{ $profile->experience }}" required>
    </div>
    <div>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo">
    </div>
    <button type="submit">Update Profile</button>
</form>