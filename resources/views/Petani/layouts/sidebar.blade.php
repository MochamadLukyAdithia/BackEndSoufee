        <!-- Sidebar -->
        <div class="h-full">
            <div class="gap-4 flex flex-col sticky min-h-[80vh] top-32">
                <h1 class="text-[#a2a2a2] mb-4">Dashboard</h1>

                <!-- Link Katalog -->
                <div class="bg-[#1C3F3A] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8"
                    id="bt-katalog">
                    <img src="{{ asset('img/streamline_coffee-bean-1.svg') }}" id="img-katalog-1" alt=""
                        class="hidden">
                    <img src="{{ asset('img/streamline_coffee-bean.svg') }}" id="img-katalog-2" alt="">
                    <p class="text-[#edebe4] text-[130%]" id="teks-katalog">Katalog</p>
                </div>

                <!-- Link Penjemputan -->
                <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8"
                    id="bt-penjemputan">
                    <img src="{{ asset('img/hugeicons_truck.svg') }}" alt="" id="img-truk-1">
                    <img src="{{ asset('img/hugeicons_truck-1.svg') }}" alt="" id="img-truk-2" class="hidden">
                    <p class="text-[#1C3F3A] text-[130%]" id="teks-penjemputan">Penjemputan</p>
                </div>

                <!-- Link Riwayat -->
                <div class="bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex items-center gap-8"
                    id="bt-riwayat">
                    <img src="{{ asset('img/lucide_history.svg') }}" alt="" id="img-riwayat-1">
                    <img src="{{ asset('img/lucide_history-1.svg') }}" alt="" id="img-riwayat-2" class="hidden">
                    <p class="text-[#1C3F3A] text-[130%]" id="teks-riwayat">Riwayat</p>
                </div>

                <!-- Logout -->
                <a href="{{ route('logout') }}" class="text-[#1C3F3A] text-[130%]" id="teks-riwayat">
                    <div
                        class="absolute bottom-0 w-full bg-[#edebe4] cursor-pointer px-4 py-2 rounded-xl border-2 border-[#1C3F3A] flex justify-center items-center gap-2">
                        Keluar
                        <img src="{{ asset('img/line-md_logout.svg') }}" alt="" id="img-riwayat-1"
                            class="size-[30px]">
                    </div>
                </a>
            </div>
        </div>
