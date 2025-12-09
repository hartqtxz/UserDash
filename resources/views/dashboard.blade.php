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
    <x-sidebar />

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

                </div>

            </div>

        </div>



        <!-- Stat Boxes -->
        <div class="stat-container">

            <div class="stat-box stat-jobs">
                <h4>Jobs Posted</h4>
                <p class="stat-number">{{ $jobsCount }}</p>
            </div>

            <div class="stat-box stat-applicants">
                <h4>Applicants</h4>
                <p class="stat-number">{{ $applicantsCount }}</p>
            </div>

            <div class="stat-box stat-users">
                <h4>Users</h4>
                <p class="stat-number">{{ $usersCount }}</p>
            </div>

            <div class="stat-box stat-notifications">
                <h4>Notification</h4>
                <p class="stat-number">{{ $notificationsCount }}</p>
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
        const jobsCount = {{ $jobsCount }};
        const applicantsCount = {{ $applicantsCount }};
        const usersCount = {{ $usersCount }};

        const ctx = document.getElementById('jobChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Current Stats'],
                datasets: [
                    {
                        label: 'Jobs Posted',
                        data: [jobsCount],
                        backgroundColor: '#0d47a1'
                    },
                    {
                        label: 'Applicants',
                        data: [applicantsCount],
                        backgroundColor: '#ffcc00'
                    },
                    {
                        label: 'Users',
                        data: [usersCount],
                        backgroundColor: '#1565c0'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' }
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
