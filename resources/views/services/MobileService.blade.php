<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moblie Development Serices</title>
</head>

<body style="font-family: 'Rosario';">
    @include('layouts.Navbar')

    <div class="relative text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-xl z-10 md:text-4xl  mt-6  md:mt-8">
            Mobile Development Serices
        </h2>
        <h1 class=" z-10 text-sm font-bold md:text-xl  text-center  mt-3 mb-10 md:my-6">
            Creative & Fast Mobile Apps
        </h1>
    </div>

    <!-- body-->
    <div class="flex flex-col gap-4 mx-auto px-4 md:px-10 w-full">
        <p class="text-justify text-sm md:text-lg mt-4 leading-7">
            The Mobile Department at AQSA Group is committed to creating high-quality, user-friendly, and innovative mobile
            applications that empower businesses to
            grow in the digital era. Our services cover native Android and iOS development, as well as cross-platform solutions,
            ensuring that every app is fast, secure, and
            fully optimized for performance. We focus on delivering apps that not only provide seamless functionality but also offer
            an engaging and intuitive user experience
            With a team of skilled developers, designers, and strategists, we transform ideas into powerful mobile solutions that
            align with client goals and industry standards.
            By combining creativity, technology, and agile practices, we help businesses connect with their audiences, expand their
            reach, and achieve long-term success
            in the competitive mobile marketplace.
        </p>
        <div class="flex  flex-col md:flex-row md:justify-between ">
            <div class=" flex flex-col gap-3 md:gap-5 ">
                <h1 class="text-xl md:text-3xl py-3">
                Our service in Mobile development include:
                </h1>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">1</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0  md:pt-2"> Features like notifications, online payments, and user management </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">2</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0  md:pt-2"> E-commerce, educational, and service-based apps. </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">3</div>
                    <span class="text-sm md:text-lg pl-12 md:pl-0 pt-3 md:pt-2"> Development using Flutter, Kotlin, Swift </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative mt-2 md:mt-0">
                    <div
                        class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">4</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  pt-2.5 md:pt-2"> Continuous support and updates </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative mt-2 md:mt-0">
                    <div
                        class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">5</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0 pt-3 md:pt-2"> Friendly interface</span>
                </div>
            </div>
            <hr class="text-[#00000033] block md:hidden mt-8">
            <div>
                <img src="{{ asset('images/service (4).png') }}" alt="image" class="w-96 mr-40">
            </div>
        </div>
        <hr class="text-[#00000033] hidden md:block">

        <!-- section 2-->
        <div class="bg-[#18527733] w-full rounded-md mx-auto flex flex-col mt-6  p-4 md:p-8 ">
            <h1 class="text-center text-2xl pb-2">
                Our Mission
            </h1>
            <p class="text-justify text-sm md:text-lg leading-7">
                At AQSA Group, our mission is to empower businesses by creating digital solutions that go beyond aesthetics. We are
                committed to delivering
                websites and applications that are secure, scalable, and strategically designed to meet your unique goals. By combining
                modern technologies
                with user-centered design, we aim to enhance user experiences, strengthen brand identity, and drive measurable growth
                for our clients. Our
                focus is not just on building functional platforms, but on creating digital ecosystems that help businesses thrive in
                today’s competitive market.
            </p>
        </div>
        <button class="w-full text-lg py-2 md:py-3 md:mt-2 rounded-md text-white bg-[#235F7F]">
            Get Started
        </button>
    </div>

    @include('layouts.Footer')
</body>

</html>