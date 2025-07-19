<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Portal'; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');

        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #0d0d0d;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            padding: 30px 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #f72585;
            background-color: #1a1a1a;
            box-shadow: 0 0 8px #f72585;
            text-transform: uppercase;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background-color: #111;
            padding: 12px 0;
            border-bottom: 2px solid #7209b7;
            box-shadow: 0 0 6px #3a0ca3;
            flex-wrap: wrap;
        }

        .navbar a {
            color: #ffffff;
            padding: 10px 18px;
            text-decoration: none;
            font-weight: bold;
            margin: 4px 6px;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .navbar a:hover {
            background-color: #3a0ca3;
            box-shadow: 0 0 6px #f72585;
        }

        /* Main Content */
        main.container {
            background-color: #151515;
            max-width: 1000px;
            width: 95%;
            margin: 30px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(255, 0, 255, 0.2);
        }

        /* Table Styling */
        table.table {
            background-color: #222;
            color: #fff;
            border: none;
        }

        table.table thead {
            background-color: #3a0ca3;
            color: #fff;
        }

        table.table td,
        table.table th {
            vertical-align: middle;
        }

        .badge {
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .badge-success {
            background-color: #00ff99;
            color: #000;
        }

        .btn-warning {
            background-color: #fca311;
            border: none;
            color: #000;
        }

        .btn-danger {
            background-color: #e63946;
            border: none;
        }

        input,
        select {
            background-color: #1c1c1c !important;
            color: #fff !important;
            border: 1px solid #3a0ca3 !important;
        }

        input::placeholder {
            color: #aaa;
        }

        footer {
            background: #111;
            color: #bbb;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            border-top: 2px solid #3a0ca3;
            margin-top: auto;
        }
    </style>

</head>

<body>

    <div class="header">
        Admin Portal Berita
    </div>

    <div class="navbar">
        <a href="<?= base_url(); ?>">Dashboard</a>
        <a href="<?= base_url('/admin/artikel'); ?>">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
    </div>

    <div class="container">