<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jadwal Kelas - 12 IPA 1</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2b8cee",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: { "display": ["Lexend", "sans-serif"] },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] overflow-x-hidden">
    <div class="relative flex w-full flex-col bg-white dark:bg-[#1a202c] border-b border-[#f0f2f4] dark:border-gray-800">
        <header class="flex items-center justify-between px-10 py-3 max-w-[1440px] mx-auto w-full">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                    <div class="size-10 flex items-center justify-center bg-primary/10 rounded-full text-primary">
                        <span class="material-symbols-outlined text-2xl">school</span>
                    </div>
                    <h2 class="text-lg font-bold">Kelas 12 IPA 1</h2>
                </div>
                <nav class="hidden md:flex items-center gap-9">
                    <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-200" href="#">Beranda</a>
                    <a class="text-sm font-bold text-primary" href="#">Jadwal</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-200" href="#">Tugas</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-200" href="#">Pengumuman</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <div class="bg-center bg-cover rounded-full size-10 ring-2 ring-white dark:ring-gray-800" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD45KMSejevCmaU6XUCozDN1t376YQ3UA3MIg9KnvAAdbr-ej7Ybr9opKzX9n8sSiGGxh4XZqWU0tMM122Y38X31Faf1vlPmliuBq_Fjbb3Zc8huNS8Chfm7oAORYyew6CB3VWf1M2iX-p4y5gBlMAEgj5c_5tJ93_5185GFH_uOsnQM2Yyzc0eYmcAEL7mvirDIlrUrL51Ol0NmR8bEDXmuh5EQ3xTMBnYjk7zHzy3GZQfs76in9HrvanLK76bGGj-j9vfMOUy6FU");'></div>
            </div>
        </header>
    </div>

    <div class="layout-container flex h-full grow flex-col max-w-[1440px] mx-auto w-full px-5 md:px-10 py-5">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 py-6">
            <div>
                <h1 class="text-[#111418] dark:text-white text-4xl font-black">Jadwal Kelas</h1>
                <p class="text-[#617589] dark:text-gray-400">Pantau jadwal pelajaran, ujian, dan kegiatan kelas.</p>
            </div>
            <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-medium shadow-sm">
                <span class="material-symbols-outlined">download</span> Unduh PDF
            </button>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <aside class="flex flex-col gap-6 w-full lg:w-[320px] shrink-0">
                <div class="bg-gradient-to-br from-primary to-[#1a6dbf] rounded-xl p-5 text-white shadow-lg">
                    <div class="flex items-center gap-2 mb-3 opacity-90">
                        <span class="material-symbols-outlined text-[18px]">play_circle</span>
                        <span class="text-sm font-medium uppercase">Selanjutnya</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">Fisika Dasar</h3>
                    <p class="text-sm opacity-80 mb-4">Pak Budi Santoso</p>
                    <div class="flex gap-3">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 text-center min-w-[70px]">
                            <span class="text-xs block">Mulai</span>
                            <span class="font-bold">10:00</span>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-2 text-center min-w-[70px]">
                            <span class="text-xs block">Ruang</span>
                            <span class="font-bold">LAB-2</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-[#1a202c] rounded-xl p-5 border border-[#e5e7eb] dark:border-gray-800">
                    <h3 class="font-bold mb-4 dark:text-white">Kategori</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3"><div class="w-3 h-3 rounded-full bg-blue-500"></div><span class="text-sm text-[#617589]">Sains (IPA)</span></div>
                        <div class="flex items-center gap-3"><div class="w-3 h-3 rounded-full bg-red-500"></div><span class="text-sm text-[#617589]">Ujian Penting</span></div>
                    </div>
                </div>
            </aside>

            <main class="flex-1">
                <div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-gray-800 overflow-hidden">
                    <div class="grid grid-cols-7 border-b border-[#e5e7eb] dark:border-gray-800 bg-[#f9fafb] dark:bg-gray-900">
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Sen</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Sel</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Rab</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Kam</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Jum</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Sab</div>
                        <div class="py-3 text-center text-xs font-bold text-[#617589] uppercase">Min</div>
                    </div>
                    <div class="grid grid-cols-7 auto-rows-fr bg-[#e5e7eb] dark:bg-gray-800 gap-[1px]">
                        <div class="bg-white dark:bg-[#1a202c] min-h-[120px] p-2 flex flex-col gap-1">
                            <span class="text-right text-sm font-bold dark:text-white">5</span>
                            <div class="bg-green-100 dark:bg-green-900/30 border-l-4 border-green-500 rounded px-2 py-1">
                                <p class="text-xs font-bold text-green-800 dark:text-green-300">Kimia</p>
                                <p class="text-[10px] text-green-600">08:00</p>
                            </div>
                        </div>
                        </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>