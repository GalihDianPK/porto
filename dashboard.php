<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Kelas 6A</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
        /* Custom scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-hidden">
    <div class="flex h-screen w-full">
        <aside class="hidden md:flex flex-col w-64 bg-white dark:bg-[#1a2632] border-r border-[#dbe0e6] dark:border-gray-700 h-full p-4 justify-between">
            <div class="flex flex-col gap-6">
                <div class="flex gap-3 items-center px-2">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full h-12 w-12 shadow-sm" data-alt="School logo abstract shape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBw2PZ2RMsLcbXLEkmbsklSPdQnCCzCgWiCf_YFCCp7iJFIKKktr1x-s5E8Jr2w4sRJp0vPL9fGtBi4xURtOl_3egwNXwJHtWpKuGjzfOTUdPra4_L5Y3nAra-CD4iCslwDqIQTsmjyYPql6UdjKIdrgfqrEh0b6w7zvHhIPz3VTsydXUWEyoPO0NYjQB6wgnEE4Zty_mgoxBSIIYbFSWryKmmysbci-_aob-FKd3btilHJUU4m_waWwVc0MVPQeCDoYHmqmS0t_UY");'></div>
                    <div class="flex flex-col">
                        <h1 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Kelas 6A</h1>
                        <p class="text-[#617589] dark:text-gray-400 text-xs font-medium">SD Harapan Bangsa</p>
                    </div>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-3 py-3 rounded-xl bg-primary/10 text-primary" href="#">
                        <span class="material-symbols-outlined text-[24px]">dashboard</span>
                        <p class="text-sm font-bold leading-normal">Dashboard</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-300 transition-colors" href="#">
                        <span class="material-symbols-outlined text-[24px]">calendar_month</span>
                        <p class="text-sm font-medium leading-normal">Jadwal</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-300 transition-colors" href="#">
                        <span class="material-symbols-outlined text-[24px]">assignment</span>
                        <p class="text-sm font-medium leading-normal">Tugas</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-300 transition-colors" href="#">
                        <span class="material-symbols-outlined text-[24px]">campaign</span>
                        <p class="text-sm font-medium leading-normal">Pengumuman</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-[#617589] hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-300 transition-colors" href="#">
                        <span class="material-symbols-outlined text-[24px]">photo_library</span>
                        <p class="text-sm font-medium leading-normal">Galeri</p>
                    </a>
                </nav>
            </div>
            <div class="flex items-center gap-3 px-3 py-3 border-t border-[#dbe0e6] dark:border-gray-700 mt-auto pt-4">
                <div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 border-2 border-primary" data-alt="User profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrp0B8E8wb_oCF35EptGV1UJeWUukO1dG6cTwlJZNkF4P5p8exUq2EZpRtZBVCWuhms14zcl91i9-rdLtDjxpRjoZohnVxARg7omTLTNiilJ0M9X8VOWaCo-EYqDjxVnHDlYwgNO7BoNWd88gnpmhmAbDXH6t2ufqepsAtxRKHdsp8rQ65W7x3WKk2hjEsQk6ZDjaSYGfUpWQcvW3FyqLx1466zmw3ooFDQcxBnZX8qIxjQtXj8rhrcs4B8sQ87yQxxepq_Z4rs9U");'></div>
                <div class="flex flex-col">
                    <p class="text-[#111418] dark:text-white text-sm font-bold">Budi Santoso</p>
                    <p class="text-[#617589] dark:text-gray-400 text-xs">Siswa</p>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col h-full overflow-hidden relative">
            <header class="md:hidden flex items-center justify-between p-4 bg-white dark:bg-[#1a2632] border-b border-[#dbe0e6]">
                <div class="flex items-center gap-3">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full h-8 w-8" data-alt="School logo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBPy9mQ0t4TP_YaayK4Nm-2tC3Wra3nA2rBPmfYVfq-aYh7szmwfXzgK-JQDu07D_VGCKmI0DOdKe8uDL_j57uNeB8qc1mON1fZ1D5CMTGRNqhJE4kwrKxsoqsz8VwQV7lLeGmZJ2D9OLXfAPtqOQzX-YxE5kD-o-0ch-ihG7L4r-VF_3-9OSdIr0yBqAbBU1kHyDURzqNiwfVAOUSvjrR3ZhytkqnMVwTTu15Qpna4pmbmB7A3SXYvf2ZYmGv_ZkReF20WiYV13-w");'></div>
                    <span class="font-bold">Kelas 6A</span>
                </div>
                <button class="text-[#111418] dark:text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </header>
            <div class="flex-1 overflow-y-auto p-4 md:p-8">
                <div class="max-w-7xl mx-auto flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-wrap items-end justify-between gap-4">
                            <div class="flex flex-col gap-1">
                                <h1 class="text-[#111418] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Selamat Pagi, Budi! 👋</h1>
                                <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Senin, 24 Oktober 2023. Jangan lupa kerjakan PR matematikamu hari ini.</p>
                            </div>
                            <button class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-md shadow-blue-500/20 transition-all flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                Upload Tugas
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                        <div class="xl:col-span-2 flex flex-col gap-6">
                            <div class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-gray-700 shadow-sm overflow-hidden flex flex-col">
                                <div class="px-6 py-5 border-b border-[#dbe0e6] dark:border-gray-700 flex justify-between items-center bg-white dark:bg-[#1a2632]">
                                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Jadwal Hari Ini</h2>
                                    <a class="text-primary text-sm font-bold hover:underline" href="#">Lihat Semua</a>
                                </div>
                                <div class="p-6">
                                    <div class="flex flex-col gap-4">
                                        <div class="flex gap-4 items-center p-4 rounded-xl bg-primary/5 border border-primary/20 relative overflow-hidden group">
                                            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
                                            <div class="bg-white dark:bg-gray-800 p-3 rounded-lg text-primary shadow-sm shrink-0">
                                                <span class="material-symbols-outlined text-[28px]">calculate</span>
                                            </div>
                                            <div class="flex flex-col flex-1">
                                                <div class="flex justify-between items-start">
                                                    <h3 class="text-[#111418] dark:text-white text-base font-bold">Matematika</h3>
                                                    <span class="text-xs font-bold bg-primary text-white px-2 py-1 rounded-full">Sekarang</span>
                                                </div>
                                                <p class="text-[#617589] dark:text-gray-400 text-sm mt-0.5">08:00 - 09:30 • Pak Joyo • Ruang 3</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center p-4 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 border border-transparent hover:border-[#dbe0e6] dark:hover:border-gray-700 transition-all">
                                            <div class="bg-background-light dark:bg-gray-700 p-3 rounded-lg text-[#111418] dark:text-gray-300 shrink-0">
                                                <span class="material-symbols-outlined text-[28px]">menu_book</span>
                                            </div>
                                            <div class="flex flex-col flex-1">
                                                <h3 class="text-[#111418] dark:text-white text-base font-bold">Bahasa Indonesia</h3>
                                                <p class="text-[#617589] dark:text-gray-400 text-sm mt-0.5">10:00 - 11:30 • Bu Sinta • Ruang 3</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center p-4 rounded-xl hover:bg-background-light dark:hover:bg-gray-800 border border-transparent hover:border-[#dbe0e6] dark:hover:border-gray-700 transition-all">
                                            <div class="bg-background-light dark:bg-gray-700 p-3 rounded-lg text-[#111418] dark:text-gray-300 shrink-0">
                                                <span class="material-symbols-outlined text-[28px]">science</span>
                                            </div>
                                            <div class="flex flex-col flex-1">
                                                <h3 class="text-[#111418] dark:text-white text-base font-bold">Ilmu Pengetahuan Alam</h3>
                                                <p class="text-[#617589] dark:text-gray-400 text-sm mt-0.5">13:00 - 14:30 • Pak Budi • Lab IPA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-cover bg-center flex flex-col items-stretch justify-end rounded-xl pt-[140px] shadow-sm relative overflow-hidden group h-full min-h-[250px]" data-alt="Blue abstract geometric background" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.2) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAAWPgcEMNap4qSH9qX2rZeG1esyqPgw_IK85HzaQrU398ZRmC6-V4KmFzD8Zuzu7eALvdSscsYqpEeE5E1Q9G2pZTQPLEoK-PPSLOkoomV79wRiH04zOaOeGfgozXFFWtVofXlVkBlwNi4p4OgSw6eqEiHd612Q7kW0UJ2KdE_UZqn4uU_gxsoWQV0sxesEAqb_DmHWm-Xgz362rEb9RanABkHAtjTcs2KyqK5tWFCHmG6B1LCulVxLlQ2rlF594SCeU8XxAHph3U");'>
                                <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full border border-white/30">
                                    <p class="text-white text-xs font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">campaign</span> Pengumuman
                                    </p>
                                </div>
                                <div class="flex w-full items-end justify-between gap-4 p-6 bg-gradient-to-t from-black/80 to-transparent">
                                    <div class="flex max-w-[480px] flex-1 flex-col gap-2">
                                        <h3 class="text-white tracking-tight text-2xl font-bold leading-tight">Persiapan Ujian Tengah Semester</h3>
                                        <p class="text-gray-200 text-sm font-medium leading-normal line-clamp-2">Harap membawa alat tulis lengkap dan kartu ujian. Ujian akan dimulai serentak pada hari Senin depan.</p>
                                    </div>
                                    <button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-white text-primary hover:bg-gray-100 transition-colors text-sm font-bold leading-normal tracking-[0.015em]">
                                        <span>Baca Detail</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-1 flex flex-col gap-6">
                            <div class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-gray-700 shadow-sm flex flex-col">
                                <div class="px-5 py-5 border-b border-[#dbe0e6] dark:border-gray-700 flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="bg-orange-100 text-orange-600 rounded-md p-1">
                                            <span class="material-symbols-outlined text-[20px] block">assignment_late</span>
                                        </div>
                                        <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Tugas Rumah</h2>
                                    </div>
                                    <span class="bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded-full">3 Pending</span>
                                </div>
                                <div class="p-2">
                                    <label class="flex gap-x-3 p-3 rounded-lg hover:bg-background-light dark:hover:bg-gray-800 transition-colors cursor-pointer group">
                                        <div class="relative flex items-start pt-1">
                                            <input class="peer h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-primary focus:ring-0 focus:ring-offset-0 focus:border-primary cursor-pointer" type="checkbox" />
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <p class="text-[#111418] dark:text-white text-sm font-medium leading-normal peer-checked:line-through peer-checked:text-gray-400">PR Matematika Halaman 45</p>
                                            <p class="text-orange-500 text-xs font-bold">Besok, 08:00</p>
                                        </div>
                                    </label>
                                    <label class="flex gap-x-3 p-3 rounded-lg hover:bg-background-light dark:hover:bg-gray-800 transition-colors cursor-pointer group">
                                        <div class="relative flex items-start pt-1">
                                            <input class="peer h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-primary focus:ring-0 focus:ring-offset-0 focus:border-primary cursor-pointer" type="checkbox" />
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <p class="text-[#111418] dark:text-white text-sm font-medium leading-normal peer-checked:line-through peer-checked:text-gray-400">Proyek Sains: Tumbuh Tumbuhan</p>
                                            <p class="text-[#617589] text-xs font-medium">Jumat, 27 Okt</p>
                                        </div>
                                    </label>
                                    <label class="flex gap-x-3 p-3 rounded-lg hover:bg-background-light dark:hover:bg-gray-800 transition-colors cursor-pointer group">
                                        <div class="relative flex items-start pt-1">
                                            <input class="peer h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-primary focus:ring-0 focus:ring-offset-0 focus:border-primary cursor-pointer" type="checkbox" />
                                        </div>
                                        <div class="flex flex-col gap-1">
                                            <p class="text-[#111418] dark:text-white text-sm font-medium leading-normal peer-checked:line-through peer-checked:text-gray-400">Membaca Bab 3 Sejarah</p>
                                            <p class="text-[#617589] text-xs font-medium">Senin Depan</p>
                                        </div>
                                    </label>
                                </div>
                                <div class="p-3 border-t border-[#dbe0e6] dark:border-gray-700">
                                    <button class="w-full py-2 text-primary text-sm font-bold hover:bg-primary/5 rounded-lg transition-colors">Lihat Semua Tugas</button>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-[#1a2632] rounded-xl border border-[#dbe0e6] dark:border-gray-700 shadow-sm p-5 flex flex-col gap-4">
                                <div class="flex justify-between items-center">
                                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Kegiatan Terbaru</h2>
                                    <button class="text-[#617589] hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined">arrow_forward</span>
                                    </button>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="aspect-square rounded-lg bg-cover bg-center cursor-pointer hover:opacity-90 transition-opacity" data-alt="Kids playing soccer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4NkGrQh0GseIJmfcgKlynyeiwNM_y9zhptD6i94bRxpMMytSjV5SXPw824GnpOq-ibMX6kzRben5iqdnkENwY7qaglm353tkFxYF4w3mqnwdO_rbOQhhBRM3LRbNr-s9QZ_HyeH9YjSIQlsnFWst8IYYvkY8PqFXJ1v6_17Ktcs-L2MiIqo3W32HMezkeHp15oqzkEOt_yd6rVHiXCeBmoxdVewEixDBZGJ5KSd3TrKJsyhnQ5kfD9OKYMHogv6bwx4SNOnQTbsk");'></div>
                                    <div class="aspect-square rounded-lg bg-cover bg-center cursor-pointer hover:opacity-90 transition-opacity" data-alt="Kids reading books together" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBwLx4JLXrIonW3SANELAx3QZj4z2A-VW7ThNK7cU9C_KsKOEGNzBSvy-bebjLMT-0sd99kbV_6FavJXHj6FDu6fNGJUXvjRUvvXyVZ3jorz6j492H68rirSGW_UyUrTdrBzd_yvdHP-mUxADtH5ZTBO8iB0-fWkT4jZ0yYJai1_cwa3yovpoxg2g-2B_uxerzJ7HAsh6u79XdXXMpKTR23kdPj_rsUnwH46YeXPlLPm6x0WiLzdK5xGDrNax1e2LkP9-rLpFCQm1A");'></div>
                                    <div class="aspect-square rounded-lg bg-cover bg-center cursor-pointer hover:opacity-90 transition-opacity" data-alt="Science experiment in class" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQaisz4Z_5GIwz85Lho0gs_gSWfMzin0ssQGb1pJP2X0Wejrao4KwHxZ0gp5NO_STbfoUyYB2TZve8PqXfU5OaB-kdL8_5MgXOPJOJ-TpGTSmbstrL6omd60vlG2v7sPCclzKaen9VyRcuj6XBy_njidWRgzeB89IuTo-eO7CrX-E_B_6fzKbsxvbNsRb3gdqr23cBopnOT2aPvt26Yn-KhmVlzF_ZyWKIWwDD36JrkydDtxFh5MtpiaZKc-2vdKr8kZKhjGlADj4");'></div>
                                    <div class="aspect-square rounded-lg bg-gray-100 flex items-center justify-center cursor-pointer hover:bg-gray-200 text-[#617589]">
                                        <span class="text-sm font-bold">+12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="mt-8 mb-4 text-center">
                        <p class="text-[#617589] dark:text-gray-500 text-sm">© 2023 SD Harapan Bangsa. All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </main>
    </div>
</body>
</html>