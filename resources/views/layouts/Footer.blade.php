<!-- Footer  -->
<div class="bg-[#235F7F] mt-6 md:mt-16 w-full text-white absolute " >
    <div class="flex flex-col-reverse md:flex-row md:gap-12 pb-4">
        <!-- Left Section (Brand Description & Socials) -->
        <div class=" flex flex-col p-5 w-full md:w-1/3 md:ml-8 text-center">
            <div class="flex flex-row gap-2 justify-center  mx-2  md:mx-4 bg-white h-auto rounded-lg md:rounded-xl py-1 md:mt-4">
                <div>
                    <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="w-12 mt-1">
                </div>
                <div class="relative flex flex-col">
                <h1 class="text-black text-2xl sm:text-2xl lg:text-3xl  text-center p-2">
                    AQSA GROUP
                </h1>
                <div class="absolute bottom-1 w-full h-0.5 bg-black "></div>
                </div>
            </div>
            <p class=" text-justify mt-2 text-sm md:text-md  mx-2 md:mx-4">
                AQSA Group is a leading provider of innovative IT solutions, dedicated to empowering businesses though modern
                technology and expert support. With a team of professionals in design, development, and digital strategy.
                we deliver tailored Services that help clients grow, adapt, and succeed in the digital world.
            </p>
        </div>
        <!-- Right Section (Info Columns) -->
        <div class="w-full md:w-1/2 md:ml-8 fnjlonhlex text-center md:text-left">
            <div class="grid grid-cols-1  md:grid-cols-3  md:gap-10 p-5  md:p-10">
                <!-- Services -->
                <div class="">
                    <!-- mobile-->
                    <details class="md:hidden border-b border-white/50 py-3">
                        <summary class="flex justify-between items-center cursor-pointer list-none ">
                            <h1 class="text-xl font-bold ">Services</h1>
                            <span class="text-xs w-5 h-5 flex items-center justify-center border border-white rounded-full">
                                ▼
                            </span>
                        </summary>
                        <ul class="space-y-3 text-sm text-left">
                            <li class="hover:text-blue-500 cursor-pointer underline mt-2">Web Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">Software Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">Mobile Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">IT Infrastructure</li>
                        </ul>
                    </details>
                    <!-- disktop-->
                    <div class="hidden md:block">
                        <h1 class="text-lg font-bold mb-3">Services</h1>
                        <ul class="space-y-2 text-sm ">
                            <li class="hover:text-blue-500 cursor-pointer underline">Web Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">Software Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">Mobile Development</li>
                            <li class="hover:text-blue-500 cursor-pointer">IT Infrastructure</li>
                        </ul>
                    </div>
                </div>
                <!--  Links -->
                <div class="cursor-pointer">
                    <details class="md:hidden border-b border-white/50 py-2">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h1 class="text-lg font-bold ">Company</h1>
                            <span class="text-xs w-5 h-5 flex items-center justify-center border border-white rounded-full">
                                ▼
                            </span>
                        </summary>
                        <ul class="space-y-3 text-sm text-left mt-2">
                            <li class="hover:text-blue-500 cursor-pointer">Achievements</li>
                            <li class="hover:text-blue-500 cursor-pointer">About Us</li>
                            <li class="hover:text-blue-500 cursor-pointer">Partners</li>
                            <li class="hover:text-blue-500 cursor-pointer">Carriers</li>
                        </ul>
                    </details>
                    <div class="hidden md:block">
                        <h1 class="text-lg font-bold mb-3">Company</h1>
                        <ul class="space-y-2 text-sm">
                            <li class="hover:text-blue-500 cursor-pointer">Achievements</li>
                            <li class="hover:text-blue-500 cursor-pointer">About Us</li>
                            <li class="hover:text-blue-500 cursor-pointer">Partners</li>
                            <li class="hover:text-blue-500 cursor-pointer">Carriers</li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="flex flex-col gap-3 cursor-pointer text-center md:text-left font-sans">
                    <details class="md:hidden border-b border-white/50 py-2">
                        <summary class="flex justify-between items-center cursor-pointer list-none ">
                            <h1 class="text-lg font-bold ">Contact Us</h1>
                            <span class="text-xs w-5 h-5 flex items-center justify-center border border-white rounded-full">
                                ▼
                            </span>
                        </summary>
                        <div class="text-left  text-sm hover:text-blue-500 cursor-pointer  my-2">
                            <i class="fas fa-phone text-white"></i>
                            <span>0797050890</span>
                        </div>
                        <div class="text-left text-sm hover:text-blue-500 cursor-pointer  mb-2">
                            <i class="fas fa-phone text-white"></i>
                            <span>0797050890</span>
                        </div>
                        <div class="text-left  text-sm hover:text-blue-500 cursor-pointer  mb-2" >
                            <i class="fas fa-envelope text-white"></i>
                            <span>Info@aqsagroup.af</span>
                        </div>
                        <div class="text-left text-sm hover:text-blue-500 cursor-pointer ">
                            <i class="fas fa-location-dot text-white"></i>
                            <span>Imam Muslim 22, 64 Meter Street, House #23</span>
                        </div>
                    </details>
                    <div class="hidden md:block">
                        <h1 class="text-lg font-bold mb-3">Contact Us</h1>
                        <div class="  text-sm hover:text-blue-500 cursor-pointer">
                            <i class="fas fa-phone text-white"></i>
                            <span>0797050890</span>
                        </div>
                        <div class=" text-sm hover:text-blue-500 cursor-pointer">
                            <i class="fas fa-phone text-white"></i>
                            <span>0797050890</span>
                        </div>
                        <div class="  text-sm hover:text-blue-500 cursor-pointer">
                            <i class="fas fa-envelope text-white"></i>
                            <span>Info@aqsagroup.af</span>
                        </div>
                        <div class="text-sm hover:text-blue-500 cursor-pointer">
                            <i class="fas fa-location-dot text-white"></i>
                            <span>Imam Muslim 22, 64 Meter Street, House #23</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>