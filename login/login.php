<?php
   require '../function.php';

   if(isset($_POST['register'])){
        $namalengkap = $_POST['namalengkap'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $password = $hash;

        //? ngambil dan cek databse yang ada
        $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

        //? hitung jumlah data
        $hitung = mysqli_num_rows($cekdatabase);

        if(hitung > 0){
            $_SESSION['log'] = 'True';
            header('Location: dashboard.php');
        } else {
            header('Location: login.php');
        }
   };
?>

<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Daftar Akun - Portal Kelas</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display min-h-screen flex flex-col">
    <div class="layout-container flex h-full grow flex-col">
        <header class="sticky top-0 z-50 flex items-center justify-between border-b border-[#f0f2f4] dark:border-[#2b3b4b] bg-white dark:bg-[#1a2632] px-6 py-3 lg:px-10 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="size-10 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h2 class="text-lg font-bold">Kelas 2DC02</h2>
            </div>
            <nav class="hidden md:flex items-center gap-9">
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Beranda</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Tentang Kami</a>
            </nav>
        </header>

        <main class="flex flex-1 justify-center py-10 px-4">
            <div class="layout-content-container flex flex-col md:flex-row max-w-[960px] w-full gap-8 lg:gap-16 items-start">
                
                <div class="hidden md:flex flex-col flex-1 gap-6 pt-2">
                    <h1 class="text-4xl lg:text-5xl font-black leading-tight">Selamat Datang di Portal Kelas</h1>
                    <p class="text-[#617589] dark:text-[#9ca3af] text-lg">Satu tempat untuk semua kebutuhan kelas kita. Jadwal, tugas, dan kenangan ada di sini.</p>
                    <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-lg group">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuClUNdukIGnMXRTpH0vswA5dhiqYJT8YGisry6u6nVoXY4ni90h46eP9oOhTN3N-Q_SQpIqLlR2RyVj51bMLtq9B5bQCD0DvquYxvWEf7vsGFB0tYL9BlYg0fk2ZLnbDjbngP8iKLybrarJiOZ27JhYdhLT3bSAEw3_DxPxrqXsHkeCDQQCpgSDB8p6WDYCBJctJMkiAx95a-MD0q6MXyFmKSgS4zwTCeuPi9_Ax6UMZ0c6aijNhiAnkm2Ek3kpvwddNgJV5nz1pdg" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Siswa belajar" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-[420px] shrink-0">
                    <div class="bg-white dark:bg-[#1a2632] rounded-2xl shadow-sm border border-[#e5e7eb] dark:border-[#2b3b4b] p-6 sm:p-8">
                        <div class="mb-6">
                            <h2 class="text-2xl font-bold mb-2">Buat Akun Baru</h2>
                            <p class="text-[#617589] text-sm">Lengkapi data diri untuk bergabung.</p>
                        </div>
                        <form class="flex flex-col gap-4">
                            <div>
                                <label class="text-sm font-medium block mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full rounded-lg border-[#dbe0e6] dark:bg-[#111827] focus:ring-primary/20 focus:border-primary h-12 px-4" placeholder="Nama lengkap Anda" required />
                            </div>
                            <div>
                                <label class="text-sm font-medium block mb-2">Email</label>
                                <input type="email" class="w-full rounded-lg border-[#dbe0e6] dark:bg-[#111827] focus:ring-primary/20 focus:border-primary h-12 px-4" placeholder="contoh@email.com" required/>
                            </div>
                            <div>
                                <label class="text-sm font-medium block mb-2">Kata Sandi</label>
                                <input type="password" class="w-full rounded-lg border-[#dbe0e6] dark:bg-[#111827] focus:ring-primary/20 focus:border-primary h-12 px-4" placeholder="Minimal 8 karakter" required/>
                            </div>
                            <button href="dashboard.php" class="w-full h-12 bg-primary text-white font-bold rounded-lg hover:bg-blue-600 transition-all shadow-md mt-2">Daftar Sekarang</button>
                        </form>
                        <p class="text-center text-sm text-[#617589] mt-4">Sudah punya akun? <a href="#" class="text-primary font-bold hover:underline">Masuk</a></p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>