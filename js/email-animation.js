function initEmailAnimation() {
  const email = document.getElementById("contact-email");

  if (!email) {
    return;
  }

  function animateEmail() {
    email.style.transition = "opacity 1s";
    email.style.opacity = "1";
  }

  function simulateF1CarDrive() {
    setTimeout(animateEmail, 1500);
  }

  simulateF1CarDrive();
}

document.addEventListener("DOMContentLoaded", initEmailAnimation);

document.body.addEventListener("post-load", initEmailAnimation);

