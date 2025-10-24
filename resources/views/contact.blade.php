<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotact Us</title>
</head>
<body>
    @include('layouts.Navbar')
    <div class="relative text-white  w-full min-h-[100px] md:h-auto  pt-12  md:mt-[60px] flex flex-col justify-center text-center  mx-auto bg-cover bg-no-repeat"
        style="background-image: url('{{ asset('images/bannerBg.jpg') }}'); ">
        <h1 class="m-10 md:m-0">Contact Us  </h1>
    </div>
    @include('layouts.Footer')
</body> 
</html>