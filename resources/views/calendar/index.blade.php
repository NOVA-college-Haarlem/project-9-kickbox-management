<!-- filepath: c:\Users\Luca Wijsman\Herd\kickboks\resources\views\calendar\index.blade.php -->
<x-base-layout :bodyBackground="$bodyBackground" title="Training Calendar">
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
                $currentDate = new DateTime($startOfMonth->format('Y-m-d'));
                $currentDate->modify('last Sunday');
                $endDate = new DateTime($endOfMonth->format('Y-m-d'));
                $endDate->modify('next Saturday');
                $today = new DateTime();
            @endphp

            @while ($currentDate <= $endDate)
                <tr>
                    @for ($i = 0; $i < 7; $i++)
                        <td class="{{ $currentDate->format('Y-m-d') === $today->format('Y-m-d') ? 'today' : '' }}">
                            <strong>{{ $currentDate->format('d') }}</strong>
                            <ul>
                                @if (isset($trainingsByDate[$currentDate->format('Y-m-d')]))
                                    @foreach ($trainingsByDate[$currentDate->format('Y-m-d')] as $training)
                                        <li>
                                            <form method="POST" action="{{ route('trainings.attend') }}" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="training_id" value="{{ $training->id }}">
                                                <button type="submit" class="training-link" style="background: none; border: none; color: #8B0000; cursor: pointer;">
                                                    {{ $training->name }} ({{ (new DateTime($training->start_date))->format('H:i') }})
                                                </button>
                                            </form>
                                        </li>
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