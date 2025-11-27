<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Reset & base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #1e1e2f;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar p {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #b0b0c3;
            text-decoration: none;
            padding: 8px 0;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #3490dc;
        }

        /* Main content */
        .main {
            margin-left: 240px;
            padding: 40px 30px;
        }

        /* Cards */
        .card {
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .card-footer {
            margin-top: 20px;
            text-align: right;
        }

        /* Buttons */
        .btn {
            padding: 10px 18px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s;
        }

        .btn-primary {
            background-color: #3490dc;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #2176c7;
        }

        /* Alerts */
        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            border-left: 6px solid #28a745;
        }

        .alert-info {
            background-color: #d1ecf1;
            border-left: 6px solid #17a2b8;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-left: 6px solid #dc3545;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                flex-direction: row;
                flex-wrap: wrap;
                padding: 20px;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @section('sidebar')
            <p>Dashboard</p>
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Orders</a>
            <a href="#">Customers</a>
            <a href="#">Reports</a>
        @show
    </div>

    <div class="main">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>
