<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kickboxing Academy' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* General Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('{{ asset('images/kickboxer.jpg') }}') no-repeat center center/cover;
            color: #333; /* Dark text for readability */
        }

        header {
            color: white;
            text-align: center;
            padding: 3rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3.5rem;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        header p {
            font-size: 1.5rem;
            margin: 0.5rem 0 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        nav {
            background: #8B0000; /* Dark red */
            color: white;
            display: flex;
            justify-content: center;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1.5rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #FFD700; /* Gold on hover */
        }

        main {
            padding: 2rem;
            background-color: #fff; /* White background for content */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            max-width: 1200px;
            border-radius: 8px;
        }

        /* Table Styling */
        .training-table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: center;
            background-color: #fff; /* White background for the table */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .training-table thead {
            background-color: #8B0000; /* Dark red */
            color: white;
        }

        .training-table th,
        .training-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .training-table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray for alternating rows */
        }

        .training-table tbody tr:hover {
            background-color: #ffe6e6; /* Light red on hover */
        }

        .training-table th {
            font-weight: bold;
        }

        /* Calendar Table Styling */
        .calendar-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            text-align: center;
        }

        .calendar-table th,
        .calendar-table td {
            border: 1px solid #ddd;
            padding: 10px;
            vertical-align: top;
        }

        .calendar-table th {
            background-color: #8B0000; /* Dark red */
            color: white;
        }

        .calendar-table td {
            height: 100px;
            background-color: #f9f9f9;
        }

        .calendar-table td ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .calendar-table td ul li {
            font-size: 0.9rem;
            margin: 5px 0;
        }

        .calendar-table td ul li:hover {
            color: #8B0000; /* Dark red on hover */
        }

        .calendar-table td.today{
            background-color: #FFD700; /* Gold for today's date */
            font-weight: bold;
            color: #000;
            border: 2px solid #8B0000; /* Dark red border */
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            text-align: center;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .training-link {
            color: #8B0000;
            text-decoration: none;
            cursor: pointer;
        }

        .training-link:hover {
            text-decoration: underline;
        }

        /* Responsive Table */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }

            header p {
                font-size: 1.2rem;
            }

            nav a {
                margin: 0 0.5rem;
            }

            main {
                padding: 1rem;
            }

            .training-table {
                font-size: 0.9rem;
            }

            .training-table th,
            .training-table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body style="background: url('{{ asset($bodyBackground ?? 'images/kickboxer.jpg') }}') no-repeat center center/cover;">
    <nav>
        <a href="/">Home</a>
        <a href="/calendar">Schedule</a>
        <a href="/trainings">Trainings</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
    </nav>
    <header>
        <h1>Kickboxing Academy</h1>
        <p>Unleash Your Inner Fighter</p>
    </header>

    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px; margin: 10px 0;">
            {{ session('success') }}
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Kickboxing Academy. All rights reserved.</p>
    </footer>
</body>
</html>