<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library System</title>

        <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f7f5;
            color: #000000;
        }

        header {
            background-color: #0D5936;
            color: white;
            padding: 24px 60px;
        }

        .header-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 50px 30px;
            min-height: 70vh;
        }

        .page-title {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .page-description {
            color: #66736b;
            margin-bottom: 35px;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 3px 12px rgba(15, 27, 20, 0.08);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .stat-card {
            background-color: #0D5936;
            color: white;
            padding: 25px;
            border-radius: 12px;
        }

        .stat-card h3 {
            margin: 0 0 12px;
            font-size: 16px;
            font-weight: normal;
        }

        .stat-number {
            font-size: 36px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
        }

        th {
            background-color: #0D5936;
            color: white;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e5e9e6;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .button {
            display: inline-block;
            background-color: #0D5936;
            color: white;
            padding: 10px 16px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
        }

        .button:hover {
            opacity: 0.85;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #0D5936;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            main {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="header-container">

            <div class="logo">
                Library System
            </div>

            <nav>
                <a href="/dashboard">Dashboard</a>
                <a href="/books">Books</a>
                <a href="/categories">Categories</a>
                <a href="/members">Members</a>
            </nav>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Library System</p>
    </footer>

</body>
</html>