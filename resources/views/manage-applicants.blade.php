<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Applicants | Job Portal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <!-- SIDEBAR -->

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-section">
            <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}" alt="Logo"
                class="dashboard-logo" />
            <div class="portal-title">JOB PORTAL</div>
            <h4>ADMIN DASHBOARD</h4>
        </div>

        <!-- Navigation Links -->
        <a href="{{ url('/dashboard') }}" class="nav-link ">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ url('/manage-jobs') }}" class="nav-link">
            <i class="fas fa-briefcase"></i>
            <span>Manage Jobs</span>
        </a>

        <a href="{{ url('/manage-applicants') }}" class="nav-link active">
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

        <!-- STAT CARDS -->
        <div class=" stat-container text-center mb-4">
            <div class="col-md-4">
                <div class="stat-box bg-warning text-dark p-3 rounded">
                    <h6>Total Applicants</h6>
                    <h3>10</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box bg-success text-white p-3 rounded">
                    <h6>Rejected</h6>
                    <h3>4</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box bg-primary text-white p-3 rounded">
                    <h6>Total Jobs</h6>
                    <h3>7</h3>
                </div>
            </div>
        </div>

        <!-- APPLICANT CARDS -->
        <div class="row g-4">
            <!-- Applicant 1 -->
            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/02d21ed0-cdde-4970-bb23-d751da527002.jpg') }}"
                        class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>

            <!-- Applicant 2 -->
            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/498ea3e9-6ed6-4194-a026-7372a08cd507.jpg') }}"
                        class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>

            <!-- Applicant 3 -->
            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/494356517_720172503782781_666955056287399904_n.jpg') }} "
                        class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>

            <!-- Repeat as needed -->
            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/DSCF7140.JPG') }}" class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/27928bef-ff63-4a9d-accc-4c02bc3ba18d.jpg') }}"
                        class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card applicant-card">
                    <img src="{{ asset('assets/images/DSCF7140.JPG') }}" class="card-img-top" alt="Applicant">
                    <div class="card-body text-center">
                        <button class="btn btn-danger me-2">Reject</button>
                        <button class="btn btn-success">View Applicant</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/dashboard.js"></script>
</body>

</html>
