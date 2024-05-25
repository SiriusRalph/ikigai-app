<h1>Create User</h1>
<form action="{{ route('admin.storeUser') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
    <div>
        <label for="type">Role:</label>
        <select name="type" id="type" required>
            <option value="0">User</option>
            <option value="1">Expert</option>
            <option value="2">Admin</option>
        </select>
    </div>
    <button type="submit">Create</button>
</form>