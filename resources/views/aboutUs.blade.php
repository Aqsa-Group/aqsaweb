<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body >
    @include('layouts.Navbar')

    <div class="relative text-white  w-full h-auto   pt-12  md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h1 class=" z-10 text-xl md:text-5xl  mt-3 mb-1.5 md:my-6 font-medium">
            About Us
        </h1>
        <div class="z-10 flex justify-center mx-auto w-screen md:w-[850px] md:px-2  mb-6 md:mb-10">
            <p class="text-center text-sm  md:text-[20px] my-2 md:leading-7 mx-6 md:mx-0">
                From idea to execution, AQSA Group is your trusted partner in the digital world Our professional team in design, web,
                mobile, and graphics is ready to create exceptional experiences
            </p>
        </div>
    </div>

    <!--body-->
    <div class=" flex flex-col mx-6 md:mx-10 ">
        <h2 class="flex text-center mx-auto justify-center text-xl md:text-3xl my-3 md:my-6">
            Our History
        </h2>
        <p class="text-md md:text-[20px]  leading-7 md:leading-9 text-justify ">
            AQSA Group was founded with a mission to empower businesses through innovative digital solutions. Since its
            establishment, the company digital solutions.
            Since its establishment, the company has steadily grown into a leading IT and design service provider, delivering
            high-quality projects across various industries.
            AQSA Group specializes in web and mobile application development, UI/UX design, graphic design, database management, and
            digital strategy consulting. Over
            the years, the team has successfully completed numerous projects, helping clients improve their online presence, enhance
            user experience, and achieve business
            goals efficiently. With a focus on creativity, technology, and client satisfaction, AQSA Group continues to expand its
            services, adapt to emerging trends, and provide
            reliable, user-friendly, and scalable digital solutions for businesses of all sizes.
        </p>
        <div class=" grid grid-cols-2 lg:grid-cols-4  gap-2  md:gap-3 mt-4 md:mt-12">
            <div class="relative  flex flex-col items-center  rounded-lg border border-gray-400 overflow-hidden w-full p-2">
                <img src="{{ asset('images/developer.png') }}" alt="Web Development"
                    class="h-28 md:h-1/2 w-full object-cover rounded-md" />
                <h2 class="text-lg md:text-xl  mt-1">
                    Mohammad Ayoub
                </h2>
                <p class=" text-sm md:text-lg   px-2  py-2  text-gray-500">
                    Web Developer
                </p>
            </div>
        </div>
    </div>
  
@include('layouts.Footer')
</body>
</html>