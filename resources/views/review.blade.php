<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applicant Review and Rating</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- ✅ FIXED CSS LINK -->
    <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
</head>

<body>

    <!-- SIDEBAR -->
    <!-- SIDEBAR -->
    <<!-- SIDEBAR -->
        <aside class="sidebar">

            <div class="logo-section">
                <img src="{{ asset('assets/images/Department_of_Labor_and_Employment_(DOLE).svg') }}"
                    class="dashboard-logo">
                <h2 class="portal-title">JOB PORTAL</h2>
                <h4>ADMIN DASHBOARD</h4>
            </div>

            <nav class="sidebar-menu">

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

                <a href="{{ url('/notification') }}" class="nav-link">
                    <i class="fas fa-bell"></i>
                    <span>Notification</span>
                </a>

                <a href="{{ url('/review') }}" class="nav-link active">
                    <i class="fas fa-star"></i>
                    <span>Review & Ratings</span>
                </a>

            </nav>

        </aside>



        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container">

                <!-- Applicant Information -->
                <section class="applicant-info">
                    <div class="applicant-photo">
                        <!-- ✅ FIXED IMAGE LINK -->
                        <img src="{{ asset('assets/images/494356517_720172503782781_666955056287399904_n.jpg') }}"
                            alt="Applicant Photo">
                    </div>

                    <div><label>Name</label>
                        <div class="info">Hearth Dumadapat</div>
                    </div>
                    <div><label>Campus</label>
                        <div class="info">SNSU Main Campus</div>
                    </div>

                    <div><label>Phone</label>
                        <div class="info">09123456789</div>
                    </div>
                    <div><label>Email</label>
                        <div class="info">hearth@gmail.com</div>
                    </div>

                    <div><label>Date of Birth</label>
                        <div class="info">JULY 07 2004</div>
                    </div>
                    <div><label>Gender</label>
                        <div class="info">Female</div>
                    </div>
                </section>

                <!-- Reviews -->
                <section class="review-section">
                    <h3>Applicant Reviews & Ratings</h3>

                    <!-- Star Rating -->
                    <div class="stars" id="starRating">
                        <span class="star gray" data-value="1">&#9733;</span>
                        <span class="star gray" data-value="2">&#9733;</span>
                        <span class="star gray" data-value="3">&#9733;</span>
                        <span class="star gray" data-value="4">&#9733;</span>
                        <span class="star gray" data-value="5">&#9733;</span>
                    </div>

                    <textarea id="reviewText" placeholder="Write your review here..."></textarea>
                    <button class="btn-submit-review" onclick="submitReview()">Submit Review</button>

                    <!-- Reviews List -->
                    <div class="reviews-list" id="reviewsList">
                        <div class="review-item">
                            <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                            <div class="review-text">Great candidate, punctual and skilled in required areas.</div>
                        </div>

                        <div class="review-item">
                            <div class="review-stars">&#9733;&#9733;&#9733;&#9734;&#9734;</div>
                            <div class="review-text">Good communication, but needs improvement in software knowledge.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script>
            const stars = document.querySelectorAll("#starRating .star");
            let currentRating = 0;

            stars.forEach(star => {
                star.addEventListener("mouseover", () => highlightStars(+star.dataset.value));
                star.addEventListener("mouseout", () => highlightStars(currentRating));
                star.addEventListener("click", () => {
                    currentRating = +star.dataset.value;
                    highlightStars(currentRating);
                });
            });

            function highlightStars(rating) {
                stars.forEach(star => {
                    star.classList.toggle("gray", +star.dataset.value > rating);
                });
            }

            function submitReview() {
                const reviewText = document.getElementById("reviewText").value.trim();
                if (!currentRating) return alert("Please select a rating.");
                if (!reviewText) return alert("Please write a review.");

                const reviewsList = document.getElementById("reviewsList");
                const reviewItem = document.createElement("div");
                reviewItem.classList.add("review-item");

                let starsString = "";
                for (let i = 1; i <= 5; i++) {
                    starsString += i <= currentRating ? "&#9733;" : "&#9734;";
                }

                reviewItem.innerHTML =
                    `<div class="review-stars">${starsString}</div>
       <div class="review-text">${reviewText}</div>`;

                reviewsList.prepend(reviewItem);
                currentRating = 0;
                highlightStars(0);
                document.getElementById("reviewText").value = "";
            }
        </script>

</body>

</html>
