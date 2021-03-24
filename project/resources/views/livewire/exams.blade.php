<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Posts (Laravel 8 Livewire CRUD with Jetstream & Tailwind CSS - ItSolutionStuff.com)
    </h2>
</x-slot>
<div class="py-20">
{{--    @if (session()->has('message'))--}}
{{--        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"--}}
{{--             role="alert">--}}
{{--            <div class="flex">--}}
{{--                <div>--}}
{{--                    <p class="text-sm">{{ session('message') }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

    @livewireScripts


    <div class="container mx-auto px-40">
        <div class="main-homepage--exam pr-4">
            <div class="mb-10 main-homepage--online">
                {{--                <div class="mb-9 title--exam">--}}
                {{--                    <h2 class="text-2xl">Đề thi online</h2>--}}
                {{--                    <div class="flex justify-between title-explain">--}}
                {{--                        <h6>Đề thi online, giới hạn thời gian thi</h6>--}}
                {{--                        <a href="">--}}
                {{--                            Xem tất cả--}}
                {{--                            <i aria-hidden="true" class="fa fa-caret-right ml-1"></i>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                    <div class="bg-gray-300 w-full crossbar-exam mt-4">--}}
                {{--                        <div class="bg-red-600 h-full w-16"></div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Post</button>--}}
                {{--                @if($isOpen)--}}
                {{--                    @include('livewire.exams.create')--}}
                {{--                @endif--}}

                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1"
                                       class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                                <input type="text"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
                                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlInput1"
                                       class="block text-gray-700 text-sm font-bold mb-2">Time:</label>
                                <input type="text"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       id="exampleFormControlInput1" placeholder="Enter Title" wire:model="time">
                                @error('time') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlInput1"
                                       class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <input type="text"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       id="exampleFormControlInput1" placeholder="Enter Title" wire:model="status">
                                @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button"
                  class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button"
                  class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
                </form>

            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach($exams as $exam)
                    <div class="bg-white p-10 rounded-md item">
                        <a href="">
                            <h3 class="mb-1">{{$exam->title}}</h3>
                        </a>
                        <div class="status-exam">
											<span class="time-exam">
												<i aria-hidden="true" class="fa fa-clock-o"></i>
												<span>{{$exam->time}}</span> phút
											</span>
                            <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam ml-4">
												<?php
                                if ($exam->status == 1) {
                                    echo "Online";
                                } else {
                                    echo "Offline";
                                }
                                ?>
											</span>
                        </div>
                        <div class="member-cpl-exam mt-4 mb-6">
                            <div class="ava-item flex">
                                <div
                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">
                                    <span class="absolute top-3 left-3.5 text-white">CV</span>
                                </div>
                                <div
                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">
                                    <span class="absolute top-3 left-3.5 text-white">CV</span>
                                </div>
                                <div
                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">
                                    <span class="absolute top-3 left-3.5 text-white">CV</span>
                                </div>
                                <div
                                    class="ava-item bg-gray-200 w-12 h-12 rounded-full text-center mr-2 relative">
                                    <span class="absolute top-3 left-2.5 text-white">+31</span>
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
                            <a class="py-1 px-4 bg-white border border-gray-600 rounded-full hover:bg-yellow-500 hover:text-white hover:border-yellow-500 duration-500 item-detail-span"
                               href="">
                                Chi tiết
                                <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{--            <div class="mb-10 main-homepage--online">--}}
        {{--                <div class="mb-9 title--exam">--}}
        {{--                    <h2 class="text-2xl">Đề thi online</h2>--}}
        {{--                    <div class="flex justify-between title-explain">--}}
        {{--                        <h6>Đề thi online, giới hạn thời gian thi</h6>--}}
        {{--                        <a href="">--}}
        {{--                            Xem tất cả--}}
        {{--                            <i aria-hidden="true" class="fa fa-caret-right ml-1"></i>--}}
        {{--                        </a>--}}
        {{--                    </div>--}}
        {{--                    <div class="bg-gray-300 w-full crossbar-exam mt-4">--}}
        {{--                        <div class="bg-red-600 h-full w-16"></div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="grid grid-cols-2 gap-4">--}}
        {{--                    <div class="bg-white p-10 rounded-md item">--}}
        {{--                        <a href="">--}}
        {{--                            <h3 class="mb-1">Đề thi trình độ N3 - Chủ Nhật #8204</h3>--}}
        {{--                        </a>--}}
        {{--                        <div class="status-exam">--}}
        {{--											<span class="time-exam">--}}
        {{--												<i aria-hidden="true" class="fa fa-clock-o"></i>--}}
        {{--												<span>135</span> phút--}}
        {{--											</span>--}}
        {{--                            <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam ml-4">--}}
        {{--												Online--}}
        {{--											</span>--}}
        {{--                        </div>--}}
        {{--                        <div class="member-cpl-exam mt-4 mb-6">--}}
        {{--                            <div class="ava-item flex">--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-gray-200 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-2.5 text-white">+31</span>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="flex justify-between mt-4 label-viewdt-wp">--}}
        {{--                            <div class="label-exam">--}}
        {{--												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">--}}
        {{--													N3--}}
        {{--												</span>--}}
        {{--                                <span class="bg-yellow-200 py-2 px-4 rounded-md">--}}
        {{--													Sắp diễn ra--}}
        {{--												</span>--}}
        {{--                            </div>--}}
        {{--                            <a class="py-1 px-4 bg-white border border-gray-600 rounded-full hover:bg-yellow-500 hover:text-white hover:border-yellow-500 duration-500 item-detail-span"--}}
        {{--                               href="">--}}
        {{--                                Chi tiết--}}
        {{--                                <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="bg-white p-10 rounded-md item">--}}
        {{--                        <a href="">--}}
        {{--                            <h3 class="mb-1">Đề thi trình độ N3 - Chủ Nhật #8204</h3>--}}
        {{--                        </a>--}}
        {{--                        <div class="status-exam">--}}
        {{--											<span class="time-exam">--}}
        {{--												<i aria-hidden="true" class="fa fa-clock-o"></i>--}}
        {{--												<span>135</span> phút--}}
        {{--											</span>--}}
        {{--                            <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam ml-4">--}}
        {{--												Online--}}
        {{--											</span>--}}
        {{--                        </div>--}}
        {{--                        <div class="member-cpl-exam mt-4 mb-6">--}}
        {{--                            <div class="ava-item flex">--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-gray-200 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-2.5 text-white">+31</span>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="flex justify-between mt-4 label-viewdt-wp">--}}
        {{--                            <div class="label-exam">--}}
        {{--												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">--}}
        {{--													N3--}}
        {{--												</span>--}}
        {{--                                <span class="bg-yellow-200 py-2 px-4 rounded-md">--}}
        {{--													Sắp diễn ra--}}
        {{--												</span>--}}
        {{--                            </div>--}}
        {{--                            <a class="py-1 px-4 bg-white border border-gray-600 rounded-full hover:bg-yellow-500 hover:text-white hover:border-yellow-500 duration-500 item-detail-span"--}}
        {{--                               href="">--}}
        {{--                                Chi tiết--}}
        {{--                                <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="bg-white p-10 rounded-md item">--}}
        {{--                        <a href="">--}}
        {{--                            <h3 class="mb-1">Đề thi trình độ N3 - Chủ Nhật #8204</h3>--}}
        {{--                        </a>--}}
        {{--                        <div class="status-exam">--}}
        {{--											<span class="time-exam">--}}
        {{--												<i aria-hidden="true" class="fa fa-clock-o"></i>--}}
        {{--												<span>135</span> phút--}}
        {{--											</span>--}}
        {{--                            <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam ml-4">--}}
        {{--												Online--}}
        {{--											</span>--}}
        {{--                        </div>--}}
        {{--                        <div class="member-cpl-exam mt-4 mb-6">--}}
        {{--                            <div class="ava-item flex">--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-gray-200 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-2.5 text-white">+31</span>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="flex justify-between mt-4 label-viewdt-wp">--}}
        {{--                            <div class="label-exam">--}}
        {{--												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">--}}
        {{--													N3--}}
        {{--												</span>--}}
        {{--                                <span class="bg-yellow-200 py-2 px-4 rounded-md">--}}
        {{--													Sắp diễn ra--}}
        {{--												</span>--}}
        {{--                            </div>--}}
        {{--                            <a class="py-1 px-4 bg-white border border-gray-600 rounded-full hover:bg-yellow-500 hover:text-white hover:border-yellow-500 duration-500 item-detail-span"--}}
        {{--                               href="">--}}
        {{--                                Chi tiết--}}
        {{--                                <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="bg-white p-10 rounded-md item">--}}
        {{--                        <a href="">--}}
        {{--                            <h3 class="mb-1">Đề thi trình độ N3 - Chủ Nhật #8204</h3>--}}
        {{--                        </a>--}}
        {{--                        <div class="status-exam">--}}
        {{--											<span class="time-exam">--}}
        {{--												<i aria-hidden="true" class="fa fa-clock-o"></i>--}}
        {{--												<span>135</span> phút--}}
        {{--											</span>--}}
        {{--                            <span class="bg-green-200 rounded-full py-0.5 px-4 type-exam ml-4">--}}
        {{--												Online--}}
        {{--											</span>--}}
        {{--                        </div>--}}
        {{--                        <div class="member-cpl-exam mt-4 mb-6">--}}
        {{--                            <div class="ava-item flex">--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-blue-500 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-3.5 text-white">CV</span>--}}
        {{--                                </div>--}}
        {{--                                <div--}}
        {{--                                    class="ava-item bg-gray-200 w-12 h-12 rounded-full text-center mr-2 relative">--}}
        {{--                                    <span class="absolute top-3 left-2.5 text-white">+31</span>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="flex justify-between mt-4 label-viewdt-wp">--}}
        {{--                            <div class="label-exam">--}}
        {{--												<span class="bg-green-200 exam py-2 px-4 rounded-md mr-2 exam">--}}
        {{--													N3--}}
        {{--												</span>--}}
        {{--                                <span class="bg-yellow-200 py-2 px-4 rounded-md">--}}
        {{--													Sắp diễn ra--}}
        {{--												</span>--}}
        {{--                            </div>--}}
        {{--                            <a class="py-1 px-4 bg-white border border-gray-600 rounded-full hover:bg-yellow-500 hover:text-white hover:border-yellow-500 duration-500 item-detail-span"--}}
        {{--                               href="">--}}
        {{--                                Chi tiết--}}
        {{--                                <i aria-hidden="true" class="fa fa-angle-right ml-1"></i>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>
</div>
