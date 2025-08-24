<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Designing Service</title>
</head>

<body style="font-family: 'Rosario';">
    @include('layouts.Navbar')

    <div class="relative text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-xl z-10 md:text-4xl  mt-6  md:mt-8">
            Graphic Design & UI/UX Designing Service
        </h2>
        <h1 class=" z-10 text-sm font-bold md:text-xl  text-center  mt-3 mb-10 md:my-6">
            Engaging & User-Friendly Design
        </h1>
    </div>

    <!-- body-->
    <div class="flex flex-col gap-4 mx-auto px-4 md:px-10 w-full">
        <p class="text-justify text-sm md:text-lg mt-4 leading-7">
            The UI/UX and Graphic Design Department at AQSA Group is committed to creating visually appealing, user-friendly, and
            highly functional digital experiences. Our team of skilled designers focuses on intuitive interfaces, seamless user
            journeys, and engaging visual storytelling that align with brand identity and business objectives. From wireframing and
            prototyping to final visual assets, we ensure every design is crafted for clarity, usability, and aesthetic excellence.
            By combining creativity, the latest design tools, and user-centered methodologies, we help businesses enhance customer
            engagement, improve interaction flows, and deliver impactful digital products that stand out in today’s competitive
            market.
        </p>
        <div class="flex  flex-col md:flex-row md:justify-between ">
            <div class=" flex flex-col gap-3 md:gap-5 ">
                <h1 class="text-xl md:text-3xl py-3 ">
                    Our service in Graphic & UI/UX design include:
                </h1>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">1</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 md:pt-2">Branding, visual storytelling, and engaging graphics </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">2</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 md:pt-2"> Wireframing, prototyping, and interactive mockups </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">3</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 pt-1 md:pt-2"> Designing intuitive and user-friendly interfaces </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">4</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 pt-2"> Continuous feedback, iteration, and optimization </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 md:top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">5</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 pt-2 "> Consistent visual identity across platforms</span>
                </div>
            </div>
            <hr class="text-[#00000033] block md:hidden mt-8">
            <div>
                <img src="{{ asset('images/service (1).png') }}" alt="image" class="w-96 mr-40">
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
        <button class="w-full text-md md:text-lg py-2 md:py-3 md:mt-2  rounded-md text-white bg-[#235F7F]">
            Get Started
        </button>
    </div>

    @include('layouts.Footer')
</body>

</html>