    // Preview Main Image
    document.querySelectorAll("mainImage").addEventListener("change", function(e) {
      const file = e.target.files[0];
      const preview = document.querySelectorAll("previewMainImage");
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
      }
    });

    // Preview Card Images
    document.querySelectorAll("cardImage1").addEventListener("change", function(e) {
      const file = e.target.files[0];
      const preview = document.querySelectorAll("previewCard1");
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
      }
    });

    document.querySelectorAll("cardImage2").addEventListener("change", function(e) {
      const file = e.target.files[0];
      const preview = document.querySelectorAll("previewCard2");
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove("hidden");
      }
    });

    // Form Submission
    document.querySelectorAll("pageForm").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("✅ Page content saved successfully!");
    });