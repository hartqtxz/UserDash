<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Admin Dashboard - Post Jobs</title>
    <style>
        /* ===================== GENERAL ===================== */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .main-content {
            margin-left: 280px;
            flex: 1;
            overflow-y: auto;
            background-color: #E9EEF7;
        }

        /* ===================== SIDEBAR ===================== */
        /* (Same as before, keep previous sidebar CSS here) */

        /* ===================== HEADER ===================== */
        /* (Same as before, keep previous header CSS here) */

        /* ===================== CONTENT ===================== */
        .content {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* ===================== FORM CARD ===================== */
        .form-card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-card h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 1.5rem;
        }

        .job-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-input {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            border-color: #3b82f6;
        }

        textarea.form-input {
            resize: vertical;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
        }

        .form-actions button {
            background-color: #22c55e;
            color: white;
            font-weight: bold;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-actions button:hover {
            background-color: #16a34a;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo-section">
            <img src="images/Department_of_Labor_and_Employment_(DOLE).svg" alt="DOLE Logo" class="dashboard-logo">
            <div class="portal-title">JOB PORTAL</div>
        </div>

        <h4>ADMIN DASHBOARD</h4>

        <nav>
            <a href="#" class="nav-link active">
                <i data-lucide="briefcase"></i>
                <span>MANAGE JOB</span>
            </a>
            <a href="#" class="nav-link">
                <i data-lucide="users"></i>
                <span>MANAGE APPLICANTS</span>
            </a>
            <a href="#" class="nav-link">
                <i data-lucide="user"></i>
                <span>MANAGE USERS</span>
            </a>
            <a href="#" class="nav-link">
                <i data-lucide="bell"></i>
                <span>NOTIFICATIONS</span>
            </a>
            <a href="#" class="nav-link">
                <i data-lucide="star"></i>
                <span>REVIEW & RATINGS</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">

        <!-- Header -->
        <header>
            <div class="header-title">
                <h1>Welcome back!</h1>
                <p>Here's what's happening with your job today.</p>
            </div>

            <div class="header-user">
                <div class="user-info">
                    <p>SAMYANG G</p>
                    <p>Employer</p>
                </div>
                <div class="user-avatar">
                    <img src="images/DSCF7140.JPG" alt="Profile Picture">
                </div>
            </div>
        </header>

        <!-- Post Job Form -->
        <div class="content">
            <div class="form-card">
                <h2>Post Jobs</h2>

                <form class="job-form">

                    <div class="form-row">
                        <input type="text" class="form-input" placeholder="Job Title">
                        <input type="text" class="form-input" placeholder="Company Name">
                    </div>

                    <div class="form-row">
                        <input type="text" class="form-input" placeholder="Location">
                        <input type="text" class="form-input" placeholder="Employment Type">
                    </div>

                    <div class="form-row">
                        <input type="text" class="form-input" placeholder="Salary Range">
                        <input type="text" class="form-input" placeholder="Job Category">
                    </div>

                    <textarea rows="4" class="form-input" placeholder="Job Description"></textarea>

                    <div class="form-row">
                        <textarea rows="2" class="form-input" placeholder="Responsibilities"></textarea>
                        <textarea rows="2" class="form-input" placeholder="Qualifications"></textarea>
                    </div>

                    <div class="form-row">
                        <input type="text" class="form-input" placeholder="Benefits">
                        <input type="text" class="form-input" placeholder="Application Deadline">
                    </div>

                    <div class="form-actions">
                        <button type="submit">Post Job</button>
                    </div>

                </form>
            </div>
        </div>

    </main>

    <script>
        lucide.replace();
    </script>
</body>

</html>
