<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Admin Dashboard - Notifications</title>
    <link rel="stylesheet" href="{{ asset('assets/css/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <!-- Optional icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-section">
            <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}" alt="Logo"
                class="dashboard-logo" />
            <div class="portal-title">JOB PORTAL</div>
            <h4>ADMIN DASHBOARD</h4>
        </div>

        <!-- Navigation Links -->
        <a href="{{ url('/dashboard') }}" class="nav-link">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ url('/manage-jobs') }}" class="nav-link">
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

        <a href="{{ url('/notification') }}" class="nav-link active">
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
                <h1>Notifications</h1>
                <p>Updates, alerts, and user activity.</p>
            </div>

            <div class="header-user">
            </div>
            </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="content">

            <!-- Job Notifications -->
            <section>
                <h2>Job-Related Notifications</h2>

                <div class="grid-header">
                    <div>Company & Location</div>
                    <div>Job Notice</div>
                    <div>Applicants</div>
                    <div>Status</div>
                    <div>Actions</div>
                </div>

                <div class="notif-card">
                    <div class="company">
                        <img src="{{ asset('assets/images/494356517_720172503782781_666955056287399904_n.jpg') }}"
                            alt="Company">
                        <div>
                            <p>SNSU Main Campus</p>
                            <p>Narciso Street, Surigao</p>
                        </div>
                    </div>
                    <div class="job-notice">New Applicant - Cleaning Staff</div>
                    <div class="applicants">5/30</div>
                    <div class="status">
                        <span class="status-badge status-new">New</span>
                    </div>
                    <div class="actions">
                        <button class="action-btn view">View</button>
                        <button class="action-btn delete">Delete</button>
                    </div>
                </div>
            </section>

            <hr>

            <!-- Applicant Notifications -->
            <section>
                <h2>Applicant Notifications</h2>

                <div class="grid-header">
                    <div>Applicant Info</div>
                    <div>Contact</div>
                    <div>Email</div>
                    <div>Type</div>
                    <div>Action</div>
                </div>

                <div class="notif-card">
                    <div class="company">
                        <img src="{{ asset('assets/images/498ea3e9-6ed6-4194-a026-7372a08cd507.jpg') }}"
                            alt="Applicant">
                        <div>
                            <p>Hearth Dumadapat</p>
                            <p>Zone 3, Surigao</p>
                        </div>
                    </div>
                    <div class="job-notice">09123456789</div>
                    <div class="applicants">hearth@gmail.com</div>
                    <div class="status">
                        <span class="status-badge status-message">Message</span>
                    </div>
                    <div class="actions">
                        <button class="action-btn reply">Reply</button>
                        <button class="action-btn archive">Archive</button>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <script>
        // Initialize Lucide icons
        lucide.replace();
    </script>

</body>

</html>
