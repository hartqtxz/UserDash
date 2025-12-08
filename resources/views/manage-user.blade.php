<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="{{ asset('assets/css/manage-user.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <!-- SIDEBAR -->
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

        <a href="{{ url('/manage-user') }}" class="nav-link active">
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

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <div class="user-header">

        </div>
        </div>
        </div>

        <!-- MAIN HEADER BOX -->

        <div class="header-box">
            <div>

            </div>
        </div>


        <div class="user-list">
            <!-- USER CARD 1 -->
            <div class="user-card">
                <div class="user-info">
                    <img src="{{ asset('assets/images/498ea3e9-6ed6-4194-a026-7372a08cd507.jpg') }}"
                        class="user-avatar">
                    <div>
                        <strong class="user-name">Juan Dela Cruz</strong>
                        <p class="user-email">juan@example.com • 09012345678</p>
                    </div>
                </div>
                <div class="job">Baker</div>
                <span class="status active">Active</span>
                <p class="date">Oct-06-2025</p>
                <div class="actions">
                    <button class="edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="delete"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>

            <!-- USER CARD 2 -->
            <div class="user-card">
                <div class="user-info">
                    <img src="{{ asset('assets/images/494356517_720172503782781_666955056287399904_n.jpg') }}"
                        class="user-avatar">
                    <div>
                        <strong class="user-name">Maria Santos</strong>
                        <p class="user-email">maria@example.com • 09123456789</p>
                    </div>
                </div>
                <div class="job">Cashier</div>
                <span class="status suspended">Suspended</span>
                <p class="date">Sep-22-2025</p>
                <div class="actions">
                    <button class="edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="delete"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
