<x-base-layout title="Create Training">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6">Create a New Training</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('trainings.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Training Name:</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="description" name="description" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date:</label>
                <input type="datetime-local" id="start_date" name="start_date" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date:</label>
                <input type="datetime-local" id="end_date" name="end_date" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">Instructor:</label>
                <select id="user_id" name="user_id" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="difficulty" class="block text-sm font-medium text-gray-700">Difficulty:</label>
                <input type="text" id="difficulty" name="difficulty" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity:</label>
                <input type="number" id="capacity" name="capacity" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="is_recurring" class="block text-sm font-medium text-gray-700">Is Recurring:</label>
                <select id="is_recurring" name="is_recurring" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="not recurring">Not Recurring</option>
                    <option value="2x per week">2x per Week</option>
                    <option value="1x per week">1x per Week</option>
                    <option value="monthly">Monthly</option>
                </select>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Create Training
                </button>
            </div>
        </form>
    </div>
</x-base-layout>
