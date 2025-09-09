<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- favicon link -->
    <link rel="shortcut icon" href={{ asset('images/favicon.png') }} type="image/x-icon">
    <!-- CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <!-- Style Css -->
    <link rel="stylesheet" href={{ asset('css/stylecss.css')}}>
    
     <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Chart link  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <!-- LOGIN SECTION -->
    <div id="loginSection" class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8 space-y-6">
        <div class="flex justify-center gap-1">
            <img src={{ asset('images/LOGO.jpg') }} alt="" class="w-[2.5rem] h-[2.5rem] lg:ml-4">
            <h2 class="font-bold text-2xl">AQSA <span class="text-[#235F7F]">Group</span></h2>
        </div>
        <div class="flex flex-col items-center mb-6">
            <div class="bg-yellow-400 w-14 h-14 flex items-center justify-center rounded-full shadow-md">
                <img src={{ asset('images/02.jpg') }} alt="" class="w-full h-full rounded-full"> 
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mt-3">Lego Admin Panel</h1>
            <p class="text-gray-500 text-sm">Please log in to access your dashborad</p>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" placeholder="Enter your email" class="w-full mt-1 p-3 border rounded-xl focus:border-[#3084b1] outline-none">
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" placeholder="Enter your password" class="w-full mt-1 p-3 border rounded-xl focus:border-[#3084b1] outline-none">
        </div>
        

        <button id="loginBtn" class="w-full px-6 py-2 bg-[#235F7F] text-white rounded-lg hover:bg-[#3084b1] transition ">
            Login
        </button>
        
        <p id="loginError" class="text-red-500 text-center hidden">Invalid email or password!</p>
  
        <!-- Footer -->
        <p class="text-center text-sm text-gray-500 mt-6">
            &copy; 2025 Lego Admin Panel. All rights reserved.
        </p>
    </div>

    <!-- DASHBOARD SECTION -->
    <div id="dashboardSection" class="hidden w-full h-screen flex">

        <!-- Sidebar -->
        <aside class="lg:w-72 sm:w-24 w-72 h-[100%] overflow-hidden sm:relative fixed hidden sm:flex bg-white flex-col shadow-xl z-30">
            <div class="flex justify-between items-center px-6 py-4 text-2xl font-bold tracking-wide border-b border-gray-100">
            <!-- --------------Logo-------------- -->
                <div class="flex gap-1 sm:ml-0 ml-3">
                    <img src={{ asset('images/LOGO.jpg') }} alt="" class="w-[2.5rem] h-[2.5rem] lg:ml-4">
                    <h2 class="font-bold text-2xl lg:flex sm:hidden">AQSA <span class="text-[#235F7F]">Group</span></h2>
                </div>
                <div class="close sm:hidden cursor-pointer" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <nav class="flex flex-col relative space-y-3 top-12">
                <a href="#" class="flex active text-[#235F7F] bg-[#235F7F]/10 ml-0 duration-300 transition-all ease-in gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl lg:ml-3 ml-2">grid_view</span>
                    <h3 class="font-medium lg:flex sm:hidden">Dashboard</h3>
                </a>
                <!--  Dropdown section */} -->
                <div class='cursor-pointer relative'>
                    <a href='#'
                    class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]"
                    >
                        <div class="flex gap-2 items-center">
                            <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">file_copy</span>
                            <h3 class="font-medium lg:flex sm:hidden">Pages</h3>    
                        </div>
                        <span class="lg:w-40 sm:w-8 w-40 text-right">
                            <ion-icon id="icon" class='transition duration-300' name="chevron-down-outline"></ion-icon>
                        </span>
                    </a>
                                
                    <!--  Dropdown link section  -->
                    <div class='content lg:ml-5 sm:ml-4 ml-5 w-full mt-0 p-2 hidden text-gray-700'>
                        <ul>
                            <li>
                                <a href={{ url('/pageHome') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                    <span class="material-icons-sharp">home</span>
                                </p> <p class="lg:flex flex sm:hidden">Home</p></a>
                            </li>
                            <li>
                                <a href={{ url('/pageAboutUs') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                    <span class="material-icons-sharp">info</span>
                                </p> <p class="lg:flex flex sm:hidden">About Us</p></a>
                            </li>
                            <li>
                                <a href={{ url('/pageServies') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                <span class="material-icons-sharp">cloud_download</span> 
                                </p> <p class="lg:flex flex sm:hidden">Services</p></a>
                            </li>
                            <li>
                                <a href={{ url('/pageProject') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                <span class="material-icons-sharp">present_to_all</span> 
                                </p> <p class="lg:flex flex sm:hidden">Project</p></a>
                            </li>
                            <li>
                                <a href={{ url('/pageBlog') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                <span class="material-icons-sharp">chat</span> 
                                </p> <p class="lg:flex flex sm:hidden">Blog</p></a>
                            </li>
                            <li>
                                <a href={{ url('/pageContactUs') }}
                                class='inline-block hover:ml-3 mb-1 hover:text-[#235F7F] duration-300 transition-all ease-in w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                ><p class="lg:hidden sm:flex hidden">
                                <span class="material-icons-sharp">contact_mail</span> 
                                </p> <p class="lg:flex flex sm:hidden">Contact Us</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href={{ url('/user&roles') }}  class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">person</span>
                    <h3 class="font-medium lg:flex sm:hidden">User & Roles</h3>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->
            <header class="bg-white shadow-md flex justify-between items-center px-6 py-4">
                <button id="menu-btn" class="sm:hidden flex bg-transparent cursor-pointer text-black left-4">
                    <span class="material-icons-sharp  text-4xl">menu</span>
                </button>
                <h1 class="sm:flex hidden text-xl font-bold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <!-- Language Icon -->
                    <!--  Dropdown section */} -->
                    <div class='group relative cursor-pointer'>
                        <a href='#'
                        class='flex items-center gap-[2px] border border-gray-200 rounded-xl px-2 py-2'
                        >
                        <ion-icon name="globe-outline" class=" text-2xl"></ion-icon>
                            <span>
                                <ion-icon class='transition duration-300 group-hover:rotate-180' name="chevron-down-outline"></ion-icon>
                            </span>
                        </a>
                        <!--  Dropdown link section  -->
                        <div class='absolute top-8 z-[10] hidden group-hover:block text-center text-black bg-white p-2 shadow-md w-[60px]'>
                            <ul>
                                <li>
                                    <a href="#"
                                    class='inline-block w-full rounded-md p-2 hover:bg-gray-300/20'
                                    >En</a>
                                </li>
                                <li>
                                    <a href="#"
                                    class='inline-block w-full rounded-md p-2 hover:bg-gray-300/20'
                                    >Fa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Notifications -->
                    <div class="relative border border-gray-200 rounded-xl cursor-pointer px-2 py-1">
                        <ion-icon name="notifications-outline" class="text-2xl"></ion-icon>
                        <span class="absolute top-1 right-2 text-white bg-red-600 p-1 rounded-full"></span>
                    </div>
                    <!-- Profile -->
                    <div class="sm:flex flex-col hidden">
                        <p class="text-sm">Hey, <b>Danial</b></p>
                        <small class="text-gray-500 text-sm">Admin</small>
                    </div>
                    <div class="">
                        <img src={{ asset('images/02.jpg') }} alt="" class="w-[40px] h-[40px] rounded-full"> 
                    </div>
                </div>
            </header>

            <!-- Dashboard Body -->
            <main class="px-6 space-y-6 overflow-y-auto pb-7">

            <h1 class="flex mt-8 sm:hidden text-2xl font-bold text-gray-800">Dashboard</h1>
            <!-- Date & Time -->
            <div class="bg-white text-center p-2 rounded-xl shadow w-60">
                <div id="dateTime">Loading...</div>
            </div>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="first bg-white p-6 rounded-xl shadow hover:scale-105 transition transform">
                    <span class="material-icons-sharp px-3 rounded-full text-white text-2xl bg-[#235F7F]">analytics</span>
                    <div class="middle flex items-center justify-between">
                        <div class="left">
                            <h3 class="mt-2 text-[12px]">Today Visied</h3>
                            <h1 class="font-bold text-lg">1,024 <span class="material-icons-sharp text-[13px] text-gray-700">visibility</span></h1>
                        </div>
                        <div class="progress relative w-[60px] h-[60px] rounded-full">
                            <svg class="w-[6rem] h-[6rem]">
                                <circle class="fill-none stroke-[#235F7F] stroke-[10] round translate-5" cx='30' cy='30' r='28'></circle>
                            </svg>
                            <div class="number absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="mt-4 text-gray-400">Last 24 Hours</small>
                </div>
                <div class="second bg-white p-6 rounded-xl shadow hover:scale-105 transition transform">
                    <span class="material-icons-sharp px-1 rounded-full text-white text-2xl bg-[#235F7F]">bar_chart</span>
                    <div class="middle flex items-center justify-between">
                        <div class="left">
                            <h3 class="mt-2 text-[12px]">Totle Visied</h3>
                            <h1 class="font-bold text-lg">10,024 <span class="material-icons-sharp text-[13px] text-gray-700">visibility</span></h1>
                        </div>
                        <div class="progress relative w-[60px] h-[60px] rounded-full">
                            <svg class="w-[6rem] h-[6rem]">
                                <circle class="fill-none stroke-[#235F7F] stroke-[10] round translate-5" cx='30' cy='30' r='28'></circle>
                            </svg>
                            <div class="number absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">
                                <p>61%</p>
                            </div>
                        </div>  
                    </div>
                    <small class="mt-4 text-gray-400">Last this week</small>           
                </div>
                <div class="third bg-white p-6 rounded-xl shadow hover:scale-105 transition transform">
                    <span class="material-icons-sharp px-3 rounded-full text-white text-2xl bg-[#235F7F]">stacked_line_chart</span>
                    <div class="middle flex items-center justify-between">
                        <div class="left">
                            <h3 class="mt-2 text-[12px]">Totle User</h3>
                            <h1 class="font-bold text-lg">2,024 <span class="material-icons-sharp text-[13px] text-gray-700">person</span></h1>
                        </div>
                        <div class="progress relative w-[60px] h-[60px] rounded-full">
                            <svg class="w-[6rem] h-[6rem]">
                                <circle class="fill-none stroke-[#235F7F] stroke-[10] round translate-5" cx='30' cy='30' r='28'></circle>
                            </svg>
                            <div class="number absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="mt-4 text-gray-400">Last this month</small>
                </div>
                <div class="forth bg-white p-6 rounded-xl shadow hover:scale-105 transition transform">
                    <span class="material-icons-sharp px-3 rounded-full text-white text-2xl bg-[#235F7F]">trending_up</span>
                    <div class="middle flex items-center justify-between">
                        <div class="left">
                            <h3 class="mt-2 text-[12px]">Totle Project</h3>
                            <h1 class="font-bold text-lg">124 <span class="material-icons-sharp text-[13px] text-gray-700">map</span></h1>
                        </div>
                        <div class="progress relative w-[60px] h-[60px] rounded-full">
                            <svg class="w-[6rem] h-[6rem]">
                                <circle class="fill-none stroke-[#235F7F] stroke-[10] round translate-5" cx='30' cy='30' r='28'></circle>
                            </svg>
                            <div class="number absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">
                                <p>70%</p>
                            </div>
                        </div>
                    </div>
                    <small class="mt-4 text-gray-400">Last this week</small>
                </div>
            </div>

            <!-- Graph Section -->
            <div class="bg-white p-6 rounded-xl shadow w-[100%] my-10">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Monthly Performance</h3>
                <canvas id="myChart" height="96"></canvas>
            </div>
            </main>
        </div>

    </div>

    <!-- Icon -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Java link -->
    <script src="{{ asset('JS/main.js')}}"></script>
</body>
</html>