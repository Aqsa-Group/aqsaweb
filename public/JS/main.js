// Button close and open
const menuBtn = document.querySelector("#menu-btn");
const sideMenu = document.querySelector("aside");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

//  Input
    const inputs = document.querySelectorAll('#myinput');

    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.classList.add('focused');
            if (input.value) {
                input.classList.add('filled');
            }
        });

        input.addEventListener('blur', () => {
            if (!input.value) {
                input.classList.remove('filled');
            }
            input.classList.remove('focused');
        });

        input.addEventListener('input', () => {
            if (input.value) {
                input.classList.add('filled');
            } else {
                input.classList.remove('filled');
            }
        });
    });

// DropDownn

const buttons = document.querySelectorAll('#icon');
const contents = document.querySelectorAll('.content');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (contents[index].style.display === 'none' || contents[index].style.display === '') {
                contents[index].style.display = 'block';
            } else {
                contents[index].style.display = 'none'; 
            }
        });
    });

const icon = document.getElementById('icon');

    icon.addEventListener('click', () => {
        icon.classList.toggle('rotated'); 
    });

// Date and Time

    // Controlled abbreviations to guarantee exactly "sep" and "fri" (lowercase)
    const WEEKDAYS = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    const MONTHS   = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

    function two(n) { return String(n).padStart(2,'0'); }

    function updateDateTime() {
      const now = new Date();

      const wd = WEEKDAYS[now.getDay()];        // fri
      const mon = MONTHS[now.getMonth()];       // sep
      const day = now.getDate();                // 5
      const year = now.getFullYear();           // 2025

      const hh = two(now.getHours());
      const mm = two(now.getMinutes());
      const ss = two(now.getSeconds());

      // Format: "fri, sep 5, 2025 | 14:05:09"
      const formatted = `${wd}, ${mon} ${day}, ${year} | ${hh}:${mm}:${ss}`;
      document.getElementById('dateTime').innerText = formatted;
    }

    // initial + every second
    updateDateTime();
    setInterval(updateDateTime, 1000);

    // Chart.js Graph
    const ctx = document.getElementById('myChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Visitors',
          data: [500, 800, 600, 1200, 900, 1400, 1800],
          backgroundColor: 'rgba(35, 95, 127 ,0.2)',
          borderColor: 'rgba(35, 95, 127 ,1)',
          borderWidth: 3,
          
          tension: 0.3,
          fill: true,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: true }
        }
      }
    });

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


        // Preview Main Image
    document.querySelectorAll("#mainImage").addEventListener("change", function(e) {
      const file = e.target.files[0];
      const preview = document.querySelectorAll("#previewMainImage");
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
      }
    });

    // Preview Card Images
    document.querySelectorAll("#cardImage1").addEventListener("change", function(e) {
      const file = e.target.files[0];
      const preview = document.querySelectorAll("#previewCard1");
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
      }
    });

    // Form Submission
    document.querySelector("#pageForm").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("✅ Page content saved successfully!");
    });