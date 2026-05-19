<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homestay</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-950">

    <!-- HEADER -->
    <header class="bg-slate-900 border-b border-slate-800">

        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center h-20">

                <!-- LOGO -->
                <a href="{{ route('site.home') }}"
                    class="text-2xl font-bold text-white">
                    HOMESTAY
                </a>

                <!-- MENU -->
                <nav class="flex items-center gap-6">

                    <a href="{{ route('site.home') }}"
                        class="text-slate-300 hover:text-white transition">
                        Trang chủ
                    </a>

                    <a href="{{ route('homestay.index') }}"
                        class="text-slate-300 hover:text-white transition">
                        Homestay
                    </a>

                    <a href="{{ route('login') }}"
                        class="text-slate-300 hover:text-white transition">
                        Đăng nhập
                    </a>

                    <a href="{{ route('register') }}"
                        class="bg-blue-600 hover:bg-blue-700 transition px-5 py-2 rounded-full text-white">
                        Đăng ký
                    </a>

                </nav>

            </div>

        </div>

    </header>
 


    <!-- CONTENT -->
    <main>

        {{ $slot }}

    </main>

</body>

</html>