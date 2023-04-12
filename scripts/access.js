const loginForm = document.getElementById("login-form");
const registerForm = document.getElementById("register-form");
const formTitle = document.getElementById("form-title");
const registerLink = document.getElementById("register-link");
const loginLink = document.getElementById("login-link");

function toggleForm(e) {
  e.preventDefault();
  if (loginForm.style.display === "none") {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
    formTitle.innerText = "Login Form";
    registerLink.innerText = "Register here";
  } else {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
    formTitle.innerText = "Registration Form";
    loginLink.innerText = "Login here";
  }
}

registerLink.addEventListener("click", toggleForm);
loginLink.addEventListener("click", toggleForm);