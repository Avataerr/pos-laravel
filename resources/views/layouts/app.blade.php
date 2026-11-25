<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | POS Application</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f5f7; color: #222; }
        header { background: #26344a; color: white; padding: 18px 28px; }
        nav { display: flex; gap: 18px; margin-top: 12px; }
        nav a { color: white; text-decoration: none; }
        main { background: white; margin: 28px auto; padding: 24px; max-width: 900px; }
        table { border-collapse: collapse; width: 100%; margin-top: 16px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #e9edf3; }
    </style>
</head>
<body>
    <header>
        <h1>POS Application</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers') }}">Customer Accounts</a>
            <a href="{{ route('users') }}">User Accounts</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>