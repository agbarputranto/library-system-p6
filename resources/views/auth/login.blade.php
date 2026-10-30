<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Library System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #172b23;
        }

        .navbar {
            width: 100%;
            background: #0d5b3a;
            padding: 22px 9%;
            color: white;
        }

        .navbar h2 {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .main-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .login-card {
            background: white;
            width: 100%;
            max-width: 430px;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(20, 55, 38, 0.08);
            border: 1px solid #e4ebe6;
        }

        .login-header {
            margin-bottom: 30px;
        }

        .login-header .label {
            display: inline-block;
            color: #0d7548;
            background: #e7f5ed;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .login-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            letter-spacing: -0.8px;
        }

        .login-header p {
            font-size: 14px;
            color: #718078;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 9px;
        }

        .form-group input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d8e1db;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            background: #fff;
        }

        .form-group input:focus {
            border-color: #0d7548;
            box-shadow: 0 0 0 3px rgba(13, 117, 72, 0.12);
        }

        .error-box {
            background: #fff0f0;
            color: #c62828;
            border: 1px solid #f3cccc;
            padding: 12px 14px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 22px;
            line-height: 1.5;
        }

        .login-button {
            width: 100%;
            border: none;
            border-radius: 8px;
            background: #0d5b3a;
            color: white;
            padding: 14px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }

        .login-button:hover {
            background: #09482d;
        }

        .login-button:active {
            transform: scale(0.99);
        }

        .footer {
            text-align: center;
            padding: 22px;
            color: #7b8981;
            font-size: 12px;
        }

        @media (max-width: 480px) {
            .navbar {
                padding: 20px 6%;
            }

            .navbar h2 {
                font-size: 22px;
            }

            .login-card {
                padding: 28px 22px;
            }

            .login-header h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <h2>Library System</h2>
    </header>

    <main class="main-container">
        <section class="login-card">

            <div class="login-header">
                <span class="label">LIBRARY MANAGEMENT</span>
                <h1>Welcome Back</h1>
                <p>Silakan masuk untuk mengakses sistem informasi perpustakaan.</p>
            </div>

            @if ($errors->any())
                <div class="error-box" role="alert">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Masukkan email kamu"
                        value="{{ old('email') }}"
                        autocomplete="username"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <button type="submit" class="login-button">
                    Sign In
                </button>
            </form>

        </section>
    </main>

    <footer class="footer">
        &copy; {{ date('Y') }} Library System. All rights reserved.
    </footer>

</body>
</html>