<h1>Test</h1>
<form action="{{ route('recommend') }}" method="POST">
    @csrf
    @foreach($questions as $question)
        <div>
            <label>{{ $question->question }}</label>
            @if($question->type == 'text')
                <input type="text" name="answers[{{ $question->id }}]" required>
            @elseif($question->type == 'select')
                <select name="answers[{{ $question->id }}]" required>
                    @foreach($question->options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            @elseif($question->type == 'radio')
                @foreach($question->options as $option)
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}" required>
                        {{ $option }}
                    </label>
                @endforeach
            @endif
        </div>
    @endforeach
    <button type="submit">Soumettre le Test</button>
</form>