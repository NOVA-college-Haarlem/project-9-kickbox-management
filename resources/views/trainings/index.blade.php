<div class="container">
    <br>
        <table class="table table-bordered" style="width: 100%; margin: 0 auto;">
            <thead>
                <tr> 
                    <th>#</th>
                    <th>Titel</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trainingen as $training)
                    <tr>
                        <td>{{ $training->id }}</td>
                        <td>{{ $training->titel }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>