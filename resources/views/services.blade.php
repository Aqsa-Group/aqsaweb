<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
</head>
<body>
    @include('layouts.Navbar')
    <div class="relative text-white  w-full min-h-[100px] md:h-auto  pt-12  md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h1 class="m-10 md:m-0"> Our Services </h1>
    </div>
        <div class="mt-8 md:mt-0 grid grid-cols-2 lg:grid-cols-4  gap-2  md:gap-3   p-2 md:p-5 ">
            <div class="relative pb-3 flex flex-col items-center rounded-lg shadow overflow-hidden w-full ">
                <img src="{{ asset('images/security.jpg') }}" alt="Security" class="h-28 md:h-1/2 w-full object-cover" />
                <h2 class="text-lg md:text-2xl  mt-1  ">Security</h2>
                <p class="text-center text-sm pb-7  md:pb-4  md:text-lg font-medium  px-2   md:py-2 md:mt-2 text-gray-500">
                    AQSA Group offers expert securitly camera installation to ensure safety and reliable monitoring for
                    property.
                </p>
                <a href="{{ route('databaseService')}}">
                    <button
                        class="text-sm  md:text-lg  absolute bottom-1 left-1 right-1 text-[#235F7F] py-1 md:py-1.5  text-center border border-[#235F7F] bg-transparent rounded-md">
                        Learn More
                    </button>
                </a>
            </div>
            <div class="relative  flex flex-col items-center  rounded-lg shadow overflow-hidden w-full">
                <img src="{{ asset('images/developmentImage.jpg') }}" alt="Web Development"
                    class="h-28 md:h-1/2 w-full object-cover" />
                <h2 class="text-md md:text-2xl  mt-1  md:mt-2  leading-5 md:leading-normal ">Web Development Team</h2>
                <p class=" text-sm md:text-lg  font-medium px-2  py-2  text-gray-500">
                    AQSA Group builds modern, responsive websites tailored to your business needs.
                </p>
                <a href="{{ route('webService')}}">
                    <button
                        class="text-sm  md:text-lg  absolute bottom-1 left-1 right-1 text-[#235F7F] py-1 md:py-1.5  text-center border border-[#235F7F] bg-transparent rounded-md">
                        Learn More
                    </button>
                </a>
            </div>
            <div class="relative  flex flex-col items-center rounded-lg shadow overflow-hidden w-full pb-4">
                <img src="{{ asset('images/mobile.jpg') }}" alt="Mobile Development"
                    class="h-28 md:h-1/2 w-full object-cover" />
                <h2 class="text-md md:text-2xl md:px-1 mt-1 md:mt-2 leading-4 md:leading-normal">Mobile Development Team</h2>
                <p class=" text-sm  pb-5  md:text-lg font-medium px-2   my-1.5 md:my-2 text-gray-500">
                    AQSA Group designs and develops high-quality mobile applications for Android and iOS.
                </p>
                <a href="{{ route('MobileService')}}">
                    <button
                        class="text-sm  md:text-lg  absolute bottom-1 left-1 right-1 text-[#235F7F] py-1 md:py-1.5  text-center border border-[#235F7F] bg-transparent rounded-md">
                        Learn More
                    </button>
                </a>
            </div>
            <div class="relative flex flex-col items-center  rounded-lg shadow overflow-hidden w-full ">
                <img src="{{ asset('images/graphic.jpg') }}" alt="Graphic & UI/UX Team"
                    class="h-28 md:h-1/2 w-full object-cover" />
                <h2 class="text-lg md:text-2xl mt-1  md:mt-2  leading-5 md:leading-normal">Graphic & UI/UX Team</h2>
                <p class=" md:pb-4  text-sm md:text-lg font-medium px-2  my-1 md:my-2 text-gray-500">
                    AQSA Group's graphic and UI/UX design team creates visually engaging and user-centerd designs.
                </p>
                <a href="{{ route('GraphicDesign')}}">
                    <button
                        class="text-sm  md:text-lg  absolute bottom-1 left-1 right-1 text-[#235F7F] py-1 md:py-1.5  text-center border border-[#235F7F] bg-transparent rounded-md ">
                        Learn More
                    </button>
                </a>
            </div>
        </div>
        </div>
    </div>
    @include('layouts.Footer')
</body>
</html>