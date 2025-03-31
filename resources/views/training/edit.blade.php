<form action="{{ route('trainings.update', $training->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Training Name:</label>
    <input type="text" id="name" name="name" value="{{ $training->name }}" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{ $training->description }}</textarea><br>

    <label for="start_date">Start Date:</label>
    <input type="datetime-local" id="start_date" name="start_date" value="{{ $training->start_date }}" required><br>

    <label for="end_date">End Date:</label>
    <input type="datetime-local" id="end_date" name="end_date" value="{{ $training->end_date }}" required><br>

    <label for="instructor">Instructor:</label>
    <select id="user_id" name="user_id" required>
        @foreach ($instructors as $instructor)
            <option value="{{ $instructor->id }}" {{ $training->user_id == $instructor->id ? 'selected' : '' }}>
                {{ $instructor->name }}
            </option>
        @endforeach
    </select><br>

    <label for="difficulty">Difficulty:</label>
    <input type="text" id="difficulty" name="difficulty" value="{{ $training->difficulty }}" required><br>

    <label for="capacity">Capacity:</label>
    <input type="number" id="capacity" name="capacity" value="{{ $training->capacity }}" required><br>

    <label for="is_recurring">Is Recurring:</label>
    <select id="is_recurring" name="is_recurring" required>
        <option value="not recurring" {{ $training->is_recurring == 'not recurring' ? 'selected' : '' }}>Not Recurring</option>
        <option value="2x per week" {{ $training->is_recurring == '2x per week' ? 'selected' : '' }}>2x per Week</option>
        <option value="1x per week" {{ $training->is_recurring == '1x per week' ? 'selected' : '' }}>1x per Week</option>
        <option value="monthly" {{ $training->is_recurring == 'monthly' ? 'selected' : '' }}>Monthly</option>
    </select><br>

    <button type="submit">Update Training</button>
</form>