document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link");
  const pages = document.querySelectorAll(".page");

  navLinks.forEach(link => {
    link.addEventListener("click", function () {

      // Remove active class from all buttons
      navLinks.forEach(btn => btn.classList.remove("active"));
      this.classList.add("active");

      // Hide all pages
      pages.forEach(page => page.classList.remove("active"));

      // Show selected page
      const pageId = this.getAttribute("data-page");
      const targetPage = document.getElementById(pageId);

      if (targetPage) {
        targetPage.classList.add("active");
      }
    });
  });
});
