<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

</head>

<body class="mx-auto justify-center">
    @include('layouts.Navbar')
    <div class="flex flex-row  w-[900px] h-[450px] rounded-lg shadow overflow-hidden mx-auto mt-32">

        <!-- Left Side -->
        <div class="w-1/2  relative  bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('images/bannerBg.jpg') }}');font-family: 'Rosario';">
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="text-center absolute inset-0 pt-28">
                <img src="{{ asset('images/LOGO.png') }}" alt="logo" class="w-[200px] h-auto mx-auto">
                <h1
                    class="text-2xl font-bold bg-gradient-to-r from-[#6bbdf0] to-gray-400 text-transparent bg-clip-text mt-4">
                    WELCOME TO AQSA GROUP
                </h1>
                <div class="h-0.5  mx-10 bg-gradient-to-r from-blue-700 to-gray-400 mb-2 "></div>
                <a href="/" class="font-bold flex items-center gap-2 text-[#6bbdf0] text-[20px] justify-center">
                    <svg width="26" height="28" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.7783 4.04594L5.14242 9.99594C3.86742 10.9876 2.83325 13.0984 2.83325 14.6993V25.1968C2.83325 28.4834 5.51075 31.1751 8.79742 31.1751H25.2024C28.4891 31.1751 31.1666 28.4834 31.1666 25.2109V14.8976C31.1666 13.1834 30.0191 10.9876 28.6166 10.0101L19.8616 3.87594C17.8783 2.48761 14.6908 2.55844 12.7783 4.04594Z"
                            stroke="#185277" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 25.5085V21.2585" stroke="#185277" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back To Home Page
                </a>
            </div>
        </div>

        <!-- Right Side (Form) -->
        <div class="w-1/2 bg-white flex flex-col justify-center px-10">
            <h1 class="font-bold text-2xl mb-4 text-[#292D32] text-center uppercase">
                Forget password
            </h1>
            <!-- Email -->
            <div class="mt-4">
                <label class="text-md text-[#292D32]">Enter your email</label>
                <div class="relative">
                    <svg class="absolute left-3 top-3" width="22" height="23" fill="none" stroke="#292D32" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M4 4h16v16H4V4z M4 4l8 8 8-8">
                        </path>
                    </svg>
                    <input type="email"
                        class="pl-10 py-2   mt-1 bg-transparent w-full rounded-md border-2 border-gray-200 focus:border-[#185277] focus:outline-none" />
                </div>
            </div>
            <!-- Button -->
            <button class="mt-4 py-2 md:text-lg  rounded-md bg-gradient-to-r from-[#235F7F] to-[#3FABE5] w-full text-white">
                Continue
            </button>
        </div>
    </div>

    @include('layouts.Footer')
</body>

</html>