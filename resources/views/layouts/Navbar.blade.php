<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width, initial-scale=1.0">
    <title>Navbar</title>
    
    <!-- Font M PLUS Rounded 1c-->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <!-- Font Rosario -->
    <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-white fixed top-0 left-0 right-0 z-50 shadow-md">
        <nav class="container mx-auto flex justify-between items-center p-4">

            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl md:text-4xl " style="font-family: 'Rosario';">AQSA Group</h1>
            </div>
            
            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-10 justify-center text-center">
                <a class="text-xl hover:text-cyan-600 cursor-pointer">Home</a>
                <a class="text-xl hover:text-cyan-600 cursor-pointer">Services</a>
                <a class="text-xl hover:text-cyan-600 cursor-pointer">About Us</a>
                <a class="text-xl hover:text-cyan-600 cursor-pointer">Blog</a>
                <a class="text-xl hover:text-cyan-600 cursor-pointer">Contact Us</a>
            </div>

            <!-- Login and Register Section -->
            <div class="hidden md:flex items-center gap-2 font-bold " >
                <a href="#">
                    <button class="bg-golden px-6 py-1.5  hover:bg-[#235F7F] hover:text-white hover:scale-105 border-1 border-[#235F7F] rounded-full cursor-pointer">Sign Up</button>
                </a>
                <a href="#">
                    <button class="py-1.5   px-7 bg-[#235F7F] text-white hover:bg-white hover:text-black rounded-full border-1 border-transparent hover:border-[#235F7F] cursor-pointer">Log In</button>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            </nav>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white p-4">
                <div class="flex flex-col space-y-4 text-left" style="font-family: 'Shabnam-Bold'; color: black;">
                    <a class="text-xl hover:text-cyan-600 cursor-pointer">Home</a><hr>
                    <a class="text-xl hover:text-cyan-600 cursor-pointer">Serices</a><hr>
                    <a class="text-xl hover:text-cyan-600 cursor-pointer">About Us</a><hr>
                    <a class="text-xl hover:text-cyan-600 cursor-pointer">Blog</a><hr>
                    <a class="text-xl hover:text-cyan-600 cursor-pointer">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>

<script>

    // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

</script>
</body>
</html>