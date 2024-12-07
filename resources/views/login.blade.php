<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>>@yield('title')</title>
</head>
<body>
        <div id="image-slider" class="relative">
            <img src="img/Kopi.jpg" alt="Gambar Kopi" class="h-screen w-screen no-repeat bg-cover bg-center transition-opacity blur-[2px] duration-3000">
            <img src="img/KopiI.jpg" alt="Gambar Kopi" class="h-screen w-screen bg-cover bg-center blur-[2px] transition-opacity duration-3000 hidden">
            <img src="img/KopiII.jpg" alt="Gambar Kopi" class="h-screen w-screen no-repeat bg-cover blur-[2px] bg-center transition-opacity duration-3000 hidden">
        </div>
        <script>
            const imageSlider = document.getElementById('image-slider');
            const images = [
            'img/Kopi.jpg',
            'img/KopiI.jpg',
            'img/KopiII.jpg',
            ];
            let currentIndex = 0;

            function changeImage() {
                imageSlider.children[currentIndex].classList.remove('hidden');
                imageSlider.children[(currentIndex - 1 + images.length) % images.length].classList.add('hidden');
                currentIndex = (currentIndex + 1) % images.length;
            }
            setInterval(changeImage, 6000);
        </script>
        <div class="absolute inset-0 flex justify-center items-center bg-transparent z-10">
            <div class="max-w-5xl w-full h-[40vw] bg-white rounded-[1.5%] shadow-md flex border-teal-500 border-2 solid">
                <div class="bg-slate-100 my-[3%] mx-[5%] px-[20%] py-[10%] rounded-[1%] w-[40%] flex justify-center items-center overflow-hidden">
                    <img src="img/Soufee.jpg" alt="Soufee" class=" flex-col max-w-[342px] h-auto object-contain ">
                </div>
                <div class=" w-[45%] p-4 flex flex-col justify-center">
                    <img src="img/Soufee.svg" alt="Logo Soufee" class="w-[140px] mt-[-60px]">
                    <h1 class="items-center text-2xl font-bold text-teal-600 object-contain mb-[24px]">FIND YOUR BEST COFFE</h1>
                    <h2 class="text-2xl text-gray-800 mb-[4px] tracking-wider">Get started</h2>
                    <form action="{{ route('login') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="username" class="mt-3 block text-lg font-medium text-gray-700 tracking-wider">Username</label>
                            <input
                                type="text" name="username" id="username"
                                placeholder=" &nbsp Masukkan gmail anda"
                                class="mt-2 py-[5px] px-[14px] block w-full border-2 solid rounded-lg border-teal-700" />
                        </div>
                        <div>
                        <label for="password" class=" mt-3 block text-lg font-medium text-gray-700 tracking-wider">Password</label>
                        <input
                            type="password" name="password" id="password"
                            placeholder="Masukkan sandi anda"
                            class="mt-2 py-[5px] px-[14px] block w-full border-2 solid rounded-lg border-teal-700">
                        <span class="text-green-600 bg-teal-200 rounded-sm text-sm" id="ktrsandi"></span> 
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-teal-600 text-white py-2 rounded-lg font-semibold hover:bg-teal-500"
                            >
                        Sign In
                        </button>
                        <button
                            type="submit"
                            class="w-full bg-teal-600 text-white py-2 rounded-lg font-semibold hover:bg-teal-500"
                        >
                        Sign In With Gogle
                        </button>
                    </form>
                    <p class="mt-4 text-center text-sm text-gray-600">
                        Don't have an account? <a href="/register" class="text-blue-600 font-medium hover:underline">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>