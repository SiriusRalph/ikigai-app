<h1>Questions</h1>
<a href="{{ route('questions.create') }}">Add Question</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Question</th>
            <th>Type</th>
            <th>Options</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $question)
        <tr>
            <td>{{ $question->id }}</td>
            <td>{{ $question->question }}</td>
            <td>{{ $question->type }}</td>
            <td>{{ is_array($question->options) ? implode(', ', $question->options) : '' }}</td>
            <td>
                <a href="{{ route('questions.edit', $question->id) }}">Edit</a>
                <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this question?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- <ul>
    @foreach($questions as $question)
        <li>
            {{ $question->question }} ({{ $question->type }})
            <a href="{{ route('questions.edit', $question->id) }}">Edit</a>
            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul> --}}