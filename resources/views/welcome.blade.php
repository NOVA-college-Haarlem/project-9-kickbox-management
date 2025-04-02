
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Kickbox Management</h1>
    <ul>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
        <li><a href="{{ route('trainings.index') }}">Trainings</a></li>
        <li><a href="{{ route('trainings.create') }}">Create Training</a></li>
        <li><a href="{{ route('calendar.index') }}">Calendar</a></li>
    </ul>
</body>
</html>