<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page/ Services</title>
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
<body class="bg-gray-100 flex h-screen">

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
        <a href={{ url('/dashboard') }} class="flex text-gray-700 duration-300 hover:text-[#235F7F] group transition-all ease-in ml-4 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]">
            <span class="material-icons-sharp text-2xl group-hover:ml-3 transition-all duration-300 ease-out">grid_view</span>
            <h3 class="font-medium lg:flex sm:hidden">Dashboard</h3>
        </a>
        <!--  Dropdown section */} -->
        <div class='cursor-pointer relative'>
            <a href='#'
            class="flex active text-[#235F7F] bg-[#235F7F]/10 ml-0 duration-300 transition-all ease-in gap-2 items-center lg:w-[100%] sm:w-[5.6rem] h-[3.7rem]"
            >
                <div class="flex gap-2 items-center">
                    <span class="material-icons-sharp text-2xl lg:ml-3 ml-2">file_copy</span>
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
                        <a href="#"
                        class='inline-block ml-3 mb-1 text-[#235F7F] w-full text-sm text-left rounded-md p-2 bg-[#235F7F]/20'
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
      <h1 class="sm:flex hidden text-xl font-bold text-gray-800">Page/ Services</h1>
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

      <h1 class="flex mt-8 sm:hidden text-2xl font-bold text-gray-800">Page/ Services</h1>
      <!-- Date & Time -->
      <div class="bg-white text-center p-2 rounded-xl shadow w-60">
        <div id="dateTime">Loading...</div>
      </div>

      <!-- Page Form -->
        <form id="pageForm" class="bg-white p-6 rounded-xl shadow space-y-6">
        
            <!-- Main Title -->
            <div class="input-box">
                <label class="block m-2 font-medium text-gray-700">Main Title</label>
                <input type="text" 
                class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" 
                id="mainTitle myinput" 
                placeholder="Enter main title" 
                />
            </div>

            <!-- Main Paragraph -->
            <div class="input-box">
                <label class="block m-2 font-medium text-gray-700">Main Paragraph</label>
                <textarea id="mainParagraph myinput" placeholder="Page description" 
                class="w-full border border-gray-300 mt-2 p-2 rounded-lg focus:border-[#3084b1] text-black outline-none  px-5 py-2" rows="3"></textarea>
            </div>

            <!-- Main Image -->
            <div class="input-box">
                <label class="block m-2 font-medium text-gray-700">Main Image</label>
                <input type="file" id="mainImage myinput" accept="image/*" 
                class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />
                <img id="previewMainImage" class="mt-3 w-40 rounded-lg shadow hidden" alt="Preview" />
            </div>

            <!-- Cards Section -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Card Contents</h2>
                
                <div id="cardsContainer" class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <!-- Card 1 -->
                    <div class="border rounded-lg p-4 shadow input-box">
                        <label class="block font-medium m-2 text-gray-700">Card 1 Image</label>
                        <input type="file" id="cardImage1 myinput" accept="image/*"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />
                        <img id="previewCard1" class="mt-3 w-32 rounded-lg shadow hidden" alt="Preview" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 1 Title</label>
                        <input type="text" id="cardTitle1 myinput" placeholder="Enter card title"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 1 Paragraph</label>
                        <textarea id="cardParagraph1 myinput" placeholder="Enter card description"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" rows="2"></textarea>
                    </div>

                    <!-- Card 2 -->
                    <div class="border rounded-lg p-4 shadow input-box">
                        <label class="block font-medium m-2 text-gray-700">Card 2 Image</label>
                        <input type="file" id="cardImage1 myinput" accept="image/*"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />
                        <img id="previewCard1" class="mt-3 w-32 rounded-lg shadow hidden" alt="Preview" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 2 Title</label>
                        <input type="text" id="cardTitle1 myinput" placeholder="Enter card title"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 2 Paragraph</label>
                        <textarea id="cardParagraph1 myinput" placeholder="Enter card description"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" rows="2"></textarea>
                    </div>

                    <!-- Card 3 -->
                    <div class="border rounded-lg p-4 shadow input-box">
                        <label class="block font-medium m-2 text-gray-700">Card 3 Image</label>
                        <input type="file" id="cardImage1 myinput" accept="image/*"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />
                        <img id="previewCard1" class="mt-3 w-32 rounded-lg shadow hidden" alt="Preview" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 3 Title</label>
                        <input type="text" id="cardTitle1 myinput" placeholder="Enter card title"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 3 Paragraph</label>
                        <textarea id="cardParagraph1 myinput" placeholder="Enter card description"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" rows="2"></textarea>
                    </div>

                    <!-- Card 4 -->
                    <div class="border rounded-lg p-4 shadow input-box">
                        <label class="block font-medium m-2 text-gray-700">Card 4 Image</label>
                        <input type="file" id="cardImage1 myinput" accept="image/*"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />
                        <img id="previewCard1" class="mt-3 w-32 rounded-lg shadow hidden" alt="Preview" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 4 Title</label>
                        <input type="text" id="cardTitle1 myinput" placeholder="Enter card title"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" />

                        <label class="block mt-4 m-1 font-medium text-gray-700">Card 4 Paragraph</label>
                        <textarea id="cardParagraph1 myinput" placeholder="Enter card description"
                        class="text-black focus:border-[#3084b1] outline-none border border-gray-300 rounded-lg px-5 py-2 w-full" rows="2"></textarea>
                    </div>
                </div>
            </div>

    <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                class="px-6 py-2 bg-[#235F7F] text-white rounded-lg hover:bg-[#3084b1] transition">
                Save Changes
                </button>
            </div>
        </form>
    </main>
  </div>



    <!-- Icon -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Java link -->
    <script src="{{ asset('JS/main.js')}}"></script>
</body>
</html>