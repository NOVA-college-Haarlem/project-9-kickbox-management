<div class="container">
    <br>
        <table class="table table-bordered" style="width: 100%; margin: 0 auto;">
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>Titel</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trainings as $training)
                    <tr>
                        <td>{{ $training->id }}</td>
                        <td>{{ $training->name }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>