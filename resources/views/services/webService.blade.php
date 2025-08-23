<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Serices</title>
</head>
<body style="font-family: 'Rosario';">
    @include('layouts.Navbar')

    <div class="relative text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-xl z-10 md:text-4xl  mt-6  md:mt-8">
            Web Development Serices
        </h2>
        <h1 class=" z-10 text-sm font-bold md:text-xl  text-center  mt-3 mb-10 md:my-6">
           Professional & Responsive <br> Website
        </h1>
    </div>    

    <!-- body-->
     <div class="flex flex-col gap-4 mx-auto px-4 md:px-10 w-full">
     <p class="text-justify text-sm md:text-lg mt-4 leading-7">
        The Web Department at AQSA Group is dedicated to delivering innovative and professional web solutions that empower
        businesses in the digital world. Our
        services include website design, web development, e-commerce platforms, and custom web applications. We focus on
        building responsive, fast, and secure
        websites that not only reflect the brand identity of our clients but also provide an outstanding user experience project
        meets international standards and
        aligns with the client’s goals. By combining creativity with cutting-edge technologies, we help businesses establish a
        strong online presence, attract more customer
        and achieve sustainable growth in today’s competitive market.
     </p>
     <div class="flex  flex-col md:flex-row md:justify-between ">
        <div class=" flex flex-col gap-3 md:gap-5 ">
            <h1 class="text-xl md:text-3xl py-3 ">
                Our service in web Development include:
            </h1>
            <div class="flex md:flex-row md:gap-4 relative ">
                <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">1</div>
                <span class="text-sm md:text-lg pl-12 md:pl-0  md:pt-1.5"> Modern technologies such as: Next js, WordPress, React. </span>
            </div>
            <div class="flex md:flex-row md:gap-4 relative mt-2 md:mt-0">
                <div
                    class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">2</div>
                <span class="text-sm md:text-lg pl-12 md:pl-0  pt-2 md:pt-1.5"> Corporate, e-commerce, and personal websites. </span>
            </div>
            <div class="flex md:flex-row md:gap-4 relative ">
                <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">3</div>
                <span class="text-sm md:text-lg pl-12 md:pl-0 pt-2 md:pt-1.5"> Custom design align with your brand identify. </span>
            </div>
            <div class="flex md:flex-row md:gap-4 relative ">
                <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">4</div>
                <span class="text-sm md:text-lg pl-12  pt-2  md:pl-0  "> High security and fast loading </span>
            </div>
            <div class="flex md:flex-row md:gap-4 relative mt-3 md:mt-0">
                <div  class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">5</div>
                <span class="text-sm md:text-lg pl-12 md:pl-0  pt-3">Friendly interface</span>
            </div>
        </div>
        <hr class="text-[#00000033] block md:hidden mt-8">
        <div>
            <img src="{{ asset('images/service (3).png') }}" alt="image" class="w-96 mr-40">
        </div>
    </div>
    <hr class="text-[#00000033] hidden md:block">

    <!-- section 2-->
    <div class="bg-[#18527733] w-full rounded-md mx-auto flex flex-col mt-6 p-4 md:p-8 ">
        <h1 class="text-center text-2xl pb-2">
            Our Mission
        </h1>
        <p class="text-justify text-sm md:text-lg leading-7">
        At AQSA Group, our mission is to empower businesses by creating digital solutions that go beyond aesthetics. We are
        committed to delivering websites and applications that are secure, scalable, and strategically designed to meet your
        unique goals. By combining modern technologies with user-centered design, we aim to enhance user experiences, strengthen
        brand identity, and drive measurable growth for our clients. Our focus is not just on building functional platforms, but
        on creating digital ecosystems that help businesses thrive in today’s competitive market.
        </p>
     </div>
     <button class="w-full text-lg py-2 md:py-3 md:mt-2 rounded-md text-white bg-[#235F7F]">
        Get Started
     </button>
    </div>

    @include('layouts.Footer')
</body>
</html>