<x-base-layout title="Training Index">
    <div class="container">
        <h2>Training Sessions</h2>
        <p>Explore all upcoming training sessions and their details below:</p>
        <br>
        <table class="training-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Instructor</th>
                    <th>Capacity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainings as $training)
                    <tr>
                        <td>{{ $training->id }}</td>
                        <td>{{ $training->name }}</td>
                        <td>{{ $training->description }}</td>
                        <td>{{ (new DateTime($training->start_date))->format('d M Y, H:i') }}</td>
                        <td>{{ (new DateTime($training->end_date))->format('d M Y, H:i') }}</td>
                        <td>{{ $training->instructor->name ?? 'N/A' }}</td>
                        <td>{{ $training->capacity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>