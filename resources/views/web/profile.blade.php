<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
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

<!-- DASHBOARD SECTION -->
<div id="dashboardSection" class="w-full h-screen flex">
  
    <!-- Sidebar -->
    <aside class="lg:w-72 sm:w-24 w-72 h-[100%] overflow-hidden sm:relative fixed hidden sm:flex bg-white flex-col shadow-xl z-30">
        <div class="flex justify-between items-center px-6 py-4 text-2xl font-bold tracking-wide border-b border-gray-100">
            <!-- --------------Logo-------------- -->
            <div class="flex gap-1 sm:ml-0 ml-3">
                <img src={{ asset('images/favicon.png') }} alt="" class="w-[50px] h-[35px] lg:ml-4">
                <h2 class="font-bold text-2xl lg:flex sm:hidden">AQSA <span class="text-[#235F7F]">Group</span></h2>
            </div>
            <div class="close sm:hidden cursor-pointer" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
        </div>
        <nav class="flex flex-col relative space-y-3 top-12">
            <a href={{ url('/dashboard') }} class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">grid_view</span>
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
            <h1 class="sm:flex hidden text-xl font-bold text-gray-800">Profile</h1>
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
                <a href="#" class="">
                    <img src={{ asset('images/02.jpg') }} id="profilePicHeader" alt="Profile" class="w-10 h-10 rounded-full border-2 border-gray-300 cursor-pointer">
                </a>
            </div>
        </header>

        <!-- Dashboard Body -->
        <main class="px-6 space-y-6 overflow-y-auto pb-7">

            <h1 class="flex mt-8 sm:hidden text-2xl font-bold text-gray-800">Profile</h1>
            <!-- Date & Time -->
            <div class="bg-white text-center p-2 rounded-xl shadow w-60">
                <div id="dateTime">Loading...</div>
            </div>

            <!-- PROFILE SECTION -->
            <section id="profileContent" class="bg-white p-6 rounded-xl shadow space-y-6">
                <h2 class="text-xl font-bold text-gray-800">Profile Settings</h2>
                <!-- Profile Picture -->
                <div class="flex items-center space-x-6">
                    <img id="profilePic" src={{ asset('images/02.jpg') }} alt="Profile" class="w-24 h-24 rounded-full border-4 border-gray-300 object-cover">
                    <div>
                        <label for="profileImage" class=" bg-[#235F7F] shadow-2xl hover:shadow-none text-white rounded-lg px-4 py-2 cursor-pointer">Change Picture</label>
                        <input type="file" id="profileImage" accept="image/*" class="hidden">
                    </div>
                </div>

                <!-- Personal Info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Full Name</label>
                        <input id="fullName" type="text" class="w-full mt-1 px-4 py-2 border rounded-lg outline-none focus:border-[#3084b1]" value="Hey Danial">
                    </div>
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input id="profileEmail" type="email" class="w-full mt-1 px-4 py-2 border rounded-lg outline-none focus:border-[#3084b1]" value="admin@lego.com">
                    </div>
                </div>

                <!-- Password Change -->
                <div class="space-y-3">
                    <label class="block text-gray-700 text-lg">Change Password</label>
                    <input id="oldPassword" type="password" placeholder="Current Password" class="w-full px-4 py-2 border rounded-lg outline-none focus:border-[#3084b1]">
                    <input id="newPassword" type="password" placeholder="New Password" class="w-full px-4 py-2 border rounded-lg outline-none focus:border-[#3084b1]">
                    <input id="confirmPassword" type="password" placeholder="Confirm New Password" class="w-full px-4 py-2 border rounded-lg outline-none focus:border-[#3084b1]">
                    <p id="passwordError" class="text-red-500 text-sm hidden">Passwords do not match or old password is incorrect!</p>
                </div>

                <!-- Button -->
                <div class="flex flex-col space-y-3">
                    <button id="saveProfile" class="w-full sm:w-[200px] h-[50px] bg-[#235F7F] shadow-2xl hover:shadow-none text-white rounded-lg">Save Changes</button>
                    <button id="logoutBtn" class="w-full sm:w-[200px] h-[50px] bg-white shadow-2xl hover:shadow-none text-[#235F7F] border border-[#235F7F] rounded-lg">Logout</button>
                </div>
            </section>
        </main>
    </div>
</div>



    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Java link -->
    <script src="{{ asset('JS/main.js')}}"></script>
    <script src="{{ asset('JS/profile.js')}}"></script>

</body>
</html>