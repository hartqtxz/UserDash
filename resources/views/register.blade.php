<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register - Job Portal</title>
        <link rel="stylesheet" href="css/style.css">

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                background: url('assets/images/DOLE.webp') no-repeat center center/cover;
                height: 100vh;
            }

            /* Transparent header */
            .top-header {
                display: flex;
                align-items: center;
                padding: 15px 25px;
                background: transparent !important;
            }

            .top-header .logo {
                width: 50px;
                margin-right: 10px;
            }

            .top-header .brand-title {
                font-size: 22px;
                font-weight: bold;
                color: #fff;
                text-shadow: 1px 1px 4px #000;
            }

            /* Form Wrapper */
            .register-wrapper {
                height: calc(100vh - 80px);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .register-box {
                background: rgba(0, 0, 0, 0.85);
                padding: 30px;
                border-radius: 12px;
                width: 350px;
                color: white;
                text-align: center;
            }

            .register-box img {
                width: 65px;
                margin-bottom: 10px;
            }

            .register-box input {
                width: 100%;
                padding: 12px;
                margin: 8px 0;
                border: none;
                border-radius: 6px;
            }

            .register-btn {
                width: 100%;
                padding: 12px;
                margin-top: 10px;
                background: #2db64f;
                color: #fff;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 16px;
            }

            .register-box a {
                color: #ff4d4d;
                text-decoration: none;
            }
        </style>
    </head>

    <body>

        <!-- Transparent Logo + title -->
        <header class="top-header">
            <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}" class="logo">
            <span class="brand-title">JOB PORTAL</span>
        </header>

        <!-- Registration Form -->
        <div class="register-wrapper">
            <div class="register-box">

                <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}">

                <h2>Register</h2>

                @if (session('success'))
                    <div style="color:green">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div style="color:red">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>

                    <!-- Must match database column 'contact_number' -->
                    <input type="text" name="contact_number" placeholder="Phone Number">

                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                    <button type="submit" class="register-btn">Register</button>
                </form>

                <p>Already have an account? <a href="/login">Login here</a></p>

            </div>
        </div>

    </body>
</html>
