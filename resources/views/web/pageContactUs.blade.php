<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page/ Contact Us</title>
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
    <div class="container grid lg:w-[96%] sm:w-[94%] w-[100%] mx-auto gap-1 grid-cols bg-gray-50">
        
        <!-- --------------Sidebar-------------- -->
        <aside class="h-[100vh] sm:relative fixed hidden sm:flex flex-col sm:w-[100%] w-[18rem] z-30 sm:shadow-none sm:p-0 p-6 shadow-xl bg-white">
            <div class="top bg-white flex items-center justify-between mt-4">
                <!-- --------------Logo-------------- -->
                <div class="logo flex gap-1 sm:ml-0 ml-3">
                    <img src={{ asset('images/LOGO.jpg') }} alt="" class="w-[2.5rem] h-[2.5rem]">
                    <h2 class="font-bold text-2xl lg:flex sm:hidden">AQSA <span class="text-[#235F7F]">Group</span></h2>
                </div>
                <div class="close sm:hidden cursor-pointer" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar bg-white flex flex-col h-[83vh] relative top-12">
                <a href={{ url('/dashborad') }}
                 class="flex duration-300 hover:text-[#235F7F] group text-gray-700 transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp group-hover:ml-3 transition-all duration-300 ease-out">grid_view</span>
                    <h3 class="font-medium lg:flex sm:hidden">Dashboard</h3>
                </a>
                <a href={{ url('/contactManagement') }} 
                class="flex duration-300 hover:text-[#235F7F] group text-gray-700 transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp group-hover:ml-3 transition-all duration-300 ease-out">person_outline</span>
                    <h3 class="font-medium lg:flex sm:hidden">Contact Management</h3>
                </a>
                <a href={{ url('/addpost') }}
                class="flex duration-300 hover:text-[#235F7F] group text-gray-700 transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">add</span>
                    <h3 class="font-medium lg:flex sm:hidden">Add Post</h3>
                </a>
                    <!--  Dropdown section */} -->
                    <div class='group relative cursor-pointer'>
                        <a href='#'
                        class="flex active text-[#235F7F] bg-[#235F7F]/10 ml-0 duration-300 transition-all ease-in gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]"
                        >
                        <span class="material-icons-sharp text-2xl lg:ml-3 ml-2">file_copy</span>
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
                                    class='inline-block w-full text-sm text-left rounded-md p-2 hover:hover:bg-[#235F7F]/20'
                                    >Blog</a>
                                </li>
                                <li>
                                    <a href="#"
                                    class='inline-block w-full text-sm text-left rounded-md p-2 bg-[#235F7F]/20'
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
                <a href="#" class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem] absolute bottom-4">
                    <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">logout</span>
                    <h3 class="font-medium lg:flex sm:hidden">Logout</h3>
                </a>
            </div>
        </aside>


         <main>
            <!-- ---------------Header--------------- -->
            <div class="top flex sm:justify-end justify-between gap-8 sm:relative fixed top-0 left-0 items-center px-2 bg-white w-[100%] h-[4.6rem] m-0 z-20 shadow-xl">
                <button id="menu-btn" class="sm:hidden flex bg-transparent cursor-pointer text-black left-4">
                    <span class="material-icons-sharp  text-4xl">menu</span>
                </button>
                <div class="protifile flex justify-end items-center gap-2 text-right">
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
                    <div class="info sm:flex flex-col hidden">
                        <p class="text-sm">Hey, <b>Danial</b></p>
                        <small class="text-gray-500 text-sm">Admin</small>
                    </div>
                    <div class="photo">
                        <img src={{ asset('images/02.jpg') }} alt="" class="w-[40px] h-[40px] rounded-full"> 
                    </div>
                </div>
            </div>
            <div class="px-8">
                <!-- ---------------title--------------- -->
                <div class="sm:mt-4 mt-24">
                    <h1 class="font-bold text-2xl">Page/ Contact Us</h1>
                </div>
                <div class="date inline-block bg-gray-200 rounded-lg mt-3 px-4 py-2">
                    <input type="date" class="bg-transparent text-black">
                </div>

                <!-- ---------------Form--------------- -->
                <form action="#">
                    <div class="grid lg:grid-cols-2 grid-cols-1 lg:pb-0 pb-6">

                        <!-- ---------------col1--------------- -->
                        <div class="px-4">
                            <div class="input-box relative w-[100%] h-[50px] mt-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-[12px] text-gray-200 font-medium pr-6" type="file">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none flex items-center" for="text">
                                    <span class="material-icons-sharp">download</span>
                                    Uploud Background image
                                </label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change title</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <textarea id="myinput" name="message" class="w-[100%] h-[90%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" id=""></textarea>
                                <label class="absolute transition-all top-[35%] left-0 -translate-y-[65%] pointer-events-none" for="text">Change text</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change label full name</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change label enter email</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] mt-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change label message</label>
                            </div>
                        </div>

                        <!-- ---------------col2--------------- -->
                        <div class="px-4">
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change location</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change phone number</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change email</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change link facebook</label>
                            </div>
                            <div class="input-box relative w-[100%] h-[50px] my-7">
                                <input id="myinput" class="w-[100%] h-[100%] bg-transparent outline-none focus:border-[#235F7F] border-b-2 border-[#000] text-lg font-medium pr-6" type="text">
                                <label class="absolute transition-all top-[50%] left-0 -translate-y-[50%] pointer-events-none" for="text">Change link linkedin</label>
                            </div>
                            <button class="input-btn relative w-[100%] h-[45px] border-2 border-[#235F7F] outline-none rounded-3xl cursor-pointer text-lg font-semibold flex items-center justify-center overflow-hidden">
                                <span class="z-10">Submit</span>
                                <span class="material-icons-sharp text-lg mx-2 z-10">send</span>
                            </button>
                        </div>
                    </div>    
                </form> 
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