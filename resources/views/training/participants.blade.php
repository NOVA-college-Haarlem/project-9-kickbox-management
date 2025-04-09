<!-- filepath: c:\Users\Luca Wijsman\Herd\kickboks\resources\views\training\participants.blade.php -->
<x-base-layout title="Participants for {{ $training->name }}">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Participants for {{ $training->name }}</h2>
        <p class="text-gray-600 mb-6">Start Date: {{ $training->start_date->format('d M Y, H:i') }}</p>
        <p class="text-gray-600 mb-6">End Date: {{ $training->end_date->format('d M Y, H:i') }}</p>

        @if ($participants->isEmpty())
            <p class="text-gray-500">No participants have registered for this training yet.</p>
        @else
            <ul class="list-disc pl-5">
                @foreach ($participants as $participant)
                    <li class="text-gray-700">{{ $participant->name }} ({{ $participant->email }})</li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('calendar.index') }}" class="mt-6 inline-block bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700">
            Back to Calendar
        </a>
    </div>
</x-base-layout>