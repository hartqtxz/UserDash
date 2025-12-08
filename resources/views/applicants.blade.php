<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Applicant Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/applicants.css') }}">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="header-left">
                <img class="job-portal-logo" src="images/Department_of_Labor_and_Employment_(DOLE).svg"
                    alt="Job Portal Logo" />
                <div class="job-portal-text">JOB PORTAL</div>
            </div>
            <div class="welcome-text">
                <h2>Welcome back!!</h2>
                <p>Here’s what’s happening with your job today.</p>
            </div>
            <div class="employer-section">
                <img class="employer-photo" src="images/DSCF7140.JPG" alt="Employer Avatar" />
                <div>
                    <div class="employer-text">SAMYANG G</div>
                    <div class="employer-role">Employer</div>
                </div>
            </div>
        </header>

        <section class="main-content">
            <h3 class="main-header">Applicant Information</h3>

            <div class="applicant-container">
                <!-- Applicant Photo -->
                <div class="photo-section">
                    <img class="profile-photo" src="images/DSCF7140.JPG" alt="Applicant Photo" />
                </div>

                <!-- Applicant Information -->
                <div class="info-section">
                    <div class="info-grid">
                        <div class="info-box">Fhukerat J. Weh</div>
                        <div class="info-box">Snsu Main Campus</div>
                        <div class="info-box">09123456789</div>

                        <div class="info-box">fweh@gmail.com</div>
                        <div class="info-box">JULY 07 2004</div>
                        <div class="info-box">Female</div>

                        <div class="info-box">Computer Assistance</div>
                        <div class="info-box">27,000</div>
                        <div class="info-box">Oct 10, 2025</div>

                        <div class="info-box">Full-time</div>
                        <div class="info-box">Software Knowledge</div>
                        <div class="info-box">Cpanel Professional</div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="button-group">
                <button class="btn btn-reject">Reject</button>
                <button class="btn btn-accept">Accept Applicant</button>
            </div>

            <div class="back-wrapper">
                <button class="btn btn-go-back">Go back</button>
            </div>
        </section>
    </div>
</body>

</html>
