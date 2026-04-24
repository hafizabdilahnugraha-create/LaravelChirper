<!DOCTYPE html>
<html lang="en" data-theme="dark"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

   <style>
    body {
        transition: background 0.5s ease, color 0.5s ease;
    }

    /* TEMA TERANG (LOFI) - SESUAI FIGMA BARU */
    [data-theme="lofi"] body {
        /* Arah diagonal dari pojok kiri bawah ke kanan atas sesuai garis Figma */
        background: linear-gradient(45deg, #A4A4F2 0%, #F1F1FB 100%) !important;
        background-attachment: fixed;
        color: #343456 !important; /* Gunakan ungu gelap figma untuk teks agar senada */
    }

    /* TEMA GELAP (CUSTOM FIGMA) - Tetap Ungu Gelap */
    [data-theme="dark"] body {
        background: linear-gradient(215deg, #343456 0%, #7373BC 100%) !important;
        background-attachment: fixed;
        color: #ffffff !important;
    }

    /* Kartu agar terlihat menyatu dengan background */
    .card {
        background-color: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1); /* Shadow halus agar tidak kaku */
    }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans">
    <nav class="navbar bg-base-100 shadow-md transition-colors duration-500">
        <div class="navbar-start">
    <button onclick="modal_about.showModal()" class="btn btn-ghost text-xl flex items-center gap-2 normal-case border-none bg-transparent">
        <img src="{{ asset('gambar-angel.png') }}" alt="Chirper Logo" class="h-8 w-8 object-contain">
        <span class="font-bold">Chirper</span>
    </button>
</div>

        <dialog id="modal_about" class="modal">
            <div class="modal-box bg-base-100 border-l-4 border-[#7373BC]">
                <div class="flex items-center gap-4 mb-4">
                    <div class="avatar">
                        <div class="w-16 rounded-full ring ring-[#7373BC] ring-offset-base-100 ring-offset-2">
                            <img src="{{ asset('gambar-angel.png') }}" />
                        </div>
                    </div>
                <div>
                    <h3 class="font-bold text-lg">Tentang Chirper</h3>
                    <p class="text-xs opacity-60">Versi 1.0 (Alpha)</p>
                </div>
            </div>
        
        <p class="py-2 text-sm leading-relaxed">
            **Chirper** adalah Project Laravel sederhana yang sedang dibangun oleh **Hafiz Abdillah Nugraha(230170145)**. 
            Project ini dikembangkan menggunakan **Laravel 11**, **Tailwind CSS**, dan **DaisyUI** sebagai bagian dari tugas mata kuliah pemrograman Web Lanjut Teknik Informatika di Universitas Malikussaleh.
        </p>

        <div class="modal-action">
            <form method="dialog">
                <button class="btn btn-sm btn-outline border-[#7373BC] text-[#7373BC] hover:bg-[#7373BC] hover:text-white">Tutup</button>
            </form>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop bg-black/40">
        <button>close</button>
    </form>
</dialog>
        
        <div class="navbar-end gap-2">
            <label class="btn btn-ghost btn-circle swap swap-rotate">
                <input type="checkbox" id="theme-toggle" />
                <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,18.36,17ZM12,6a6,6,0,1,0,6,6A6,6,0,0,0,12,6Z"/></svg>
                <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
            </label>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="card shadow-2xl mt-8 bg-base-100 transition-colors duration-500"> 
                <div class="card-body flex flex-col items-center text-center"> 
                    <img src="{{ asset('welcome.gif') }}" alt="Welcome Animation" class="w-64 h-auto mb-6 rounded-lg">
                    <div>
                        <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
                        <p class="mt-4 opacity-70">This is your brand new Laravel application. Time to make it sing (or chirp)!</p>

                        <div class="mt-8">
                            <button onclick="my_modal_1.showModal()" class="btn btn-wide bg-[#7373BC] hover:bg-[#343456] text-white border-none shadow-lg transform transition hover:scale-105">
                                 Getting Started
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </button>
                        </div>

                        <dialog id="my_modal_1" class="modal modal-bottom sm:modal-middle transition-all duration-300">
    <div class="modal-box bg-base-100 border border-[#7373BC]/20 p-8 shadow-2xl">
        
        <div class="flex justify-center mb-6">
            <img src="{{ asset('yui-stop.png') }}" 
                 alt="Under Construction Animation" 
                 class="w-60 h-auto rounded-full bg-[#A4A4F2]/10 p-2 border-4 border-[#7373BC]/20 shadow-inner">
        </div>

        <div class="text-center">
            <h3 class="text-2xl font-bold flex items-center justify-center gap-2">
                🚧 STOOOPPP!!!
            </h3>
            <p class="py-5 text-base-content/70 leading-relaxed">
                Halo, Sobat Terima kasih sudah mampir.<br>
                <span class="font-semibold text-[#7373BC]">Tapi maaf ni, Web Chirper ini sedang dalam tahap pembuatan.</span><br>
                fitur ini masih dalam pengerjaan. Nantikan update selanjutnya ya!
            </p>
        </div>

        <div class="modal-action justify-center">
            <form method="dialog">
                <button class="btn btn-sm btn-wide bg-[#343456] hover:bg-[#7373BC] text-white border-none rounded-full transform transition hover:scale-105 shadow-md">
                    OKE SIP!
                </button>
            </form>
        </div>
    </div>

    <form method="dialog" class="modal-backdrop bg-black/50 backdrop-blur-sm">
        <button>close</button>
    </form>
</dialog>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer footer-center p-5 bg-base-100 transition-colors duration-500 text-xs">
        <div>
            <p>© 2026 Chirper - Built With Laravel and ❤️ Hafiz Abdillah Nugraha(230170145)</p>
        </div>
    </footer>

    <script>
    const themeToggle = document.querySelector('#theme-toggle');
    const html = document.querySelector('html');

    themeToggle.addEventListener('change', () => {
        if (themeToggle.checked) {
            // Jika dicentang, ganti ke terang (lofi)
            html.setAttribute('data-theme', 'lofi');
        } else {
            // Jika tidak dicentang, ganti ke gelap (dark)
            html.setAttribute('data-theme', 'dark');
        }
    });
    </script>
</body>
</html>