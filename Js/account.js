const showIcons = document.querySelectorAll(".showPss");
const inputPassword = document.querySelectorAll("[type='password']");

// Add Event On Show Password Icon
showIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    // loop on show Icon 
    showIcons.forEach((icon) => {
      // Chick 
      if (icon.previousElementSibling.type === "password") {
        icon.previousElementSibling.type = "text";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        icon.previousElementSibling.type = "password";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      }
    });
  });
});
