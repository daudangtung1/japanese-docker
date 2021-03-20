<header class="bg-white py-4">
    <div class="container mx-auto px-20 flex justify-between">
        <div class="header-logo">
            <a href="">
                <img src="{{"images/logo.png"}}" alt="">
            </a>
        </div>
        <nav class="flex-1 ml-6">
            <ul class="">
                <li class="inline-block relative dropdown">
                    <a href="javascript:;" class="py-4 px-4 inline-block">
                        Luyện đề JLPT
                        <span class="caret ml-1"></span>
                    </a>
                    <div class="sub-list absolute top-14 left-0 hidden">
                        <ul class="bg-white py-4 px-4 w-56 border-t-2 border-red-600 block">
                            <li class="pb-4 block">
                                <a href="" class="block hover:underline">Đề thi JLPT các năm</a>
                            </li>
                            <li class="pb-4 block">
                                <a href="" class="block hover:underline">Đề thi chuẩn JLPT</a>
                            </li>
                            <li class="pb-4 block">
                                <a href="" class="block hover:underline">Đề thi JLPT mới</a>
                            </li>
                            <li class="pb-4 block">
                                <a href="" class="block hover:underline">Đề thi luyện kỹ năng</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block text-gray-500 hover:text-black">Nâng cấp</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block text-gray-500 hover:text-black">Tải ứng dụng</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block text-gray-500 hover:text-black">Học tiếng Nhật</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block text-gray-500 hover:text-black">Từ điển tiếng Nhật</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="inline-block">
                            <a href="{{ url('/dashboard') }}"
                               class="py-4 px-4 inline-block text-gray-500 hover:text-black">Dashboard</a>
                        </li>
                    @else
                        <li class="inline-block">
                            <a href="{{ route('login') }}"
                               class="py-4 px-4 inline-block text-gray-500 hover:text-black">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="inline-block">
                                <a href="{{ route('register') }}"
                                   class="py-4 px-4 inline-block text-gray-500 hover:text-black">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
        <div class="mt-4">
            <a href="" class="bg-red-600 py-2 px-4 rounded-md text-white hover:text-gray-900">
                <i aria-hidden="true" class="fa fa-user-circle-o"></i>
                Đăng nhập
            </a>
        </div>
    </div>
</header>
