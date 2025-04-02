<!-- filepath: c:\Users\Luca Wijsman\Herd\kickboks\resources\views\calendar\index.blade.php -->
<x-base-layout title="Training Calendar">
    <h2>Training Calendar</h2>
    <p>View all upcoming training sessions for the month.</p>

    <table class="calendar-table">
        <thead>
            <tr>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
        </thead>
        <tbody>
            @php
                // Convert start and end dates to DateTime objects
                $currentDate = new DateTime($startOfMonth->format('Y-m-d'));
                $currentDate->modify('last Sunday'); // Start from the last Sunday before the month
                $endDate = new DateTime($endOfMonth->format('Y-m-d'));
                $endDate->modify('next Saturday'); // End on the next Saturday after the month
            @endphp

            @while ($currentDate <= $endDate)
                <tr>
                    @for ($i = 0; $i < 7; $i++)
                        <td>
                            <strong>{{ $currentDate->format('d') }}</strong>
                            <ul>
                                @if (isset($trainingsByDate[$currentDate->format('Y-m-d')]))
                                    @foreach ($trainingsByDate[$currentDate->format('Y-m-d')] as $training)
                                        <li>{{ $training->name }} ({{ (new DateTime($training->start_date))->format('H:i') }})</li>
                                    @endforeach
                                @else
                                    <li>No sessions</li>
                                @endif
                            </ul>
                        </td>
                        @php $currentDate->modify('+1 day'); @endphp
                    @endfor
                </tr>
            @endwhile
        </tbody>
    </table>
</x-base-layout>