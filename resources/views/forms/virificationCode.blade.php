<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virification Code</title>

</head>

<body class="mx-auto justify-center">
    @include('layouts.Navbar')
    <div class="md:hidden text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-xl z-10 md:text-4xl  mt-6  md:mt-8 pb-8">
            virification Code
        </h2>
    </div>

    <!-- Form Section -->
    <div class="flex flex-col-reverse md:flex-row w-full md:w-[900px] md:h-[450px] rounded-lg shadow-md overflow-hidden mx-auto mt-10 md:mt-32">

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
                            <path d="M17 25.5085V21.2585" stroke="#185277" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
            <h1 class="font-bold text-2xl mb-4 text-[#292D32] text-center uppercase">
                Verification Code
            </h1>
            <span class="text-sm mt-2">
                Please enter the code that we sent to your email.
            </span>
            <div class="mt-2">
                <label class="text-md text-[#292D32]">Enter your code</label>
                <input type="text"
                    class="pl-2 py-2 mt-1 bg-transparent w-full rounded-md border border-gray-500 focus:border-[#185277] focus:outline-none" />
            </div>
            <!-- Button -->
            <button
                class="mt-4 py-2.5 rounded-md bg-gradient-to-r from-[#235F7F] to-[#3FABE5] w-full text-white">
                Continue
            </button>
        </div>
    </div>


    @include('layouts.Footer')
</body>

</html>