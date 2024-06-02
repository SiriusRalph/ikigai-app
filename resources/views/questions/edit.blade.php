<h1>Edit Question</h1>
<form action="{{ route('questions.update', $question->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="question">Question:</label>
        <input type="text" name="question" id="question" value="{{ $question->question }}" required>
    </div>
    <div>
        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="text" {{ $question->type == 'text' ? 'selected' : '' }}>Text</option>
            <option value="select" {{ $question->type == 'select' ? 'selected' : '' }}>Select</option>
            <option value="radio" {{ $question->type == 'radio' ? 'selected' : '' }}>Radio</option>
        </select>
    </div>
    <div id="options-container" style="{{ $question->type == 'select' || $question->type == 'radio' ? 'block' : 'none' }}">
        <label for="options">Options (comma separated):</label>
        <input type="text" name="options" id="options" value="{{ implode(',', $question->options ?? []) }}">
    </div>
    <button type="submit">Update Question</button>
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