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
                        <td>{{ $Training->id }}</td>
                        <td>{{ $Training->titel }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>