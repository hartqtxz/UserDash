<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Portal Admin Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}" />
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
        <a href="{{ url('/dashboard') }}" class="nav-link active">
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
    <div class="main-content">

        <!-- Top Right Profile + Dropdown -->
        <div class="top-bar"
            style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
            <!-- Page Heading -->
            <h1>Welcome to the Admin Dashboard</h1>
            <div class="profile-dropdown">

                <!-- Profile Button -->
                <div class="edge-profile-box profile-toggle">
                    <img src="{{ asset('assets/images/494356517_720172503782781_666955056287399904_n.jpg') }}"
                        alt="Admin Profile" />

                    <div class="profile-info" style="margin-left:10px; text-align:right;">
                        <h4>Admin</h4>
                        <p>Administrator</p>
                    </div>
                </div>

                <!-- Dropdown Menu -->
                <div class="dropdown-menu">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>

                    </form>
                </div>

            </div>

        </div>



        <!-- Stat Boxes -->
        <div class="stat-container">

            <div class="stat-box stat-jobs">
                <h4>Jobs Posted</h4>
                <p class="stat-number">30</p>
            </div>

            <div class="stat-box stat-applicants">
                <h4>Applicants</h4>
                <p class="stat-number">56</p>
            </div>

            <div class="stat-box stat-users">
                <h4>Users</h4>
                <p class="stat-number">100</p>
            </div>

            <div class="stat-box stat-notifications">
                <h4>Notification</h4>
                <p class="stat-number">100</p>
            </div>

        </div>


        <!-- Chart Section -->
        <div class="chart-box" style="background:#fff; border-radius:20px;">
            <h2>Job Portal Monthly Analytics</h2>
            <canvas id="jobChart"></canvas>
        </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('jobChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                        label: 'Jobs Posted',
                        data: [12, 18, 14, 16, 20, 28, 30],
                        backgroundColor: '#0d47a1'
                    },
                    {
                        label: 'Applicants',
                        data: [30, 22, 35, 40, 33, 32, 42],
                        backgroundColor: '#ffcc00'
                    },
                    {
                        label: 'Users',
                        data: [18, 20, 22, 26, 28, 30, 31],
                        backgroundColor: '#1565c0'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>

    <script>
        document.addEventListener("click", function(e) {
            const dropdown = document.querySelector(".profile-dropdown");

            // If user clicks the profile box → toggle dropdown
            if (dropdown.contains(e.target)) {
                dropdown.classList.toggle("active");
            }
            // If user clicks outside → close dropdown
            else {
                dropdown.classList.remove("active");
            }
        });
    </script>
