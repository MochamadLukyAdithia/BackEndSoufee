<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>
        @yield('title')
    </title>
    @stack('styles')
    @vite([])
</head>

<body class="bg-[#edebe4] mt-24" style="font-family: 'Montserrat', sans-serif;">
    @include('homepagelayouts.header')
    <div class="px-10 mb-5">
        @yield('content')
    </div>
</body>
    <script>
        const btkatalog = document.querySelector('#bt-katalog');
        const btriwayat = document.querySelector('#bt-riwayat');
        const btpenjemputan = document.querySelector('#bt-penjemputan');

        const tekskatalog = document.querySelector('#teks-katalog');
        const teksriwayat = document.querySelector('#teks-riwayat');
        const tekspenjemputan = document.querySelector('#teks-penjemputan');

        const penjemputan1 = document.querySelector('#img-truk-1');
        const penjemputan2 = document.querySelector('#img-truk-2');

        const katalog1 = document.querySelector('#img-katalog-1');
        const katalog2 = document.querySelector('#img-katalog-2');

        const riwayat1 = document.querySelector('#img-riwayat-1');
        const riwayat2 = document.querySelector('#img-riwayat-2');

        const isiKatalog = document.querySelector('#isi-katalog');
        const isiRiwayat = document.querySelector('#isi-riwayat');
        const isiPenjemputan = document.querySelector('#isi-penjemputan');

        btkatalog.addEventListener('click', () => {
            btkatalog.style.backgroundColor = '#1C3F3A';
            tekskatalog.style.color = '#edebe4';
            katalog1.style.display = 'none';
            katalog2.style.display = 'block';

            btpenjemputan.style.backgroundColor = '#edebe4';
            tekspenjemputan.style.color = '#1C3F3A';
            penjemputan1.style.display = 'block';
            penjemputan2.style.display = 'none';

            btriwayat.style.backgroundColor = '#edebe4';
            teksriwayat.style.color = '#1C3F3A';
            riwayat1.style.display = 'block';
            riwayat2.style.display = 'none';

            isiKatalog.style.display = 'block';
            isiRiwayat.style.display = 'none';
            isiPenjemputan.style.display = 'none';
        });

        btpenjemputan.addEventListener('click', () => {
            btpenjemputan.style.backgroundColor = '#1C3F3A';
            tekspenjemputan.style.color = '#edebe4';
            penjemputan1.style.display = 'none';
            penjemputan2.style.display = 'block';

            btkatalog.style.backgroundColor = '#edebe4';
            tekskatalog.style.color = '#1C3F3A';
            katalog1.style.display = 'block';
            katalog2.style.display = 'none';

            btriwayat.style.backgroundColor = '#edebe4';
            teksriwayat.style.color = '#1C3F3A';
            riwayat1.style.display = 'block';
            riwayat2.style.display = 'none';

            isiKatalog.style.display = 'none';
            isiRiwayat.style.display = 'none';
            isiPenjemputan.style.display = 'block';
        });
        
        btriwayat.addEventListener('click', () => {
            btriwayat.style.backgroundColor = '#1C3F3A';
            teksriwayat.style.color = '#edebe4';
            riwayat1.style.display = 'none';
            riwayat2.style.display = 'block';

            btpenjemputan.style.backgroundColor = '#edebe4';
            tekspenjemputan.style.color = '#1C3F3A';
            penjemputan1.style.display = 'block';
            penjemputan2.style.display = 'none';

            btkatalog.style.backgroundColor = '#edebe4';
            tekskatalog.style.color = '#1C3F3A';
            katalog1.style.display = 'block';
            katalog2.style.display = 'none';

            isiKatalog.style.display = 'none';
            isiRiwayat.style.display = 'block';
            isiPenjemputan.style.display = 'none';
        });

            
    </script>

</html>
