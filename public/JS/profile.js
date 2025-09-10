  // Default password for demo
  let demoPassword = "123456";

  // Profile Image Preview
  const profilePic = document.getElementById("profilePic");
  const profilePicHeader = document.getElementById("profilePicHeader");
  const profileImageInput = document.getElementById("profileImage");

  profileImageInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = () => {
        profilePic.src = reader.result;
        profilePicHeader.src = reader.result;
      };
      reader.readAsDataURL(file);
    }
  });

  // Save Profile Changes
  document.getElementById("saveProfile").addEventListener("click", () => {
    const oldPass = document.getElementById("oldPassword").value;
    const newPass = document.getElementById("newPassword").value;
    const confirmPass = document.getElementById("confirmPassword").value;
    const passwordError = document.getElementById("passwordError");

    if (oldPass === demoPassword && newPass === confirmPass && newPass.trim() !== "") {
        demoPassword = newPass;
      passwordError.classList.add("hidden");
      alert("✅ Profile updated successfully!");
      document.getElementById("oldPassword").value = "";
      document.getElementById("newPassword").value = "";
      document.getElementById("confirmPassword").value = "";
    } else {
      passwordError.classList.remove("hidden");
    }
  });

  // Logout Button
  document.getElementById("logoutBtn").addEventListener("click", () => {
    alert("👋 You have been logged out!");
    window.location.reload();
  });