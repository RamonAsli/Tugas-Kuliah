<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manajemen Barang')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .navbar {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand,
        .nav-link,
        .navbar-text {
            color: #ffffff !important;
            font-weight: bold;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            font-weight: bold;
            color: #6a11cb;
            margin-bottom: 30px;
        }

        .table th {
            background-color: #6a11cb;
            color: #fff;
            text-align: center;
        }

        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-primary {
            background-color: #6a11cb;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #2575fc;
        }

        .btn-warning {
            background-color: #fcd34d;
            color: #000;
            border: none;
        }

        .btn-danger {
            background-color: #ef4444;
            border: none;
        }

        .btn-info {
            background-color: #38bdf8;
            border: none;
            color: #000;
        }

        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
        }

        .alert-success {
            font-weight: bold;
            text-align: center;
        }

        footer {
            text-align: center;
            color: #666;
            padding: 20px 0;
            margin-top: 60px;
            background-color: #f0f4f8;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="#">🌈 BarangApp</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('KeluarMasukBarang.index') }}">📦 Keluar-Masuk Barang</a>
                </li>
            </ul>
            <span class="navbar-text">
                Laravel 12 — CRUD Manajemen Barang ✨
            </span>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; {{ date('Y') }} BarangApp by Ramon Entertainment </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
