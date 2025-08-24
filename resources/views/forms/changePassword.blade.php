<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

</head>

<body class="mx-auto justify-center">
    @include('layouts.Navbar')
    <div class=" text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-xl z-10 md:text-4xl  mt-6  md:mt-8 pb-8">
            virification Code
        </h2>
    </div>
    
    <!-- Form Section -->
    <div
        class="flex flex-col-reverse md:flex-row w-full md:w-[900px] md:h-[450px] rounded-lg shadow-md overflow-hidden mx-auto mt-10 md:mt-32">
    
        <!-- Left Side (Image) -->
        <div class=" md:w-1/2 mt-4 md:mt-0 pb-8 md:pb-0 mx-2 md:mx-0 relative bg-cover bg-center bg-no-repeat rounded-md flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); font-family: 'Rosario';">
    
            <!-- لایه سیاه -->
            <div class="md:absolute inset-0 bg-black/55 w-full h-full"></div>
    
            <!-- متن و لوگو -->
            <div class="text-center md:absolute inset-0 pt-10 md:pt-28 relative z-10">
                <img src="{{ asset('images/LOGO.png') }}" alt="logo" class=" w-32 md:w-[200px] h-auto mx-auto">
                <h1
                    class="text-lg md:text-2xl font-bold bg-gradient-to-r from-[#6bbdf0] to-gray-400 text-transparent bg-clip-text mt-4">
                    WELCOME TO AQSA GROUP
                </h1>
                <div class="h-0.5 mx-4 mx:mx-10 bg-gradient-to-r from-blue-700 to-gray-400 mb-2"></div>
                <a href="/" class="font-bold  flex items-center gap-2 text-[#89cdf7] text-md md:text-[20px] justify-center">
                    <div class="hidden md:flex">
                        <svg width="26" height="28" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.7783 4.04594L5.14242 9.99594C3.86742 10.9876 2.83325 13.0984 2.83325 14.6993V25.1968C2.83325 28.4834 5.51075 31.1751 8.79742 31.1751H25.2024C28.4891 31.1751 31.1666 28.4834 31.1666 25.2109V14.8976C31.1666 13.1834 30.0191 10.9876 28.6166 10.0101L19.8616 3.87594C17.8783 2.48761 14.6908 2.55844 12.7783 4.04594Z"
                                stroke="#185277" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 25.5085V21.2585" stroke="#185277" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex md:hidden">
                        <svg width="23" height="25" viewBox="0 0 34 35" fill="#89cdf7" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.7783 4.04594L5.14242 9.99594C3.86742 10.9876 2.83325 13.0984 2.83325 14.6993V25.1968C2.83325 28.4834 5.51075 31.1751 8.79742 31.1751H25.2024C28.4891 31.1751 31.1666 28.4834 31.1666 25.2109V14.8976C31.1666 13.1834 30.0191 10.9876 28.6166 10.0101L19.8616 3.87594C17.8783 2.48761 14.6908 2.55844 12.7783 4.04594Z"
                                stroke="#185277" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 25.5085V21.2585" stroke="#185277" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
    
                    Back To Home Page
                </a>
            </div>
        </div>
    
        <!-- Right Side (Form) -->
        <div class="w-full md:w-1/2 bg-white flex flex-col justify-center px-4 md:px-10">
            <h1 class="font-bold text-2xl text-[#292D32] text-center uppercase">
                Change password
            </h1>
            <span class="text-md mt-4">
                To reset your account password, enter the code we just sent to aqsa@gmail.com
            </span>
            <!-- Full Name -->
            <!-- Email -->
            <div class="mt-2">
                <label class="text-md text-[#292D32]">Enter your email</label>
                <div class="relative">
                    <svg class="absolute left-3 top-3.5" width="21" height="22" fill="none" stroke="#292D32"
                        stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M4 4h16v16H4V4z M4 4l8 8 8-8">
                        </path>
                    </svg>
                    <input type="email"
                        class="pl-10 py-2 mt-1 bg-transparent w-full rounded-md border-2 border-gray-200 focus:border-[#185277] focus:outline-none" />
                </div>
            </div>

            <!-- code -->
            <div class="mt-4 ">
                <label class="text-md text-[#292D32] ">Enter your code</label>
                <input type="text"
                    class=" py-2 mt-1 bg-transparent w-full rounded-md border-2 border-gray-200 focus:border-[#185277] focus:outline-none" />
            </div>

            <!--New Password -->
            <div class="mt-4 relative">
                <label class="text-md text-[#292D32] relative">New Password</label>
                <svg class="absolute left-3 top-8" width="20" height="21" viewBox="0 0 29 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 14.25V8.625C7 4.48125 10.3562 1.125 14.5 1.125C18.6438 1.125 22 4.48125 22 8.625V14.25M14.5 23.625C14.9973 23.625 15.4742 23.4275 15.8258 23.0758C16.1775 22.7242 16.375 22.2473 16.375 21.75C16.375 21.2527 16.1775 20.7758 15.8258 20.4242C15.4742 20.0725 14.9973 19.875 14.5 19.875C14.0027 19.875 13.5258 20.0725 13.1742 20.4242C12.8225 20.7758 12.625 21.2527 12.625 21.75C12.625 22.2473 12.8225 22.7242 13.1742 23.0758C13.5258 23.4275 14.0027 23.625 14.5 23.625ZM14.5 23.625V29.25M4.375 14.25H24.625C26.275 14.25 27.625 15.6 27.625 17.25V30.375C27.625 32.85 25.6 34.875 23.125 34.875H5.875C3.4 34.875 1.375 32.85 1.375 30.375V17.25C1.375 15.6 2.725 14.25 4.375 14.25Z"
                        stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="password"
                    class="pl-10 py-2 bg-transparent w-full rounded-md border-2 border-gray-200 focus:border-[#185277] focus:outline-none" />
            </div>

            <!-- Button -->
            <button class="mt-6 py-2.5 md:text-lg rounded-md bg-gradient-to-r from-[#235F7F] to-[#3FABE5] w-full text-white">
                Continue
            </button>
        </div>
    </div>

    @include('layouts.Footer')
</body>

</html>