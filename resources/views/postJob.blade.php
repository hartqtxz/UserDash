<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Portal Admin Dashboard - Post Jobs</title>

        <!-- Sidebar CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            /* ===================== GENERAL ===================== */
            body {
                font-family: 'Inter', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                height: 100vh;
                overflow: hidden;
                background-color: #f5f7fa;
            }

            main {
                margin-left: 280px;
                flex: 1;
                overflow-y: auto;
                background-color: #f5f7fa;
            }

            /* ===================== HEADER ===================== */
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 2rem;
                background-color: #ffffff;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                border-bottom-left-radius: 1rem;
                border-bottom-right-radius: 1rem;
            }

            header .header-title h1 {
                font-size: 1.8rem;
                margin: 0;
                color: #1f2937;
            }

            header .header-title p {
                margin: 0.2rem 0 0;
                color: #6b7280;
                font-size: 0.95rem;
            }

            header .header-user {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            header .user-info p:first-child {
                font-weight: 600;
                color: #1f2937;
                margin: 0;
            }

            header .user-info p:last-child {
                font-size: 0.85rem;
                color: #6b7280;
                margin: 0;
            }

            header .user-avatar img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                    object-fit: cover;
                    border: 2px solid #22c55e;
                }

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
                    padding: 2rem;
                    border-radius: 1rem;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
                    transition: transform 0.2s, box-shadow 0.2s;
                }

                .form-card:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                }

                .form-card h2 {
                    font-size: 1.8rem;
                    font-weight: 700;
                    color: #1f2937;
                    margin-bottom: 1.5rem;
                    border-bottom: 2px solid #22c55e;
                    display: inline-block;
                    padding-bottom: 0.3rem;
                }

                .job-form {
                    display: flex;
                    flex-direction: column;
                    gap: 1.5rem;
                }

                .form-row {
                    display: flex;
                    gap: 1rem;
                    flex-wrap: wrap;
                }

                .form-input {
                    flex: 1;
                    padding: 0.75rem 1rem;
                    border: 1px solid #d1d5db;
                    border-radius: 0.5rem;
                    font-size: 0.95rem;
                    outline: none;
                    transition: border-color 0.2s, box-shadow 0.2s;
                }

                .form-input:focus {
                    border-color: #22c55e;
                    box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.2);
                }

                textarea.form-input {
                    resize: vertical;
                    min-height: 80px;
                }

                /* Section Labels */
                .form-section {
                    font-weight: 600;
                    color: #1f2937;
                    margin-bottom: 0.5rem;
                    font-size: 0.95rem;
                }

                /* ===================== BUTTON ===================== */
                .form-actions {
                    display: flex;
                    justify-content: flex-end;
                }

                .form-actions button {
                    background-color: #22c55e;
                    color: white;
                    font-weight: 600;
                    padding: 0.75rem 2rem;
                    border: none;
                    border-radius: 0.5rem;
                    font-size: 1rem;
                    cursor: pointer;
                    transition: background-color 0.2s, box-shadow 0.2s, transform 0.2s;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }

                .form-actions button:hover {
                    background-color: #16a34a;
                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
                    transform: translateY(-1px);
                }

                /* Responsive */
                @media screen and (max-width: 768px) {
                    header {
                        flex-direction: column;
                        align-items: flex-start;
                        gap: 1rem;
                    }

                    .form-row {
                        flex-direction: column;
                    }
                }
            </style>

            <script src="https://unpkg.com/lucide@latest"></script>
        </head>

    <body>
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-section">
                <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}"
                     alt="Logo" class="dashboard-logo" />
                <div class="portal-title">JOB PORTAL</div>
                <h4>ADMIN DASHBOARD</h4>
            </div>

            <!-- Navigation Links -->
            <a href="{{ url('/dashboard') }}" class="nav-link active">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('viewManageJobs') }}" class="nav-link">
                <i class="fas fa-briefcase"></i>
                <span>Manage Jobs</span>
            </a>

            <a href="{{ url('/manage-applicants') }}" class="nav-link">
                <i class="fas fa-users"></i>
                <span>Manage Applicants</span>
            </a>

            <a href="{{ url('/manage-user') }}" class="nav-link">
                <i class="fas fa-user-cog"></i>
                <span>Manage Users</span>
            </a>

            <a href="{{ url('/notification') }}" class="nav-link">
                <i class="fas fa-bell"></i>
                <span>Notification</span>
            </a>

            <a href="{{ url('/review') }}" class="nav-link">
                <i class="fas fa-star"></i>
                <span>Review & Ratings</span>
            </a>
        </div>

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
                    <h2>Post Job</h2>

                    <form class="job-form" method="POST" action="{{ route('postJobs') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-section">Job Details</div>
                        <div class="form-row">
                            <input type="text" name="job_name" class="form-input" placeholder="Job Title" required>
                            <input type="text" name="company_name" class="form-input" placeholder="Company Name" required>
                        </div>

                        <div class="form-row">
                            <input type="text" name="location" class="form-input" placeholder="Location" required>
                            <input type="text" name="job_type" class="form-input" placeholder="Employment Type" required>
                        </div>

                        <div class="form-row">
                            <input type="number" name="salary_min" class="form-input" placeholder="Salary Min" required>
                            <input type="number" name="salary_max" class="form-input" placeholder="Salary Max" required>
                        </div>

                        <div class="form-row">
                            <input type="text" name="schedule_day" class="form-input" placeholder="Schedule Day" required>
                            <input type="text" name="schedule_time" class="form-input" placeholder="Schedule Time" required>
                        </div>
                        <div class="form-row">
                            <input type="number" name="number_of_vacancies" class="form-input" placeholder="Number of Vacancies" required>
                        </div>

                        <div class="form-row">
                            <textarea name="job_description" class="form-input" placeholder="Job Description" required></textarea>
                            <input type="file" name="job_image" class="form-input">
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
