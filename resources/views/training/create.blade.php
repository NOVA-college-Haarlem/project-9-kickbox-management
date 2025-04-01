@if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded mb-3 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('trainings.store') }}" method="POST">
    @csrf

    <label for="name">Training Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="start_date">Start Date:</label>
    <input type="datetime-local" id="start_date" name="start_date" required>

    <label for="end_date">End Date:</label>
    <input type="datetime-local" id="end_date" name="end_date" required>

    <label for="instructor">Instructor:</label>
    <select id="user_id" name="user_id" required>
        @foreach ($instructors as $instructor)
            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
        @endforeach
    </select>

    <label for="difficulty">Difficulty:</label>
    <input type="text" id="difficulty" name="difficulty" required>

    <label for="capacity">Capacity:</label>
    <input type="number" id="capacity" name="capacity" required>

    <label for="is_recurring">Is Recurring:</label>
    <select id="is_recurring" name="is_recurring" required>
        <option value="not recurring">Not Recurring</option>
        <option value="2x per week">2x per Week</option>
        <option value="1x per week">1x per Week</option>
        <option value="monthly">Monthly</option>
    </select>

    <button type="submit">Create Training</button>
</form>
