<!DOCTYPE html>
<html lang="en" data-theme="dark"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { transition: background 0.5s ease, color 0.5s ease; }
        [data-theme="lofi"] body {
            background: linear-gradient(45deg, #A4A4F2 0%, #F1F1FB 100%) !important;
            background-attachment: fixed;
            color: #343456 !important;
        }
        [data-theme="dark"] body {
            background: linear-gradient(215deg, #343456 0%, #7373BC 100%) !important;
            background-attachment: fixed;
            color: #ffffff !important;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans">
    <nav class="navbar bg-base-100 shadow-md transition-colors duration-500">
        <div class="navbar-start">
            <button onclick="modal_about.showModal()" class="btn btn-ghost text-xl flex items-center gap-2 normal-case border-none bg-transparent">
                <img src="{{ asset('gambar-angel.png') }}" alt="Chirper Logo" class="h-8 w-8 object-contain">
                <span class="font-bold text-base-content">Chirper</span>
            </button>
        </div>

        <div class="navbar-end gap-2">
            <label class="btn btn-ghost btn-circle swap swap-rotate">
                <input type="checkbox" id="theme-toggle" />
                <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,18.36,17ZM12,6a6,6,0,1,0,6,6A6,6,0,0,0,12,6Z"/></svg>
                <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
            </label>
        </div>
    </nav>

    <!-- MODAL ABOUT -->
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
                **Chirper** adalah Project Laravel sederhana yang dibangun oleh **Hafiz Abdillah Nugraha(230170145)**.
            </p>
            <div class="modal-action">
                <form method="dialog"><button class="btn btn-sm btn-outline border-[#7373BC]">Tutup</button></form>
            </div>
        </div>
    </dialog>

    <main class="flex-1 container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="card shadow-2xl mt-8 bg-base-100 transition-colors duration-500"> 
                <div class="card-body flex flex-col items-center text-center"> 
                    <img src="{{ asset('welcome.gif') }}" alt="Welcome Animation" class="w-64 h-auto mb-6 rounded-lg">
                    <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
                    <p class="mt-4 opacity-70 text-base-content">This is your brand new Laravel application. Time to chirp!</p>
                    
                    <div class="mt-8">
                        <button onclick="modal_chirp.showModal()" class="btn btn-wide bg-[#7373BC] hover:bg-[#343456] text-white border-none shadow-lg transform transition hover:scale-105">
                            Getting Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- AREA DAFTAR PESAN -->
    <section class="container mx-auto px-4 pb-20">
        <div class="max-w-2xl mx-auto">
            <div class="flex items-center justify-between mb-6 px-4">
                <h2 class="text-sm font-bold text-white/50 uppercase tracking-[0.2em]">Recent Chirps</h2>
                <button onclick="clearHistory()" class="text-[10px] bg-red-500/20 hover:bg-red-500/40 text-red-200 px-3 py-1 rounded-full transition-all">
                    Hapus Semua
                </button> <!-- SEBELUMNYA DI SINI SALAH PAKAI </div> -->
            </div>
            <div id="chirp_history_main" class="space-y-4"></div>
        </div>
    </section>

    <!-- MODAL CHIRP -->
    <dialog id="modal_chirp" class="modal">
        <div class="modal-box bg-base-100 p-0 rounded-2xl border border-base-300 shadow-2xl overflow-hidden max-w-lg">
            <div class="flex items-center justify-between px-6 py-4 border-b border-base-200">
                <h3 class="font-bold text-base-content">What's on your mind?</h3>
                <form method="dialog"><button class="btn btn-sm btn-circle btn-ghost">✕</button></form>
            </div>
            <div class="p-6 space-y-4">
                <textarea id="chirp_content" placeholder="Tulis sesuatu..." class="textarea textarea-bordered w-full h-32 bg-base-200 text-base-content"></textarea>
                <div class="flex justify-end">
                    <button onclick="saveChirp()" class="btn bg-[#5479D1] text-white border-none px-10">Chirp</button>
                </div>
            </div>
        </div>
    </dialog>

    <footer class="footer footer-center p-5 bg-base-100 text-xs">
        <p>© 2026 Chirper - Built With Laravel and ❤️ Hafiz Abdillah Nugraha(230170145)</p>
    </footer>

    <script>
        const themeToggle = document.querySelector('#theme-toggle');
        const html = document.querySelector('html');

        if (themeToggle) {
            themeToggle.addEventListener('change', () => {
                html.setAttribute('data-theme', themeToggle.checked ? 'lofi' : 'dark');
            });
        }

        document.addEventListener('DOMContentLoaded', () => { displayChirps(); });

        function saveChirp() {
            const content = document.getElementById('chirp_content').value;
            if (!content.trim()) return;

            const existingChirps = JSON.parse(localStorage.getItem('chirp_history')) || [];
            existingChirps.unshift({
                text: content,
                time: new Date().toLocaleString('id-ID', { dateStyle: 'medium', timeStyle: 'short' })
            });
            localStorage.setItem('chirp_history', JSON.stringify(existingChirps));
            document.getElementById('chirp_content').value = "";
            modal_chirp.close();
            displayChirps();
        }

        function displayChirps() {
            const container = document.getElementById('chirp_history_main');
            if (!container) return;
            const chirps = JSON.parse(localStorage.getItem('chirp_history')) || [];
            
            if (chirps.length === 0) {
                container.innerHTML = '<div class="p-10 text-center border-2 border-dashed border-white/10 rounded-2xl text-white/30 italic text-sm">Belum ada aktivitas.</div>';
                return;
            }

            container.innerHTML = chirps.map(chirp => `
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl shadow-xl transition-all mb-4">
                    <p class="text-white text-lg">${chirp.text}</p>
                    <div class="mt-4 flex justify-between items-center opacity-40 text-[9px] text-white font-bold uppercase tracking-widest">
                        <span>Local Storage Data</span>
                        <span>${chirp.time}</span>
                    </div>
                </div>
            `).join('');
        }

        function clearHistory() {
            if (confirm("Hapus semua pesan?")) {
                localStorage.removeItem('chirp_history');
                displayChirps();
            }
        }
    </script>
</body>
</html>