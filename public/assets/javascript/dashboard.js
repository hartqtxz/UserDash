document.querySelector("input[placeholder='Search Job']").addEventListener("keyup", function() {
  let filter = this.value.toLowerCase();
  document.querySelectorAll(".card-job").forEach(card => {
    let title = card.querySelector("h6").textContent.toLowerCase();
    card.style.display = title.includes(filter) ? "block" : "none";
  });
});
