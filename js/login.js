document.addEventListener("DOMContentLoaded", () => {

  const modal = document.getElementById("auth-modal");
  const loginBtn = document.getElementById("login-button");
  const closeBtn = document.getElementById("close-auth");

  const loginForm = document.getElementById("login-form");
  const signupForm = document.getElementById("signup-form");

  const switchToLogin = document.getElementById("switch-to-login");
  const switchToSignup = document.getElementById("switch-to-signup");

  const title = document.getElementById("auth-title");

 

  loginBtn.addEventListener("click", () => {
    if (localStorage.getItem("isLoggedIn") === "true") {
      
      localStorage.removeItem("isLoggedIn");
      location.reload();
    } else {
      modal.style.display = "flex";
    }
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  

  switchToLogin.addEventListener("click", () => {
    signupForm.classList.remove("active");
    loginForm.classList.add("active");
    title.innerText = "Login";
  });

  switchToSignup.addEventListener("click", () => {
    loginForm.classList.remove("active");
    signupForm.classList.add("active");
    title.innerText = "Create account";
  });


  signupForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const email = document.getElementById("signup-email").value;
    const password = document.getElementById("signup-password").value;

    localStorage.setItem("user", JSON.stringify({ email, password }));

    document.getElementById("signup-msg").innerText =
      "Account created. Please login.";

    signupForm.classList.remove("active");
    loginForm.classList.add("active");
    title.innerText = "Login";
  });



  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;

    const user = JSON.parse(localStorage.getItem("user"));

    if (user && user.email === email && user.password === password) {
      localStorage.setItem("isLoggedIn", "true");
      modal.style.display = "none";
      location.reload();
    } else {
      document.getElementById("login-msg").innerText =
        "Invalid email or password";
    }
  });


  if (localStorage.getItem("isLoggedIn") == "true"){
    loginBtn.innerText = "Logout";
  }

});