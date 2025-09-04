<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <!-- favicon link -->
    <link rel="shortcut icon" href={{ asset('images/favicon.png') }} type="image/x-icon">
    <!-- CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <!-- Style Css -->
    <link rel="stylesheet" href={{ asset('css/stylecss.css')}}>
    
     <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="grid lg:w-[96%] sm:w-[94%] w-[100%] mx-auto gap-1 grid-cols bg-gray-50">
        
        <!-- --------------Sidebar-------------- -->
        <aside class="h-[100vh] sm:relative fixed hidden sm:flex flex-col sm:w-[100%] w-[18rem] z-30 sm:p-0 p-6 shadow-xl bg-white">
            <div class="flex items-center justify-between mt-4">
                <!-- --------------Logo-------------- -->
                <div class="logo flex gap-1 sm:ml-0 ml-3">
                    <img src={{ asset('images/LOGO.jpg') }} alt="" class="w-[2.5rem] h-[2.5rem] ml-4 ">
                    <h2 class="font-bold text-2xl lg:flex sm:hidden">AQSA <span class="text-[#235F7F]">Group</span></h2>
                </div>
                <div class="close sm:hidden cursor-pointer" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="flex flex-col h-[83vh] relative top-12">
                <a href={{ url('/dashborad') }} class="flex duration-300 hover:text-[#235F7F] group text-gray-700 transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp group-hover:ml-3 transition-all duration-300 ease-out">grid_view</span>
                    <h3 class="font-medium lg:flex sm:hidden">Dashboard</h3>
                </a>
                <a href={{ url('/contactManagement') }} class="flex duration-300 hover:text-[#235F7F] group text-gray-700 transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp group-hover:ml-3 transition-all duration-300 ease-out">person_outline</span>
                    <h3 class="font-medium lg:flex sm:hidden">Contact Management</h3>
                </a>
                <a href="#" class="flex active text-[#235F7F] bg-[#235F7F]/10 ml-0 duration-300 transition-all ease-in gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl lg:ml-3 ml-2">add</span>
                    <h3 class="font-medium lg:flex sm:hidden">Add Post</h3>
                </a>
                    <!--  Dropdown section */} -->
                    <div class='group relative cursor-pointer'>
                        <a href='#'
                        class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]"
                        >
                        <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">file_copy</span>
                        <h3 class="font-medium lg:flex sm:hidden">Pages</h3>
                        </a>
                        <!--  Dropdown link section  -->
                        <div class='absolute top-12 left-8 z-[10] hidden group-hover:block text-black bg-gray-50 p-2 shadow-md w-[150px]'>
                            <ul>
                                <li>
                                    <a href={{ url('/pageHome') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >Home</a>
                                </li>
                                <li>
                                    <a href={{ url('/pageAboutUs') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >About Us</a>
                                </li>
                                <li>
                                    <a href={{ url('/pageServies') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >Services</a>
                                </li>
                                <li>
                                    <a href={{ url('/pageProject') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >Project</a>
                                </li>
                                <li>
                                    <a href={{ url('/pageBlog') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >Blog</a>
                                </li>
                                <li>
                                    <a href={{ url('/pageContactUs') }}
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:bg-[#235F7F]/20'
                                    >Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <a href={{ url('/user&roles') }} class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">person</span>
                    <h3 class="font-medium lg:flex sm:hidden">User & Roles</h3>
                </a>
                <a href="#" class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">settings</span>
                    <h3 class="font-medium lg:flex sm:hidden">Settings</h3>
                </a>
                <a href={{ url('/') }} class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem] absolute bottom-4">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">logout</span>
                    <h3 class="font-medium lg:flex sm:hidden">Logout</h3>
                </a>
            </div>
        </aside>


         <main>
            <!-- ---------------Header--------------- -->
            <div class="flex sm:justify-end justify-between gap-8 sm:relative fixed top-0 left-0 items-center px-2 bg-white w-[100%] h-[4.6rem] m-0 z-20 shadow-xl">
                <button id="menu-btn" class="sm:hidden flex bg-transparent cursor-pointer text-black left-4">
                    <span class="material-icons-sharp  text-4xl">menu</span>
                </button>
                <div class="flex justify-end items-center gap-4 text-right">
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
                    <div class="relative border border-gray-200 rounded-xl cursor-pointer px-2 py-1">
                        <ion-icon name="notifications-outline" class="text-2xl"></ion-icon>
                        <span class="absolute top-1 right-2 text-white bg-red-600 p-1 rounded-full
                        "></span>
                    </div>
                    <!-- ---------------Profile--------------- -->
                    <div class="sm:flex flex-col hidden">
                        <p class="text-sm">Hey, <b>Danial</b></p>
                        <small class="text-gray-500 text-sm">Admin</small>
                    </div>
                    <div class="">
                        <img src={{ asset('images/02.jpg') }} alt="" class="w-[40px] h-[40px] rounded-full"> 
                    </div>
                </div>
            </div>

            <div class="px-8">
                <!-- ---------------title--------------- -->
                <div class="sm:mt-4 mt-24">
                    <h1 class="font-bold text-2xl">Add Your Post</h1>
                </div>
                <div class="date inline-block bg-gray-200 rounded-lg mt-3 px-4 py-2">
                    <input type="date" class="bg-transparent text-black">
                </div>

                <div class="grid md:grid-cols-2 grid-cols-1">

                    <!-- ---------------From--------------- -->
                    <div class="px-4">
                        <form action="#">
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text" require>
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Full Name</label>
                                <span class="material-icons-sharp transition-all absolute top-[50%] right-0 -translate-y-[50%] text-2xl">person</span>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="email" require>
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="email">Enter Email</label>
                                <span class="material-icons-sharp transition-all absolute top-[50%] right-0 -translate-y-[50%] text-2xl">mail_outline</span>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input 
                                id="myinput" 
                                class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" 
                                type="password" require>
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="password">Enter Password</label>
                                <span class="material-icons-sharp transition-all absolute top-[50%] right-0 -translate-y-[50%] text-2xl">lock</span>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <textarea id="myinput" name="message" class="w-[100%] h-[90%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" id=""></textarea>
                                <label class="absolute transition-all top-[35%] left-0 -translate-y-[65%] pointer-events-none" for="text">Enter message</label>
                                <span class="material-icons-sharp transition-all absolute top-[40%] right-0 -translate-y-[60%] text-2xl">chat</span>
                            </div>
                            <button class="input-btn relative w-[100%] h-[45px] border-2 border-[#235F7F] outline-none rounded-3xl cursor-pointer text-lg font-semibold flex items-center justify-center overflow-hidden">
                                <span class="z-10">Submit</span>
                                <span class="material-icons-sharp text-lg mx-2 z-10">send</span>
                            </button>
                        </form>
                        <p class="text-center my-6">Don't have Account? <a href="#" class="text-[#235F7F]">Sign Up</a></p>
                    </div>

                    <!-- ---------------Contact--------------- -->
                    <div class="mx-auto md:-mt-8">
                        <!-- address -->
                        <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-[#235F7F]/10">
                            <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-[#235F7F] bg-opacity-5 text-[#235F7F] sm:h-[70px] sm:max-w-[70px]">
                                <ion-icon name="location-outline" class="text-3xl"></ion-icon>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 text-xl font-bold text-slate-700">Our Location</h4>
                                <p class="text-base text-slate-400
                                ">Imam Muslim 22, 64 Meter Street, House #23</p>
                            </div>
                        </div>
                        <!-- phone -->
                        <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-[#235F7F]/10">
                            <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-[#235F7F] bg-opacity-5 text-[#235F7F] sm:h-[70px] sm:max-w-[70px]">
                                <ion-icon name="call-outline" class="text-3xl"></ion-icon>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 text-xl font-bold text-slate-700">Phone Numbers</h4>
                                <p class="text-base text-slate-400
                                ">(+93)0797050890</p>
                                <p class="text-base text-slate-400
                                ">(+93)0797050890</p>
                            </div>
                        </div>
                        <!-- mail -->
                        <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-[#235F7F]/10">
                            <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-[#235F7F] bg-opacity-5 text-[#235F7F] sm:h-[70px] sm:max-w-[70px]">
                                <ion-icon name="mail-outline" class="text-3xl"></ion-icon>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 text-xl font-bold text-slate-700">Email Address</h4>
                                <p class="text-base text-slate-400
                                "> Info@aqsagroup.af</p>
                            </div>
                        </div>
                        <!-- --------------Link Media-------------- -->
                        <div class="flex items-center justify-center w-[100%] h-[3.7rem]">
                            <a href="#" class="text-[#235F7F] text-2xl py-1 mx-8 hover:text-xl">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#" class="text-[#235F7F] text-2xl py-1 mx-8 hover:text-xl">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#" class="text-[#235F7F] text-2xl py-1 mx-8 hover:text-xl">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>    
            </div>
            
         </main>
    </div>

    <!-- Icon -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Java link -->
    <script src="{{ asset('JS/main.js')}}"></script>
</body>
</html>