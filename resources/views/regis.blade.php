<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="flex flex-col justify-center items-center w-80 mx-auto h-[80vh] bg-slate-400 rounded-2xl">
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
                    <img src="img/Soufee.svg" alt="Logo Soufee" class="w-[120px] mt-[-40px] ">
                    <h1 class="items-center text-[24px] font-bold text-teal-600 object-contain">FIND YOUR BEST COFFE</h1>
                    <h2 class="text-[20px] text-gray-800 tracking-wider mb-3 ">Get started - Register</h2>
                    <form action="{{ route('register') }}" method="POST" class="space-y-1">
                        @csrf
                        <div>
                            <label for="name" class=" block text-[16px] font-bold text-gray-700 tracking-wider">Name</label>
                            <input
                                type="text" name="name" id="name"
                                placeholder=" &nbsp Masukkan nama anda"
                                class=" py-[2px] px-[12px] block w-full border-2 solid rounded-lg border-teal-700" required/>
                            @error("name")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class=" block text-[16px] font-bold text-gray-700 tracking-wider">Email</label>
                            <input
                                type="email" name="email" id="email"
                                placeholder=" &nbsp Masukkan username email anda"
                                class=" py-[2px] px-[12px] block w-full border-2 solid rounded-lg border-teal-700" required/>
                            @error("email")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class=" block text-[16px] font-bold text-gray-700 tracking-wider">Phone</label>
                            <input
                                type="text" name="phone" id="phone"
                                placeholder=" &nbsp Masukkan nomor telefon anda"
                                class=" py-[2px] px-[12px] block w-full border-2 solid rounded-lg border-teal-700" required/>
                            @error("phone")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="username" class=" block text-[16px] font-bold text-gray-700 tracking-wider">Username</label>
                            <input
                                type="text" name="username" id="username"
                                placeholder=" &nbsp Masukkan username anda"
                                class=" py-[2px] px-[12px] block w-full border-2 solid rounded-lg border-teal-700" required/>
                            @error("username")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-[16px] font-bold text-gray-700 tracking-wider">Password</label>
                            <input
                                type="password" name="password" id="password"
                                placeholder="Masukkan password anda"
                                class="py-[2px] px-[14px] block w-full border-2 solid rounded-lg border-teal-700">
                            @error("password")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-[16px] font-bold text-gray-700 tracking-wider">Password Confirmation</label>
                            <input
                                type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Masukkan konfirmasi password anda"
                                class=" py-[2px] px-[14px] block w-full border-2 solid rounded-lg border-teal-700 mb-2">
                            @error("password_confirmation")
                                <p class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-teal-600 text-white py-2 rounded-lg font-semibold hover:bg-teal-500"
                            >
                        Sign Up
                        </button>
                    </form>
                    <p class="mt-4 text-center text-sm text-gray-600">
                        Already have an account? <a href="/login" class="text-blue-600 font-medium hover:underline">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
