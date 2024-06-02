<h1>Create Question</h1>
<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <div>
        <label for="question">Question:</label>
        <input type="text" name="question" id="question" required>
    </div>
    <div>
        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="text">Text</option>
            <option value="select">Select</option>
            <option value="radio">Radio</option>
        </select>
    </div>
    <div id="options-container" style="display: none;">
        <label for="options">Options (comma separated):</label>
        <input type="text" name="options" id="options">
    </div>
    <button type="submit">Create Question</button>
</form>

<script>
    document.getElementById('type').addEventListener('change', function () {
        var optionsContainer = document.getElementById('options-container');
        if (this.value === 'select' || this.value === 'radio') {
            optionsContainer.style.display = 'block';
        } else {
            optionsContainer.style.display = 'none';
        }
    });
</script>