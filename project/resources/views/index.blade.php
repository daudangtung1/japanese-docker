<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html{
            font-size: 14px;
        }
        @font-face{
            font-family:"Roboto-Regular";
            src: url('resources/font/Roboto-Regular.ttf') format("truetype");
        }
        .banner{
            background-image: url('resources/img/bg-slide-1.jpg');
        }

        .main-homepage--content{
            background-color: gray;
        }

        .crossbar-exam{
            background-color: #e8e8e8;
            height: 2px;
            width: 100%;
            margin-top: 10px;
        }

        .color-bar{
            background-color: #f00;
            width: 60px;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="banner text-center p-12 text-dark">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <h1 class="text-4xl pb-4">KHO ĐỀ THI TIẾNG NHẬT</h1>
    <div class="flex flex-row justify-center">
        <div class="data-item pr-7">
            <span class="text-xl">3930</span> "+" <i class="not-italic">Thành viên</i>
        </div>
        <div class="data-item">
            <span class="text-xl">999</span> "+" <i class="not-italic">Đề thi</i>
        </div>
    </div>
</div>
<section class="main-homepage--content">
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="main-homepage--exam">
                <div class=" main-homepage--online">
                    <div class="title--exam">
                        <h2 class="text-2xl">Đề thi online</h2>
                        <div class="flex justify-between title-explain">
                            <h6>Đề thi online, giới hạn thời gian thi</h6>
                            <a href="">Xem tất cả</a>
                        </div>
                        <div class="crossbar-exam">
                            <div class="color-bar"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white py-2 px-4 rounded-md item">
                            <a href="">
                                <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                            </a>
                            <div class="status-exam">
									<span>
										<span></span>
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-home-instrict">
                    Đề thi JLPT các năm
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-blue-200">1</div>
                        <div class="bg-blue-200">1</div>
                        <div class="bg-blue-200">1</div>
                        <div class="bg-blue-200">1</div>
                        <div class="bg-blue-200">1</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adv bg-red-200"> div 2</div>
    </div>
    </div>
</section>
</body>
</html>
