   // Login
    const loginSection = document.querySelector("#loginSection");
    const dashboardSection = document.querySelector("#dashboardSection");
    const loginBtn = document.querySelector("#loginBtn");
    const logoutBtn = document.querySelector("#logoutBtn");
    const loginError = document.querySelector("#loginError");

    const demoEmail = "admin@lego.com";
    const demoPassword = "123456";

    // همیشه صفحه لاگین را اول نشان بده
    loginSection.classList.remove("hidden");
    dashboardSection.classList.add("hidden");

    // Login Handler
    loginBtn.addEventListener("click", () => {
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;

    if (email === demoEmail && password === demoPassword) {
        loginSection.classList.add("hidden");
        dashboardSection.classList.remove("hidden");
        loginError.classList.add("hidden");
      } else {
        loginError.classList.remove("hidden");
      }
    });

    // Logout Handler
    logoutBtn.addEventListener("click", () => {
        dashboardSection.classList.add("hidden");
        loginSection.classList.remove("hidden");
    });