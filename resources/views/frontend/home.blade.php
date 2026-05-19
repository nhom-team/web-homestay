<x-layout-customer>

    <!-- HERO -->
    <section class="relative min-h-screen bg-cover bg-center"
        style="background-image:url('https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1600');">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-[#003580]/70"></div>

        <!-- CONTENT -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-4 text-white">

            <!-- TITLE -->
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 text-center drop-shadow-lg">
                Tìm Homestay Lý Tưởng
            </h1>

            <p class="text-lg md:text-xl text-slate-200 mb-10 text-center">
                Khám phá nơi nghỉ dưỡng đẹp và tiện nghi
            </p>

            <!-- SEARCH BOX -->
            <div class="w-full max-w-7xl mx-auto">

                <form
                    class="bg-[#febb02] p-2 rounded-2xl shadow-[0_15px_40px_rgba(0,0,0,0.4)] flex flex-col lg:flex-row gap-2">

                    <!-- LOCATION -->
                    <div class="relative lg:w-[35%]">

                        <div onclick="toggleLocation()"
                            class="bg-white rounded-xl flex items-center gap-4 px-5 py-5 hover:bg-gray-50 transition-all duration-200 cursor-pointer border-2 border-transparent hover:border-blue-400">

                            <div class="text-4xl text-gray-500">
                                🛏
                            </div>

                            <div class="w-full">

                                <p class="text-sm text-gray-500 mb-1 font-medium">
                                    Địa điểm
                                </p>

                                <input type="text" placeholder="Bạn muốn đi đâu?"
                                    class="w-full outline-none text-lg font-bold text-gray-800 placeholder:text-gray-400 bg-transparent">

                            </div>

                        </div>

                        <!-- DROPDOWN -->
                        <div id="locationBox"
                            class="hidden absolute top-full left-0 mt-3 w-full bg-white rounded-3xl shadow-2xl z-50 overflow-hidden text-gray-800">

                            <div class="p-5 hover:bg-gray-100 cursor-pointer border-b transition">
                                📍 TP Hồ Chí Minh
                            </div>

                            <div class="p-5 hover:bg-gray-100 cursor-pointer border-b transition">
                                📍 Vũng Tàu
                            </div>

                            <div class="p-5 hover:bg-gray-100 cursor-pointer border-b transition">
                                📍 Đà Nẵng
                            </div>

                            <div class="p-5 hover:bg-gray-100 cursor-pointer border-b transition">
                                📍 Đà Lạt
                            </div>

                            <div class="p-5 hover:bg-gray-100 cursor-pointer transition">
                                📍 Nha Trang
                            </div>

                        </div>

                    </div>

                    <!-- CHECKIN -->
                    <div class="relative lg:w-[25%]">

                        <div onclick="toggleCalendar()"
                            class="bg-white rounded-xl flex items-center gap-4 px-5 py-5 hover:bg-gray-50 transition-all duration-200 cursor-pointer border-2 border-transparent hover:border-blue-400">

                            <div class="text-4xl text-gray-500">
                                📅
                            </div>

                            <div class="w-full">

                                <p class="text-sm text-gray-500 mb-1 font-medium">
                                    Nhận phòng
                                </p>

                                <input type="text" placeholder="Chọn ngày"
                                    class="w-full outline-none text-lg font-bold text-gray-800 bg-transparent cursor-pointer">

                            </div>

                        </div>

                        <!-- CALENDAR -->
                        <div id="calendarBox"
                            class="hidden absolute top-full left-0 mt-3 bg-white rounded-3xl shadow-2xl z-50 p-6 w-[700px] text-gray-800">

                            <div class="flex items-center justify-between mb-6">

                                <h2 class="text-2xl font-bold">
                                    Chọn ngày
                                </h2>

                                <button type="button" onclick="toggleCalendar()"
                                    class="text-2xl hover:text-red-500 transition">
                                    ✕
                                </button>

                            </div>

                            <div class="grid grid-cols-7 gap-3 text-center mb-4 font-semibold text-gray-500">

                                <div>T2</div>
                                <div>T3</div>
                                <div>T4</div>
                                <div>T5</div>
                                <div>T6</div>
                                <div>T7</div>
                                <div>CN</div>

                            </div>

                            <div class="grid grid-cols-7 gap-3 text-center">

                                @for ($i = 1; $i <= 31; $i++)
                                    <button type="button"
                                        class="h-12 w-12 rounded-full hover:bg-blue-600 hover:text-white transition font-semibold">

                                        {{ $i }}

                                    </button>
                                @endfor

                            </div>

                        </div>

                    </div>

                    <!-- GUEST -->
                    <div
                        class="bg-white rounded-xl flex items-center gap-4 px-5 py-5 lg:w-[25%] hover:bg-gray-50 transition-all duration-200 border-2 border-transparent hover:border-blue-400">

                        <div class="text-4xl text-gray-500">
                            👤
                        </div>

                        <div class="w-full">

                            <p class="text-sm text-gray-500 mb-1 font-medium">
                                Khách
                            </p>

                            <select
                                class="w-full outline-none text-lg font-bold bg-transparent text-gray-800 cursor-pointer">

                                <option>1 người</option>
                                <option>2 người</option>
                                <option>3 người</option>
                                <option>4 người</option>

                            </select>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <button
                        class="bg-[#0071c2] rounded-xl hover:bg-[#005999] transition-all duration-300 text-white font-bold text-2xl px-10 py-5 min-w-[180px] shadow-lg hover:scale-[1.02]">

                        Tìm

                    </button>

                </form>

            </div>

        </div>

    </section>

    <!-- POPULAR -->
    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-4xl font-bold mb-12">
                Địa điểm phổ biến
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- CARD -->
                <div
                    class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-2 transition duration-300">

                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1200"
                        class="h-64 w-full object-cover">

                    <div class="p-6">

                        <h3 class="text-2xl font-bold mb-3">
                            Đà Lạt
                        </h3>

                        <p class="text-slate-400 mb-5">
                            Thành phố ngàn hoa tuyệt đẹp
                        </p>

                        <button class="bg-blue-600 hover:bg-blue-700 transition px-5 py-3 rounded-full font-semibold">

                            Xem thêm

                        </button>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-2 transition duration-300">

                    <img src="https://images.unsplash.com/photo-1528127269322-539801943592?q=80&w=1200"
                        class="h-64 w-full object-cover">

                    <div class="p-6">

                        <h3 class="text-2xl font-bold mb-3">
                            Đà Nẵng
                        </h3>

                        <p class="text-slate-400 mb-5">
                            Thành phố biển hiện đại
                        </p>

                        <button class="bg-blue-600 hover:bg-blue-700 transition px-5 py-3 rounded-full font-semibold">

                            Xem thêm

                        </button>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-2 transition duration-300">

                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200"
                        class="h-64 w-full object-cover">

                    <div class="p-6">

                        <h3 class="text-2xl font-bold mb-3">
                            Vũng Tàu
                        </h3>

                        <p class="text-slate-400 mb-5">
                            Thiên đường nghỉ dưỡng biển
                        </p>

                        <button class="bg-blue-600 hover:bg-blue-700 transition px-5 py-3 rounded-full font-semibold">

                            Xem thêm

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- MOST VISITED -->
    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-4xl font-bold text-white mb-3">
                Các tỉnh được ghé thăm nhiều nhất cho homestay
            </h2>

            <p class="text-slate-300 mb-12 text-lg">
                Những điểm đến nổi bật được khách du lịch yêu thích nhất
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- ITEM -->
                <div class="relative rounded-3xl overflow-hidden group h-[320px]">

                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1200"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="absolute bottom-5 left-5 text-white">

                        <h3 class="text-3xl font-bold">
                            Đà Lạt
                        </h3>

                        <p class="text-lg">
                            1,245 homestay
                        </p>

                    </div>

                </div>

                <div class="relative rounded-3xl overflow-hidden group h-[320px]">

                    <img src="https://images.unsplash.com/photo-1528127269322-539801943592?q=80&w=1200"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="absolute bottom-5 left-5 text-white">

                        <h3 class="text-3xl font-bold">
                            Đà Nẵng
                        </h3>

                        <p class="text-lg">
                            980 homestay
                        </p>

                    </div>

                </div>

                <div class="relative rounded-3xl overflow-hidden group h-[320px]">

                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="absolute bottom-5 left-5 text-white">

                        <h3 class="text-3xl font-bold">
                            Vũng Tàu
                        </h3>

                        <p class="text-lg">
                            850 homestay
                        </p>

                    </div>

                </div>

                <div class="relative rounded-3xl overflow-hidden group h-[320px]">

                    <img src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?q=80&w=1200"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="absolute bottom-5 left-5 text-white">

                        <h3 class="text-3xl font-bold">
                            Nha Trang
                        </h3>

                        <p class="text-lg">
                            760 homestay
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- TOP HOMESTAY -->
    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-7xl mx-auto px-4">

            <h2 class="text-4xl font-bold text-white mb-3">
                Top 10 homestay được yêu thích nhất ở các tỉnh
            </h2>

            <p class="text-slate-300 mb-12 text-lg">
                Những homestay có lượt đặt phòng và đánh giá cao nhất
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- CARD -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300">

                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200"
                        class="w-full h-64 object-cover">

                    <div class="p-6">

                        <div class="flex justify-between items-center mb-3">

                            <h3 class="text-2xl font-bold text-slate-900">
                                Dalat Dream
                            </h3>

                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
                                9.5
                            </span>

                        </div>

                        <p class="text-slate-500 mb-4">
                            Đà Lạt, Việt Nam
                        </p>

                        <div class="flex justify-between items-center">

                            <p class="text-xl font-bold text-slate-900">
                                1.200.000đ
                            </p>

                            <button
                                class="bg-blue-600 hover:bg-blue-700 transition px-5 py-2 rounded-full text-white font-semibold">

                                Đặt ngay

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script>
        function toggleLocation() {

            document
                .getElementById('locationBox')
                .classList
                .toggle('hidden');
        }

        function toggleCalendar() {

            document
                .getElementById('calendarBox')
                .classList
                .toggle('hidden');
        }

        // CLICK OUTSIDE CLOSE
        document.addEventListener('click', function(e) {

            const locationBtn = e.target.closest('[onclick="toggleLocation()"]');
            const calendarBtn = e.target.closest('[onclick="toggleCalendar()"]');

            const locationBox = document.getElementById('locationBox');
            const calendarBox = document.getElementById('calendarBox');

            if (!locationBtn && !e.target.closest('#locationBox')) {

                locationBox.classList.add('hidden');
            }

            if (!calendarBtn && !e.target.closest('#calendarBox')) {

                calendarBox.classList.add('hidden');
            }

        });
    </script>

</x-layout-customer>
