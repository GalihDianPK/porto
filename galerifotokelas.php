<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Galeri Foto Kelas - XII IPA 1</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script>
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
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }

        /* Fade in animation for modal */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-animate {
            animation: fadeIn 0.2s ease-out;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white transition-colors duration-200">
    <header class="sticky top-0 z-50 w-full bg-white dark:bg-[#1A2633] border-b border-[#f0f2f4] dark:border-[#2a3b4d]">
        <div class="px-4 md:px-10 py-3 flex items-center justify-between max-w-[1280px] mx-auto">
            <div class="flex items-center gap-4">
                <div class="size-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-[24px]">school</span>
                </div>
                <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] dark:text-white">Kelas XII IPA 1</h2>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-300" href="#">Jadwal</a>
                <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-300" href="#">Tugas</a>
                <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-300" href="#">Pengumuman</a>
                <a class="text-sm font-bold text-primary" href="#">Galeri</a>
                <a class="text-sm font-medium hover:text-primary transition-colors dark:text-gray-300" href="#">Kontak</a>
            </nav>
            <div class="flex items-center gap-4">
                <button class="md:hidden p-2">
                    <span class="material-symbols-outlined dark:text-white">menu</span>
                </button>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="User profile picture placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCmAykOT8_46tYZoR9WD0sjR13k55Km3Cuh_3h3FQYXekRqg_rntvFn2cx63NQkjtUGhEt_76f2ypV-eWHbYs-lzch1Be6TstSX3piS70VfkXztYa2rqOyNJ8rnKFHAuaK1p_07d2CDSiAubFvzaVPocs5cjenBkP0Acg-Muqq4Bzrr94khxrH-eX7GGz8WCcCQRPwlYsnmri-m_dCJY2WX7N37pJPWg3sYxWEJcFPfOXxAK8g467F7g0iGqRi64JpmtLMrl7a_Lp0");'>
                </div>
            </div>
        </div>
    </header>

    <main class="flex flex-col items-center w-full min-h-screen pb-20">
        <div class="w-full max-w-[1280px] px-4 md:px-10 pt-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
                <div class="flex flex-col gap-2 max-w-2xl">
                    <h1 class="text-3xl md:text-4xl font-black leading-tight tracking-tight dark:text-white">
                        Galeri Foto Kelas
                    </h1>
                    <p class="text-[#617589] dark:text-gray-400 text-base md:text-lg">
                        Koleksi momen terbaik dari kegiatan belajar, acara sekolah, dan kebersamaan kita sepanjang tahun.
                    </p>
                </div>
                <button class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg font-medium flex items-center gap-2 transition-all shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-[20px]">add_a_photo</span>
                    <span>Upload Foto</span>
                </button>
            </div>

            <div class="flex items-center gap-3 overflow-x-auto pb-4 mb-6 scrollbar-hide">
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary text-white px-5 shadow-md shadow-primary/20 transition-transform active:scale-95">
                    <span class="text-sm font-medium">Semua</span>
                </button>
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-[#23303e] border border-[#e5e7eb] dark:border-[#2a3b4d] px-5 hover:bg-gray-50 dark:hover:bg-[#2a3b4d] transition-colors">
                    <span class="text-sm font-medium dark:text-gray-200">Study Tour</span>
                </button>
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-[#23303e] border border-[#e5e7eb] dark:border-[#2a3b4d] px-5 hover:bg-gray-50 dark:hover:bg-[#2a3b4d] transition-colors">
                    <span class="text-sm font-medium dark:text-gray-200">Olahraga</span>
                </button>
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-[#23303e] border border-[#e5e7eb] dark:border-[#2a3b4d] px-5 hover:bg-gray-50 dark:hover:bg-[#2a3b4d] transition-colors">
                    <span class="text-sm font-medium dark:text-gray-200">Projek Kelas</span>
                </button>
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-[#23303e] border border-[#e5e7eb] dark:border-[#2a3b4d] px-5 hover:bg-gray-50 dark:hover:bg-[#2a3b4d] transition-colors">
                    <span class="text-sm font-medium dark:text-gray-200">Ulang Tahun</span>
                </button>
                <button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-full bg-white dark:bg-[#23303e] border border-[#e5e7eb] dark:border-[#2a3b4d] px-5 hover:bg-gray-50 dark:hover:bg-[#2a3b4d] transition-colors">
                    <span class="text-sm font-medium dark:text-gray-200">Lainnya</span>
                </button>
            </div>

            <div class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">
                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-[4/3] bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Students posing in front of a temple during study tour" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsVyv7hVcwbV6stPfuXAsi5BqH2haWzCydePug4zn4nGptji_QCDLXyV0bH48g4nIPHupYQIBhkom2O1fexjYoslrzMuuoOJnDwPSMsx5C-hbOINz4ZNeXXJyI6qTXU4mYK94mfPeg6TGvu9Nc4yKdPA7NcVdA9S74CssgR-iF6c9V2aYb_XFxlaDtLMexgGKEKKWql5lrEYh8c8oFTn-mobK6Ak6DzFagwY6inYOs7HxO4tMM4Cq3pDXh8KhTMlbQfM0kP6_oZmE");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Study Tour Borobudur</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 12 Mei 2023</span>
                            <span class="bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-2 py-0.5 rounded text-xs font-medium">Jalan-jalan</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-[3/4] bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Detailed science project presentation" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDyhIyGqpO1X9PaCXXfJxkx3TRn0qBy6G2ZK_V4alFxTRRFX9CzG4xd9i53wl4lHmlHO-X0Jcg7taFkwBXr7rDXBXq6ynxzzIjIGfLsH8nlAMsXT3PRaXAjgJIi2EQdDv4dfuciJ5JhQKVzlAGJCfY-NTmO5UNbC55EDCsWpI97YCX3YmMIRyqFbGuc9NaU2D3riSUgrFpC3ExGnZPTwkHRJK_zWLFMVwMiqMHBjl8Ri2zIAdz_Goeeoe9HfqtNxsDR4NG7VJrifOk");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Presentasi Biologi</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 20 Juli 2023</span>
                            <span class="bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-300 px-2 py-0.5 rounded text-xs font-medium">Tugas</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-video bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Class futsal team celebrating victory" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKkPi1KIHFuwk778reNIH_lgeUlffS8wykk-Vw9Q52Si6n45SJpof-basHdjOmRGAI7BjSuZOtq24QeA7PVHb16m-sIkqlL3G_-KOqJhuodZsTYz0vDtcEIkikFTRhFSDDmOGg1FxhGC-nuTOzMs9Uzsxrc_TA5DJv6pSqYw4Fvt1BQr3ABaPC7yAhMab3XMnenmTWF_5GBc0uLGPBUsBe3X9NHEEWA0jc8cMUPx1CTew1yClq5VfgL4MhhwIdVRIRpoRiNTGJ46Q");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Juara 1 Futsal</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 15 Juni 2023</span>
                            <span class="bg-orange-50 dark:bg-orange-900/30 text-orange-600 dark:text-orange-300 px-2 py-0.5 rounded text-xs font-medium">Prestasi</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Students cleaning the classroom together" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAaLmcOrQLtVpMlQJ2BravQWnbO96f-_ctZazKT4GMndrZdEYXy5sQ6IbEnLCLqQqzmkAMcYGh9wE9HyMdt0VglkrH_Lxk-gmE6eSVCyRChD0s5-UQx1Nheos9hpu50gkc9oNp1fkbBisyRZKEo2Sx5cOZbZOp6Ijs8UMqdP39z5znED42Gc1hry1MegsDW6eci0HUJM01fP9o-KPOUyIPmz5LYV-5NOY92mBgQ3J8maXHQKaGl6OxO1s7iDatHWQf7Zbm8fiEM3_0");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Jumat Bersih</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 1 Sept 2023</span>
                            <span class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-2 py-0.5 rounded text-xs font-medium">Sosial</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-[9/16] bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Student performing a traditional dance on stage" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA09wRoWgszrvq_ayhu_BqRJ4Lp8LQZaoEQAmipepCQTi5vQyxIQ0N998hWuyGARLMoA7QRAz8qZDnaVhWpnGiyf9o1jLvNaD8kr5CQBR8vgftmuccCCF6pEHEW06ocaJCPKIn48tfGKrZFP-4neZHyD9LnRoGs9tvHEj3qmICDbLbO2r8XICAlyICWUeSAYIO0qy1OoS6up6f7o7nmRCpEksY1nbD3DVXcOl5d7oWxcL-7pvxStoGmdBHZaSY1cUxw1B95QDDPL1I");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Pentas Seni Tahunan</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 10 Okt 2023</span>
                            <span class="bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-300 px-2 py-0.5 rounded text-xs font-medium">Acara</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-video bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Group of friends celebrating a birthday with cake" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBjnkRIBfUoOs4d9j87UAtocp8tpAvd6bQjmF4TWQAkqgb8xtTOfOIM7_Mi4GvqRR8ZRO1gyMQYBA48j9WWuVwU3ADlKTw47_NAGqP8Ui2hdpTZaaNDzL5fpgvm9vjCi5Mma7T1myE2u9RjK-b1w4GTxbp4K9z2sIXZQj4NUPmaB1N2Ku5bxTR06gAfWSDw-9fCViy2BsFSLLucisHu2Aext-28mgP4akXnkBC7qpQg6xXCAKuIjrx12xrj3dV_UO6ANWSRSyMg6c");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Ulang Tahun Budi</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 22 Agt 2023</span>
                            <span class="bg-pink-50 dark:bg-pink-900/30 text-pink-600 dark:text-pink-300 px-2 py-0.5 rounded text-xs font-medium">Pesta</span>
                        </div>
                    </div>
                </div>

                <div class="group relative break-inside-avoid rounded-xl bg-white dark:bg-[#1A2633] p-3 shadow-sm border border-[#f0f2f4] dark:border-[#2a3b4d] hover:shadow-lg transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="w-full aspect-[4/3] bg-gray-200 dark:bg-gray-700 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Students listening attentively in class" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCcLlzk2y9S3lGS1_qbWEmVF9wUSl7pyIOlcgZMIWl2iACESfxRcPAgOgGTUA2I2im1IFtYHPWjnRiC-8IXsoDLwHE04c2fj0J2AhcxwHuim6eGNFr1ExnWpAwflOYhqQBL88n2w2tOvyLpuLv4Zz1B_rS9SAAEK2iGfAjKMmJfpqZhU4SzBtEXEdT4xxGmcDStFnh2PgEsVtO-iGmx5d9rkZOcK0p5iDKNokZToFeRvXN3P3xgh4rH0JSZ5od_C822DQFoJmzQEb0");'>
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 backdrop-blur-sm p-1.5 rounded-full text-gray-800 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-3 pb-1">
                        <h3 class="font-bold text-[#111418] dark:text-white text-lg leading-tight mb-1">Kelas Tambahan</h3>
                        <div class="flex items-center justify-between text-sm text-[#617589] dark:text-gray-400">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> 5 Nov 2023</span>
                            <span class="bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-2 py-0.5 rounded text-xs font-medium">Akademik</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center p-8 mt-6">
                <nav class="flex items-center gap-2">
                    <a class="flex size-10 items-center justify-center rounded-lg border border-transparent text-[#111418] hover:bg-gray-100 dark:text-white dark:hover:bg-[#2a3b4d] disabled:opacity-50" href="#">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </a>
                    <a class="flex size-10 items-center justify-center text-sm font-bold rounded-lg bg-primary text-white shadow-md shadow-primary/30" href="#">1</a>
                    <a class="flex size-10 items-center justify-center text-sm font-medium rounded-lg text-[#111418] hover:bg-gray-100 dark:text-white dark:hover:bg-[#2a3b4d] transition-colors" href="#">2</a>
                    <a class="flex size-10 items-center justify-center text-sm font-medium rounded-lg text-[#111418] hover:bg-gray-100 dark:text-white dark:hover:bg-[#2a3b4d] transition-colors" href="#">3</a>
                    <span class="flex size-10 items-center justify-center text-[#111418] dark:text-white">...</span>
                    <a class="flex size-10 items-center justify-center rounded-lg border border-transparent text-[#111418] hover:bg-gray-100 dark:text-white dark:hover:bg-[#2a3b4d]" href="#">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </a>
                </nav>
            </div>
        </div>
    </main>

    <footer class="bg-white dark:bg-[#1A2633] border-t border-[#f0f2f4] dark:border-[#2a3b4d] py-10 w-full">
        <div class="max-w-[1280px] mx-auto px-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-3">
                    <div class="size-8 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[20px]">school</span>
                    </div>
                    <span class="font-bold text-[#111418] dark:text-white text-lg">Kelas XII IPA 1</span>
                </div>
                <div class="text-[#617589] dark:text-gray-400 text-sm text-center md:text-right">
                    © 2024 SMA Negeri 1 Bangsa. All rights reserved.<br />
                    Dibuat dengan ❤️ oleh Tim IT Kelas
                </div>
            </div>
        </div>
    </footer>

    <div class="fixed inset-0 z-[100] bg-black/90 hidden items-center justify-center p-4 backdrop-blur-sm modal-animate group" id="lightbox">
        <button class="absolute top-4 right-4 text-white hover:text-gray-300 p-2 z-50">
            <span class="material-symbols-outlined text-[32px]">close</span>
        </button>
        <button class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:bg-white/10 p-3 rounded-full transition-colors hidden md:block">
            <span class="material-symbols-outlined text-[40px]">chevron_left</span>
        </button>
        <div class="relative max-w-5xl max-h-[85vh] w-full flex flex-col items-center">
            <img alt="Full screen view" class="max-h-[80vh] w-auto object-contain rounded-lg shadow-2xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPZIYT_KfGS6W3XSn-2ntMFJcN_I0qw6Dpxkm1XAHSOiT21-s5BhHmgWiY7z1K9lToOLs3RHgrzVk2yTooWQRUVugzzXmlxb4ZZAuJE29cdhl9eEbY_3_ZHtW_MIdyupq1U1jQa1x6IWO8yMbvJKVLryRLzLk8BpepfCUfpdKWY-teOEQq_1-xC324Kv6fT7PhhpVgSiko4nN4EtL9E21PeRTR1bUg39Loh5_UxYAYqcM5UxNWUrB3CBgB908cclYBGbEI7mObK9Q" />
            <div class="absolute bottom-4 left-0 right-0 text-center md:text-left md:bottom-auto md:-bottom-12 w-full flex justify-between items-center px-4 md:px-0">
                <div class="text-white drop-shadow-md">
                    <h3 class="text-xl font-bold">Study Tour Borobudur</h3>
                    <p class="text-sm text-gray-300">12 Mei 2023 • Diambil oleh Budi</p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-white/10 hover:bg-white/20 text-white p-2 rounded-lg backdrop-blur-sm transition-colors" title="Download">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 text-white p-2 rounded-lg backdrop-blur-sm transition-colors" title="Share">
                        <span class="material-symbols-outlined text-[20px]">share</span>
                    </button>
                </div>
            </div>
        </div>
        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:bg-white/10 p-3 rounded-full transition-colors hidden md:block">
            <span class="material-symbols-outlined text-[40px]">chevron_right</span>
        </button>
    </div>
</body>
</html>