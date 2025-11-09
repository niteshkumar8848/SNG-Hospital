document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("appointmentForm");
  const bookBtn = document.getElementById("bookBtn");

  // Scroll to form on "Book Appointment" click
  if (bookBtn) {
    bookBtn.addEventListener("click", function () {
      document.querySelector(".form-card").scrollIntoView({ behavior: "smooth" });
    });
  }

  // Handle form submission
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const name = form.querySelector('input[name="name"]').value.trim();
      const phone = form.querySelector('input[name="phone"]').value.trim();
      const department = form.querySelector('select[name="department"]').value;

      if (!name || !phone || !department) {
        alert("⚠️ Please fill in all fields.");
        return;
      }

      fetch("../php-api/appointment.php", {


        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `name=${encodeURIComponent(name)}&phone=${encodeURIComponent(phone)}&department=${encodeURIComponent(department)}`
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.success) {
            alert("✅ Appointment booked successfully!");
            form.reset();
          } else {
            alert("❌ Something went wrong: " + (data.message || "Please try again."));
          }
        })
        .catch((err) => {
          console.error(err);
          alert("⚠️ Could not connect to the server.");
        });
    });
  }
});
