<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Portal</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="page-frame">
        <header class="site-header">
            <div class="brand">
                <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}" alt="Logo"
                    class="logo">
                <span class="brand-title">JOB PORTAL</span>
            </div>


            <nav class="nav-actions">
                <a href="{{ route('login') }}"><button class="btn btn-signin">Sign In</button></a>
                <a href="{{ route('register') }}"><button class="btn btn-register">Register</button></a>
            </nav>

        </header>

        <main class="hero">
            <div class="hero-overlay">
                <h1 class="hero-title">
                    Find your next Job or
                    <span class="hero-highlight">Perfect Hire</span>
                </h1>
            </div>
        </main>
    </div>

    <!-- ✅ About / Vision / Mission Section -->
    <section style="padding: 60px 20px; background:#eef3ff; text-align:center;">
        <h2 style="font-size: 36px; font-weight: bold;">About Us</h2>
        <p style="max-width: 900px; margin: 20px auto; font-size: 18px; line-height: 1.6;">
            The DOLE Surigao del Norte Field Office, as part of the national Department of Labor and
            Employment (DOLE), aims to promote gainful employment and worker welfare, focusing on
            empowering people through knowledge, skills, and access to economic opportunities.
        </p>

        <h2 style="font-size: 36px; font-weight: bold; margin-top:40px;">Vision</h2>
        <p style="max-width: 900px; margin: 20px auto; font-size: 18px; line-height: 1.6;">
            With the Blessings of the Divine Providence, Surigao City 2040: A Smart City of Resilient People.
        </p>

        <h2 style="font-size: 36px; font-weight: bold; margin-top:40px;">Mission</h2>
        <p style="max-width: 900px; margin: 20px auto 60px; font-size: 18px; line-height: 1.6;">
            To empower workers and employers through education and support.
        </p>
    </section>

    <!-- ✅ Footer -->
    <footer
        style="background: #0a56a5; color: white; padding: 40px 20px; display:flex; justify-content:space-around; flex-wrap:wrap; text-align:center;">
        <div>
            <h3>Contact</h3>
            <p>📞 85-359-833</p>
        </div>
        <div>
            <h3>DOLE</h3>
            <p>Photos Policy</p>
        </div>
        <div>
            <h3>Follow Us</h3>
            <p>📘 Facebook &nbsp;&nbsp; 🐦 Twitter &nbsp;&nbsp; 📸 Instagram</p>
        </div>
    </footer>

    <!-- ✅ Scripts (ONLY ONCE) -->
    <script src="js/main.js"></script>

</body>

</html>
