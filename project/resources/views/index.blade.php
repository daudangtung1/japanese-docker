<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="{{'css/style.css'}}">
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="bg-white py-4">
    <div class="container mx-auto px-20 flex justify-between">
        <div class="header-logo">
            <a href="">
                <img src="{{'images/logo.png'}}" alt="">
            </a>
        </div>
        <nav class="flex-1 ml-6">
            <ul class="">
                <li class="inline-block relative dropdown transition-transform	">
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
                    <a href="" class="py-4 px-4 inline-block">Nâng cấp</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block">Tải ứng dụng</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block">Học tiếng Nhật</a>
                </li>
                <li class="inline-block">
                    <a href="" class="py-4 px-4 inline-block">Từ điển tiếng Nhật</a>
                </li>
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
<main>
    <div class="banner text-center p-12 text-white">
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
    <section class="main-homepage--content bg-gray-200 py-20">
        <div class="container mx-auto px-20">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <div class="main-homepage--exam pr-4">
                        <div class="mb-10 main-homepage--online">
                            <div class="mb-10 title--exam">
                                <h2 class="text-2xl">Đề thi online</h2>
                                <div class="flex justify-between title-explain">
                                    <h6>Đề thi online, giới hạn thời gian thi</h6>
                                    <a href="">
                                        Xem tất cả
                                        <i aria-hidden="true" class="fa fa-caret-right ml-1"></i>
                                    </a>
                                </div>
                                <div class="crossbar-exam">
                                    <div class="color-bar"></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-10 main-home-instrict">
                            <div class="mb-10 title--exam">
                                <h2 class="text-2xl">Đề thi JLPT các năm</h2>
                                <div class="flex justify-between title-explain">
                                    <h6>&nbsp</h6>
                                    <a href="">
                                        Xem tất cả
                                        <i aria-hidden="true" class="fa fa-caret-right ml-1"></i>
                                    </a>
                                </div>
                                <div class="crossbar-exam">
                                    <div class="color-bar"></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white p-10 rounded-md item">
                                    <a href="">
                                        <h3>Đề thi trình độ N3 - Chủ Nhật #8204</h3>
                                    </a>
                                    <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>135</span>  phút
											</span>
                                        <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam">
												Online
											</span>
                                    </div>
                                    <div class="member-cpl-exam mt-4 mb-6">
                                        <div class="ava-item flex">
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-blue-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>CV</span>
                                            </div>
                                            <div
                                                class="ava-item bg-gray-500 p-4 rounded-full text-center align-middle mr-2">
                                                <span>+31</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-4 label-viewdt-wp">
                                        <div class="label-exam">
												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">
													N3
												</span>
                                            <span class="bg-yellow-200 py-2 px-4 rounded-md">
													Sắp diễn ra
												</span>
                                        </div>
                                        <a class="py-1 px-4 bg-white border border-gray-600 rounded-full item-detail-span"
                                           href="">
                                            Chi tiết
                                            <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-right pl-10">
                    <div class="mb-10 title--exam">
                        <h5 class="text-2xl">
                            <a href="javascript:;">
                                Xếp hạng
                            </a>
                        </h5>
                        <h6>Trung bình của các bài thi trong tuần</h6>
                        <div class="crossbar-exam">
                            <div class="color-bar"></div>
                        </div>
                    </div>
                    <div class="rank-average">
                        <div class="mb-10 flex justify-between items-center rank-average-item">
                            <div class="avar-user bg-blue-500 p-4 rounded-full text-center align-middle mr-2">

                                <span>CV</span>

                            </div>
                            <div class="flex-1 ml-2 info-user">
                                <h5>lan thương</h5>
                                <p>
                                    <span class="score-average">149.75 điểm</span>
                                    <span class="exam-total">19 đề thi</span>
                                </p>
                            </div>
                            <div class="number-rank leading-10">
                                <span class="bg-red-700 p-1 rounded-md text-white">01</span>
                            </div>
                        </div>
                        <div class="mb-10 flex justify-between items-center rank-average-item">
                            <div class="avar-user bg-blue-500 p-4 rounded-full text-center align-middle mr-2">

                                <span>CV</span>

                            </div>
                            <div class="flex-1 ml-2 info-user">
                                <h5>lan thương</h5>
                                <p>
                                    <span class="score-average">149.75 điểm</span>
                                    <span class="exam-total">19 đề thi</span>
                                </p>
                            </div>
                            <div class="number-rank leading-10">
                                <span class="bg-red-700 p-1 rounded-md text-white">01</span>
                            </div>
                        </div>
                        <div class="mb-10 flex justify-between items-center rank-average-item">
                            <div class="avar-user bg-blue-500 p-4 rounded-full text-center align-middle mr-2">

                                <span>CV</span>

                            </div>
                            <div class="flex-1 ml-2 info-user">
                                <h5>lan thương</h5>
                                <p>
                                    <span class="score-average">149.75 điểm</span>
                                    <span class="exam-total">19 đề thi</span>
                                </p>
                            </div>
                            <div class="number-rank leading-10">
                                <span class="bg-red-700 p-1 rounded-md text-white">01</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="bg-white py-10">
    <div class="container mx-auto px-20">
        <div class="footer-main">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="">
                            <div class="logo-footer pb-10">
                                <a href="">
                                    <img src="{{'images/logo.png'}}" alt="">
                                </a>
                            </div>
                            <ul>
                                <li class="pb-2"><a href="" class="hover:underline hover:text-red-600">Về chúng tôi</a>
                                </li>
                                <li class="pb-2"><a href="" class="hover:underline hover:text-red-600">Trợ giúp</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <h3 class="font-semibold mt-0 mb-2">Luyện đề JLPT</h3>
                            <ul>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Đề thi JLPT các năm</a>
                                </li>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Đề thi chuẩn JLPT</a>
                                </li>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Đề thi JLPT mới</a>
                                </li>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Đề thi luyện kỹ năng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <h3 class="font-semibold mt-0 mb-2">Tiện ích khác</h3>
                            <ul>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Học tiếng Nhật</a>
                                </li>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Từ điển tiếng Nhật</a>
                                </li>

                            </ul>
                        </div>
                        <div class="">
                            <h3 class="font-semibold mt-0 mb-2">Tải nguyên mở</h3>
                            <ul>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Dành cho giáo viên</a>
                                </li>
                                <li class="pb-2">
                                    <a href="" class="hover:underline hover:text-red-600">Dành cho trung tâm</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-group">
                    <h3 class="font-semibold mt-0 mb-2">Tải ứng dụng</h3>
                    <div class="flex logo-app mb-2">
                        <a href="" class="mr-2"><img src="{{'images/Appstore.png'}}" alt=""></a>
                        <a href="" class="mr-2"><img src="{{'images/GooglePlay.png'}}" alt=""></a>
                    </div>
                    <div class="social-link">
                        <h3 class="font-semibold mb-2">Kết nối với chúng tôi</h3>
                        <div class="flex logo-app">
                            <a href="" class="mr-2 text-3xl"><i class="fa fa-facebook-square"></i></a>
                            <a href="" class="mr-2 text-3xl"><i class="fa fa-google-plus-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
