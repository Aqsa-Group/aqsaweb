const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
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