<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management & Database Serices</title>
</head>

<body style="font-family: 'Rosario';">
    @include('layouts.Navbar')

    <div class="relative text-white  w-full h-auto   pt-12 md:pt-4 md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h2 class="text-lg z-10 md:text-4xl  mt-6  md:mt-8">
            Data Management & Database Serices
        </h2>
        <h1 class=" z-10 text-sm font-bold md:text-xl  text-center  mt-3 mb-10 md:my-6">
            Secure & Scalable Databases
        </h1>
    </div>

    <!-- body-->
    <div class="flex flex-col gap-4 mx-auto px-4 md:px-10 w-full">
        <p class="text-justify text-sm md:text-lg mt-4 leading-7">
            The Database Department at AQSA Group is dedicated to designing secure, reliable, and high-performance database
            solutions that help businesses manage and leverage their data efficiently. Our services cover relational and
            non-relational databases, cloud-based storage, and optimized data architectures, ensuring fast access, scalability, and
            robust security. We focus on building systems that not only handle large volumes of data seamlessly but also support
            analytics, reporting, and decision-making processes. into actionable insights that align with client objectives and
            industry best practices. By combining innovation, advanced technology, and agile methodologies, we help businesses
            maintain data integrity, enhance operational efficiency, and achieve long-term growth in the digital era.
        </p>
        <div class="flex  flex-col md:flex-row md:justify-between ">
            <div class=" flex flex-col gap-3 md:gap-5 ">
                <h1 class="text-lg md:text-3xl py-3 ">
                    Our service in Database development include:
                </h1>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">1</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  md:pt-2"> Optimized data access and management for seamless operations </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">2</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  md:pt-2"> Development using MySQL, PostgreSQL, MongoDB, and Firebase </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">3</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  md:pt-2">Designing secure, scalable, and high-performance databases. </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">4</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  md:pt-2"> Relational, non-relational, and cloud-based data solutions. </span>
                </div>
                <div class="flex md:flex-row md:gap-4 relative ">
                    <div class="border border-dashed absolute md:relative left-0 top-1 md:top-0 text-gray-400 py-1 px-3 md:py-1.5 md:px-3.5 border-[#235F7F]  items-center text-center rounded-full">5</div>
                    <span class="text-sm md:text-lg pl-12  md:pl-0  md:pt-2"> Continuous monitoring, backups, and updates. </span>
                </div>
            </div>
            <hr class="text-[#00000033] block md:hidden mt-8">
            <div>
                <img src="{{ asset('images/service (2).png') }}" alt="image" class="w-96 mr-40">
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