@extends('homepagelayouts.app')

@section('title')
    SouFee | HomePage
@endsection

@section('content')
    <div class=" w-full mt-32 grid grid-cols-[0.25fr_1fr] gap-16">
        <div class="h-full">
            <div class="gap-4 flex flex-col sticky min-h-[80vh] top-32">
                <h1 class="text-[#a2a2a2] mb-4">Dashboard</h1>
                <div class="bg-[#1C3F3A] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8" id="bt-katalog">
                    <img src="{{ asset('img/streamline_coffee-bean-1.svg') }}" id="img-katalog-1" alt="" class="hidden">
                    <img src="{{ asset('img/streamline_coffee-bean.svg') }}" id="img-katalog-2" alt="">
                    <p class="text-[#edebe4] text-[130%]" id="teks-katalog">Katalog</p>
                </div>

                <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8" id="bt-penjemputan">
                    <img src="{{ asset('img/hugeicons_truck.svg') }}" alt="" id="img-truk-1">
                    <img src="{{ asset('img/hugeicons_truck-1.svg') }}" alt="" id="img-truk-2" class="hidden">
                    <p class="text-[#1C3F3A] text-[130%]" id="teks-penjemputan">Penjemputan</p>
                </div>

                <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8" id="bt-riwayat">
                    <img src="{{ asset('img/lucide_history.svg') }}" alt="" id="img-riwayat-1">
                    <img src="{{ asset('img/lucide_history-1.svg') }}" alt="" id="img-riwayat-2" class="hidden">
                    <p class="text-[#1C3F3A] text-[130%]" id="teks-riwayat">Riwayat</p>
                </div>

                <div class="absolute bottom-0 w-full bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex justify-center items-center gap-2" onclick="window.location.href='{{ route('landingpage') }}'">
                    <a href="{{ route('landingpage') }}" class="text-[#1C3F3A] text-[130%]" id="teks-riwayat">Keluar</a>
                    <img src="{{ asset('img/line-md_logout.svg') }}" alt="" id="img-riwayat-1" class="size-[30px]">
                </div>
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-4 gap-6" id="isi-katalog">
                @vite([])
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
                <div class="w-full h-[350px] border border-black"></div>
            </div>
            <div class="hidden" id="isi-riwayat">
                <h1>ini isinya riwayat</h1>
            </div>
            <div class="hidden" id="isi-penjemputan">
                <h1>ini isinya penjemputan</h1>
            </div>
        </div>
    </div>
@endsection