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
    <x-sidebar />

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>MANAGES JOB</h5>
            <div>
                <form action="{{ route('viewManageJobs') }}" method="GET" class="d-inline-block">
                    <input type="text" name="search" class="form-control d-inline-block me-2" placeholder="Search Job" style="width: 180px;" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </form>

                <form action="{{ route('viewPostJobs') }}" method="GET" class="d-inline-block">
                    <button type="submit" class="btn btn-primary me-2">Post Job</button>
                </form>
            </div>
        </div>

        <!-- JOB CARDS -->
        <div class="row g-4">
            @forelse($jobs as $job)
                <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#jobModal{{ $job->id }}" style="cursor:pointer;">
                    <div class="card card-job" >
                        <img src="{{ $job->image ? asset($job->image) : asset('assets/images/default-job.png') }}" alt="{{ $job->job_name }}">
                        <div class="card-body">
                            <h6>{{ $job->job_name }}</h6>
                            <p>Workers Needed: {{ $job->number_of_vacancies }}</p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="jobModal{{ $job->id }}" tabindex="-1" aria-labelledby="jobModalLabel{{ $job->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- View Mode -->
                            <div class="modal-body-view">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jobModalLabel{{ $job->id }}">{{ $job->job_name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ $job->image ? asset($job->image) : asset('assets/images/default-job.png') }}" class="img-fluid mb-3" alt="{{ $job->job_name }}">
                                    <p><strong>Company:</strong> {{ $job->company_name }}</p>
                                    <p><strong>Job Type:</strong> {{ $job->job_type }}</p>
                                    <p><strong>Location:</strong> {{ $job->location }}</p>
                                    <p><strong>Salary:</strong>
                                        @if($job->salary_minimum && $job->salary_maximum)
                                            ₱{{ $job->salary_minimum }} - ₱{{ $job->salary_maximum }}
                                        @else
                                            Negotiable
                                        @endif
                                    </p>
                                    <p><strong>Schedule:</strong> {{ $job->schedule_day }} {{ $job->schedule_time }}</p>
                                    <p><strong>Description:</strong> {{ $job->job_description }}</p>
                                    <p><strong>Workers Needed:</strong> {{ $job->number_of_vacancies }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-edit" data-job-id="{{ $job->id }}">Edit</button>

                                    <form action="{{ route('deleteJob', $job->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                                    </form>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>

                            <!-- Edit Mode -->
                            <div class="modal-body-edit d-none">
                                <form action="{{ route('editJob', $job->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label for="job_name{{ $job->id }}" class="form-label">Job Name</label>
                                        <input type="text" class="form-control" id="job_name{{ $job->id }}" name="job_name" value="{{ $job->job_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="company_name{{ $job->id }}" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="company_name{{ $job->id }}" name="company_name" value="{{ $job->company_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="location{{ $job->id }}" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location{{ $job->id }}" name="location" value="{{ $job->location }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="salary_minimum{{ $job->id }}" class="form-label">Salary Minimum</label>
                                        <input type="number" class="form-control" id="salary_minimum{{ $job->id }}" name="salary_minimum" value="{{ $job->salary_minimum }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="salary_maximum{{ $job->id }}" class="form-label">Salary Maximum</label>
                                        <input type="number" class="form-control" id="salary_maximum{{ $job->id }}" name="salary_maximum" value="{{ $job->salary_maximum }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job_description{{ $job->id }}" class="form-label">Description</label>
                                        <textarea class="form-control" id="job_description{{ $job->id }}" name="job_description">{{ $job->job_description }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Save Changes</button>
                                        <button type="button" class="btn btn-secondary btn-cancel" data-job-id="{{ $job->id }}">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <p class="text-muted">No jobs found.</p>
            @endforelse
        </div>


    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Toggle to edit mode
            document.querySelectorAll('.btn-edit').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation(); // prevent modal from closing
                    const jobId = this.dataset.jobId;
                    const modal = document.getElementById(`jobModal${jobId}`);
                    modal.querySelector('.modal-body-view').classList.add('d-none');
                    modal.querySelector('.modal-body-edit').classList.remove('d-none');
                });
            });

            // Cancel edit mode
            document.querySelectorAll('.btn-cancel').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation(); // prevent modal from closing
                    const jobId = this.dataset.jobId;
                    const modal = document.getElementById(`jobModal${jobId}`);
                    modal.querySelector('.modal-body-edit').classList.add('d-none');
                    modal.querySelector('.modal-body-view').classList.remove('d-none');
                });
            });

            // Reset modal to view mode when opened
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('show.bs.modal', () => {
                    modal.querySelector('.modal-body-edit').classList.add('d-none');
                    modal.querySelector('.modal-body-view').classList.remove('d-none');
                });
            });

        });

    </script>

</body>

</html>
