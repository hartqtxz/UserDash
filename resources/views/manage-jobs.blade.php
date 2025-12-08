<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Portal | Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
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

        <a href="{{ url('/manage-jobs') }}" class="nav-link active">
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

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>MANAGES JOB</h5>
            <div>
                <input type="text" class="form-control d-inline-block me-2" placeholder="Search Job"
                    style="width: 180px;">
                <button class="btn btn-primary me-2">Post Job</button>
                <button class="btn btn-outline-secondary">All Categories</button>
            </div>
        </div>

        <!-- JOB CARDS -->
        <div class="row g-4">
            <!-- Carpenter -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets/images/cleaner.webp') }}" alt="Carpenter">
                    <div class="card-body">
                        <h6>Carpenter</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>

            <!-- Baker -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets/images/image-8.png') }}" alt="Baker">
                    <div class="card-body">
                        <h6>Baker</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>

            <!-- Mason -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets/images/happy-indian-male-construction-worker-260nw-2317221223.webp') }}"
                        alt="Mason">
                    <div class="card-body">
                        <h6>Mason</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>

            <!-- Electrician -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets/images/electrician-working-on-electrical-panel-circuit-breaker-box.jpg') }}"
                        alt="Electrician">
                    <div class="card-body">
                        <h6>Electrician</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>
            <!-- Office Staff -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets\images\electrician-working-on-electrical-panel-circuit-breaker-box.jpg') }}"
                        alt="Office Staff">
                    <div class="card-body">
                        <h6>Office Staff</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>

            <!-- Cleaner -->
            <div class="col-md-4">
                <div class="card card-job">
                    <img src="{{ asset('assets/images/cleaner.webp') }}" alt="Cleaner">
                    <div class="card-body">
                        <h6>Cleaner</h6>
                        <p>Workers Needed: 25</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="js/dashboard.js"></script>
</body>

</html>
