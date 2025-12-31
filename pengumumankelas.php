<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Daftar Tugas Kelas</title>
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
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-x-hidden">
    <div class="relative flex h-auto min-h-screen w-full flex-col">
        <div class="layout-container flex h-full grow flex-col">
            <div class="w-full flex justify-center sticky top-0 z-50 bg-white dark:bg-[#1a2632] shadow-sm border-b border-[#f0f2f4] dark:border-[#2a3b4c]">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                    <header class="flex items-center justify-between whitespace-nowrap px-4 lg:px-10 py-3">
                        <div class="flex items-center gap-4">
                            <div class="size-8 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-3xl">school</span>
                            </div>
                            <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Kelas 12 IPA 1</h2>
                        </div>
                        <div class="hidden md:flex flex-1 justify-end gap-8">
                            <div class="flex items-center gap-6">
                                <a class="text-[#111418] dark:text-gray-200 hover:text-primary text-sm font-medium leading-normal transition-colors" href="#">Jadwal</a>
                                <a class="text-primary text-sm font-bold leading-normal transition-colors" href="#">Tugas</a>
                                <a class="text-[#111418] dark:text-gray-200 hover:text-primary text-sm font-medium leading-normal transition-colors" href="#">Pengumuman</a>
                                <a class="text-[#111418] dark:text-gray-200 hover:text-primary text-sm font-medium leading-normal transition-colors" href="#">Galeri</a>
                            </div>
                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="Student profile avatar placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuTyxYMDPIJV9jlLpLFRx2RdKRsbB7GUuf13z5iSgeKG1G614k8fbAgXQTjnjiQXwX0dy32kpgUizkzKdKxhz3Fisk97b1TbmdwBE9OrLmnug7q29Z-U39bv3LfKek-zhktuYWN2OZ9FG5c7RoUYw6pPCjGvCBOTUFpVEncpMICHhCmb068zwhgcKc0au29LCAyKwcaKv9tJPT45RRuxAW3NM9sP4eZQDqo5RfsPSffkmK7fSAvdu4rzm8hPGjweJkbyqWJYmt2mM");'></div>
                        </div>
                        <div class="md:hidden flex items-center">
                            <button class="text-[#111418] dark:text-white p-2">
                                <span class="material-symbols-outlined">menu</span>
                            </button>
                        </div>
                    </header>
                </div>
            </div>

            <div class="w-full flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1 px-4 lg:px-10">
                    <div class="flex flex-wrap gap-2 py-4">
                        <a class="text-[#617589] dark:text-gray-400 hover:text-primary text-sm font-medium leading-normal" href="#">Beranda</a>
                        <span class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal">/</span>
                        <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Daftar Tugas</span>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                        <div class="lg:col-span-2 flex flex-col justify-center">
                            <h1 class="text-[#111418] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em] mb-2">Daftar Tugas Kelas</h1>
                            <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Kelola dan pantau semua tugas sekolahmu di sini. Pastikan tidak ada yang terlewat!</p>
                        </div>
                        <div class="lg:col-span-1 bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] p-5 shadow-sm">
                            <h3 class="text-sm font-bold text-[#617589] dark:text-gray-400 uppercase tracking-wider mb-4">Ringkasan Tugas</h3>
                            <div class="flex justify-between items-center text-center">
                                <div class="flex flex-col">
                                    <span class="text-2xl font-bold text-orange-500">5</span>
                                    <span class="text-xs text-[#617589] dark:text-gray-400">Belum Selesai</span>
                                </div>
                                <div class="w-px h-8 bg-[#dbe0e6] dark:bg-[#2a3b4c]"></div>
                                <div class="flex flex-col">
                                    <span class="text-2xl font-bold text-green-500">12</span>
                                    <span class="text-xs text-[#617589] dark:text-gray-400">Selesai</span>
                                </div>
                                <div class="w-px h-8 bg-[#dbe0e6] dark:bg-[#2a3b4c]"></div>
                                <div class="flex flex-col">
                                    <span class="text-2xl font-bold text-red-500">1</span>
                                    <span class="text-xs text-[#617589] dark:text-gray-400">Terlambat</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] p-4 mb-6 shadow-sm flex flex-col md:flex-row gap-4 items-center justify-between">
                        <div class="flex gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-hide">
                            <button class="px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium whitespace-nowrap transition-colors">Semua</button>
                            <button class="px-4 py-2 rounded-lg bg-transparent hover:bg-[#f0f2f4] dark:hover:bg-[#2a3b4c] text-[#617589] dark:text-gray-300 text-sm font-medium whitespace-nowrap transition-colors">Belum Selesai</button>
                            <button class="px-4 py-2 rounded-lg bg-transparent hover:bg-[#f0f2f4] dark:hover:bg-[#2a3b4c] text-[#617589] dark:text-gray-300 text-sm font-medium whitespace-nowrap transition-colors">Selesai</button>
                            <button class="px-4 py-2 rounded-lg bg-transparent hover:bg-[#f0f2f4] dark:hover:bg-[#2a3b4c] text-[#617589] dark:text-gray-300 text-sm font-medium whitespace-nowrap transition-colors">Terlambat</button>
                        </div>
                        <div class="flex w-full md:w-auto gap-3">
                            <div class="relative flex-1 md:w-64">
                                <span class="material-symbols-outlined absolute left-3 top-2.5 text-[#9ca3af]">search</span>
                                <input class="w-full pl-10 pr-4 py-2 rounded-lg border border-[#dbe0e6] dark:border-[#2a3b4c] bg-white dark:bg-[#101922] text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 text-[#111418] dark:text-white placeholder-[#9ca3af]" placeholder="Cari tugas..." type="text" />
                            </div>
                            <div class="relative">
                                <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-[#dbe0e6] dark:border-[#2a3b4c] bg-white dark:bg-[#101922] text-sm font-medium text-[#111418] dark:text-white hover:bg-[#f0f2f4] dark:hover:bg-[#2a3b4c] transition-colors">
                                    <span class="material-symbols-outlined text-lg">sort</span>
                                    <span class="hidden sm:inline">Urutkan</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden hover:shadow-md transition-shadow">
                            <div class="relative h-32 w-full bg-cover bg-center" data-alt="Abstract colorful geometric pattern background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD4cfGDFA8ZC8UngW6thInUwXsuv35b6XFIX2FW0qsBLlNZaQJBDo6khTIxIBY2YLlObGmLbBg93qxbPonXXEtajUywb5VZvIoa9hicOz8nflp9cIdk9vu_FLNW_TnvABvRmJ8J7qecILYqZGADMPDJs57u7X_pMrg0b5UwsevTTy6CSDLgA6ZWtf9ZqwfqvmLjJMwYUa4A25uMkfLV7muIA9BysOtKnl9aTId-8zkWYA2JNZtCHcppK_7ywbYJxZD5rzknOJTz3Qs");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-orange-100 text-orange-700 dark:bg-orange-900/40 dark:text-orange-300 text-xs font-bold px-2 py-1 rounded">IPA</span>
                                    <span class="bg-white/90 dark:bg-black/60 backdrop-blur-sm text-[#111418] dark:text-white text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px] text-orange-500">warning</span> Besok
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight group-hover:text-primary transition-colors">Proyek Ekosistem</h3>
                                    <input class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1" type="checkbox" />
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">Buat diorama ekosistem hutan hujan tropis menggunakan bahan daur ulang. Sertakan label nama hewan dan tumbuhan.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-[#617589] dark:text-gray-400">
                                        <span class="material-symbols-outlined text-base">calendar_month</span>
                                        <span>15 Okt, 08:00</span>
                                    </div>
                                    <span class="text-xs font-medium text-orange-600 dark:text-orange-400 bg-orange-50 dark:bg-orange-900/20 px-2 py-1 rounded-full">Belum Selesai</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden hover:shadow-md transition-shadow relative">
                            <div class="absolute top-0 right-0 z-10">
                                <div class="bg-red-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-lg shadow-sm">TERLAMBAT</div>
                            </div>
                            <div class="relative h-32 w-full bg-cover bg-center" data-alt="Abstract math equations and geometric shapes" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBQE9JK0xBQYinv5ekxLBmsDcgGHoX6DrEHldmA_pEG1CzjvSI31ZoiI6eLnuEh7XP7YfQV6wEzmnXPdkiCnrTp0DR2yvXKxvYDk0jR1UgmuPKIONMaRcTNVVdkV7m4Q_3gPh3WzKAcGMDQ3lBxMbzoOTA0MlaHMiDOgZWxuP_k0yHsWMWaeuT-LV0XtHnIHJTqysqvUZDqoFg_yq0srdOe87461X7x7fwjdkq-8OB5ATDYGO-UmkKq0cadAA2ldXDq0rAacCF1YlE");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-blue-100 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300 text-xs font-bold px-2 py-1 rounded">Matematika</span>
                                    <span class="bg-red-100 dark:bg-red-900/60 backdrop-blur-sm text-red-700 dark:text-red-200 text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">error</span> Lewat 2 Hari
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight group-hover:text-primary transition-colors">Latihan Soal Aljabar</h3>
                                    <input class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1" type="checkbox" />
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">Kerjakan soal halaman 45 nomor 1 sampai 10 di buku paket. Tulis cara pengerjaannya lengkap di buku tulis.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-red-600 dark:text-red-400">
                                        <span class="material-symbols-outlined text-base">calendar_month</span>
                                        <span>12 Okt, 23:59</span>
                                    </div>
                                    <span class="text-xs font-medium text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20 px-2 py-1 rounded-full">Terlambat</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden hover:shadow-md transition-shadow">
                            <div class="relative h-32 w-full bg-cover bg-center" data-alt="Stack of old history books" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDVg3NAauFEi-GJMPgc7KorkXn70aU_QN14-IoypQ6TWm-t1RXkVi5RqixE6zd_TCvBjoZCHRAh5MKRuxmm0k3LtqHe-h56WCReheC93yn5PFgR9glEZNFF44Md9s84N5bKiO3P-3kMJNTgIc8diu7rP52cE-GG0zsnESWvsTLuwrnP-g-3T-7ItJIHrdbswg9s5fAFVdWJ_oFbQJ2D7TTHUVsIOuHUjfZ9jsjnPUZO-KHcjUyWuZZ_tB0cJ6dPGHeyU_xGHCFCuYg");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-yellow-100 text-yellow-800 dark:bg-yellow-900/40 dark:text-yellow-300 text-xs font-bold px-2 py-1 rounded">Sejarah</span>
                                    <span class="bg-white/90 dark:bg-black/60 backdrop-blur-sm text-[#111418] dark:text-white text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
                                        3 Hari Lagi
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight group-hover:text-primary transition-colors">Makalah Perang Dunia II</h3>
                                    <input class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1" type="checkbox" />
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">Buat makalah singkat mengenai dampak Perang Dunia II terhadap kemerdekaan Indonesia. Minimal 5 halaman.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-[#617589] dark:text-gray-400">
                                        <span class="material-symbols-outlined text-base">calendar_month</span>
                                        <span>18 Okt, 12:00</span>
                                    </div>
                                    <span class="text-xs font-medium text-[#617589] dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full">Belum Selesai</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden opacity-75 hover:opacity-100 transition-opacity">
                            <div class="relative h-32 w-full bg-cover bg-center grayscale" data-alt="English dictionary close up" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAV8HOSEKkaFxyFWFgWP7jwDIjo1We3o-gze5HkYWtQ7ybBxcdBrI6oiYGzCohKGf49RmhNA20atANzBy2Ow6GE1qEwtETpbRA_dH5s00caO78n8gnXzqVibh6bKMg3YEZM49QFEHJ0YPySumMKtij6g4fbAlJiyj3a_pgf--nLRJJuPRUX9mgCdQPCxq5q64mWWtGug-h8UCCoENNi7YhTNhmSje9b_gb7Ni72JYq8C47oLkGMAOTGjP4o467XRTOSxHODJU32CAk");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute inset-0 bg-primary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-white text-6xl drop-shadow-lg">check_circle</span>
                                </div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-300 text-xs font-bold px-2 py-1 rounded">B. Inggris</span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#617589] dark:text-gray-400 line-through leading-tight">Vocabulary Week 5</h3>
                                    <input checked="" class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1 accent-primary" type="checkbox" />
                                </div>
                                <p class="text-[#9ca3af] dark:text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">Hafalkan 20 kosakata baru dari Chapter 5 dan buat kalimat untuk masing-masing kata.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-[#9ca3af] dark:text-gray-500">
                                        <span class="material-symbols-outlined text-base">event_available</span>
                                        <span>Selesai: 10 Okt</span>
                                    </div>
                                    <span class="text-xs font-bold text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">check</span> Selesai
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden hover:shadow-md transition-shadow">
                            <div class="relative h-32 w-full bg-cover bg-center" data-alt="Chemistry laboratory glassware" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCCbvNYHV1JoHHZrC9otAawnt-wYTeIX1jqrWucIHTUPaVwDj3ydDR24nXV2XfnQSw7qP358SWkuN-uCoadJ3skXssgkjhpwsIhSIy4NhsRRM7iMgP5iKpnbMIK83sXZf-vbCi6GjZw4I7fxRgBt0aXOETFl1mdmSyABmPoxA-EPtToesuEk_heS7BL0SUA0QT_1UlGxdTWqB3cUsYLfzamV2pDtDvGblKmA3dRmWQRYkZaJs0UTXanHeoGpydbRPZ4oya3ib8OHNk");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-purple-100 text-purple-800 dark:bg-purple-900/40 dark:text-purple-300 text-xs font-bold px-2 py-1 rounded">Kimia</span>
                                    <span class="bg-white/90 dark:bg-black/60 backdrop-blur-sm text-[#111418] dark:text-white text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
                                        5 Hari Lagi
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#111418] dark:text-white leading-tight group-hover:text-primary transition-colors">Laporan Praktikum Asam Basa</h3>
                                    <input class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1" type="checkbox" />
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">Kumpulkan laporan hasil praktikum titrasi asam basa minggu lalu. Format laporan sesuai standar.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-[#617589] dark:text-gray-400">
                                        <span class="material-symbols-outlined text-base">calendar_month</span>
                                        <span>20 Okt, 10:00</span>
                                    </div>
                                    <span class="text-xs font-medium text-[#617589] dark:text-gray-400 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full">Belum Selesai</span>
                                </div>
                            </div>
                        </div>

                        <div class="group flex flex-col bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-[#2a3b4c] overflow-hidden opacity-75 hover:opacity-100 transition-opacity">
                            <div class="relative h-32 w-full bg-cover bg-center grayscale" data-alt="Canvas and paint brushes for art class" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBhHTvRPSxg--wazaLFXeLkBC5GcgB2QmBEP4IXiu8AY_EJPzU_J-cfkzAqxVkpGE2S94l9y5ZvI9Vfl-TXlar2RzcxhdBfX0mTex3jAqtx7-vIzSkVtGYedmWl2mEJTZk5g27M6F9eIV7CY37YS3Y2IOACD5OTLR8WuF60KmGvej6_0gs8pPa504CInaUDNAHpruTguer_D1MWRn8vw2CWcioxhlwMy45_EMFoyZcnkbuPVPNm4L5dP4K962KUTILQ_GB5c1qya3c");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute inset-0 bg-primary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-white text-6xl drop-shadow-lg">check_circle</span>
                                </div>
                                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-end">
                                    <span class="bg-pink-100 text-pink-700 dark:bg-pink-900/40 dark:text-pink-300 text-xs font-bold px-2 py-1 rounded">Seni Budaya</span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <div class="flex justify-between items-start gap-2 mb-2">
                                    <h3 class="text-lg font-bold text-[#617589] dark:text-gray-400 line-through leading-tight">Sketsa Pemandangan</h3>
                                    <input checked="" class="size-5 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer mt-1 accent-primary" type="checkbox" />
                                </div>
                                <p class="text-[#9ca3af] dark:text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">Kumpulkan sketsa pemandangan alam menggunakan pensil 2B di kertas A3.</p>
                                <div class="mt-auto pt-4 border-t border-[#f0f2f4] dark:border-[#2a3b4c] flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-[#9ca3af] dark:text-gray-500">
                                        <span class="material-symbols-outlined text-base">event_available</span>
                                        <span>Selesai: 09 Okt</span>
                                    </div>
                                    <span class="text-xs font-bold text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">check</span> Selesai
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-10 mb-10">
                        <button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            Lihat Tugas Lainnya <span class="material-symbols-outlined text-lg">arrow_downward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>