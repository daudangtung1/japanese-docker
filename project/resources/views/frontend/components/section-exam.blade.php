@if($updateModeDetail)
    @include('components.exam-home-page')
@elseif($updateReadModeDetail)
        @include('frontend.exam.exam-question-read')
@elseif($updateListenModeDetail)
    @include('frontend.exam.exam-question-answer-listen')
@elseif($updateVocabularyModeDetail)
    @include('frontend.exam.exam-question-answer-vocabulary')
@elseif($updateModeNotification)
        @include('frontend.element.notification-exam')
@endif

<section>
    <div class="bg-white">
        <div class="bg-blue-600">
            <div class="container mx-auto">
                <div class="flex py-16 items-center " x-data="{ allItems: true , isCategories: false }">
                    <button  class="text-white bg-blue-700 rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">All </button>
                    @if(isset($exam_categories))
                        @foreach($exam_categories as $key => $exam_category )
                            <button wire:click ="getItemsCategory({{ $exam_category->id }})" class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">{{$exam_category->exam_categories}}</button>
{{--                            <a href="{{ route('frontend.list-exam', $exam_category->id ) }}"  class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">{{$exam_category->exam_categories}}</a>--}}
                        @endforeach
                    @endif
                    <input class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl" type="text" placeholder="Search">
                </div>
            </div>
        </div>
        <div>

        </div>
        <div class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300"
        @scroll.window ="cartOpen = (window.pageYOffset > 100) ? true : false "
        >
        <div class="flex items-center justify-between">
            <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
            <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <hr class="my-3">
        <div class="flex justify-between mt-6">
            <div class="flex">
                <img class="h-20 w-20 object-cover rounded" src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt="">
                <div class="mx-3">
                    <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                    <div class="flex items-center mt-2">
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                        <span class="text-gray-700 mx-2">2</span>
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-gray-600">20$</span>
        </div>
        <div class="flex justify-between mt-6">
            <div class="flex">
                <img class="h-20 w-20 object-cover rounded" src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt="">
                <div class="mx-3">
                    <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                    <div class="flex items-center mt-2">
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                        <span class="text-gray-700 mx-2">2</span>
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-gray-600">20$</span>
        </div>
        <div class="flex justify-between mt-6">
            <div class="flex">
                <img class="h-20 w-20 object-cover rounded" src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80" alt="">
                <div class="mx-3">
                    <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                    <div class="flex items-center mt-2">
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                        <span class="text-gray-700 mx-2">2</span>
                        <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-gray-600">20$</span>
        </div>
        <div class="mt-8">
            <form class="flex items-center justify-center">
                <input class="form-input w-48" type="text" placeholder="Add promocode">
                <button class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <span>Apply</span>
                </button>
            </form>
        </div>
        <a class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
            <span>Chechout</span>
            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
    <div class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium">Đề Thi Các Năm </h3>
            <span class="mt-3 text-sm text-gray-500">Số Lượng : {{ $count_category }}</span>
{{--            <livewire:frontend.components.detail-exam :id= "{{ $exam_category->id }}" />--}}
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @foreach($exam_detail as $items)
<!--                    --><?php
//                    var_dump($items);
//                    ?>
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden " x-data="{ 'isDialogOpen': false },{ openTab: 1 }"
                     @keydown.escape="isDialogOpen = false" >
                    <div
                        class="overflow-auto"
                        style="background-color: rgba(0,0,0,0.5)"
                        x-show="isDialogOpen"
                        :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }"
                    >
                        <!-- dialog -->
                        <div
                            class="bg-white shadow-2xl m-4 sm:m-8"
                            x-show="isDialogOpen"
                            @click.away="isDialogOpen = false"
                        >
                            <div class="flex justify-between items-center border-b p-2 text-xl">
                                <h6 class="text-xl font-bold">Simple modal dialog</h6>
                                <button type="button" @click="isDialogOpen = false" >✖</button>
                            </div>
                            <div class="p-2">
                                <div
                                    class="overflow-auto"
                                    style="background-color: rgba(0,0,0,0.5)"
                                    x-show="isDialogOpen"
                                    :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }"
                                >
                                    <!-- dialog -->
                                    <div
                                        class="bg-white shadow-2xl m-4 sm:m-8"
                                        x-show="isDialogOpen"
                                        @click.away="isDialogOpen = false"
                                    >

                                        <div class="p-2">
                                            <img src="images/de-thi-jlpt-n1.jpg" alt="">
                                            <!-- content -->
                                            <div
                                                x-data="{
                                                      openTab: 1,
                                                      activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                                                      inactiveClasses: 'text-blue-500 hover:text-blue-800'
                                                                }"
                                                class="p-6"
                                            >
                                                <ul class="flex border-b">
                                                    <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                                                        <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="#">
                                                            Cả Bộ
                                                        </a>
                                                    </li>
                                                    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                                                        <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="#">
                                                            Phần Từ Vựng,Ngữ Pháp
                                                        </a>
                                                    </li>
                                                    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                                                        <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="#">
                                                            Phần Nghe
                                                        </a>
                                                    </li>
                                                    <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                                                        <a :class="openTab === 4 ? activeClasses : inactiveClasses" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="#">
                                                            Phần Đọc
                                                        </a>
                                                    </li>
                                                </ul>
                                                    <aside class="max-w-lg mt-4 p-4 bg-yellow-100 border border-yellow-500">
                                                        <ul class="bg-blue-200 border border-blue-900 m-8 px-4">
                                                            <div class="w-full pt-4">
                                                                <div x-show="openTab === 1">
                                                                    <li><i class="fas fa-clock"></i>Thời Gian: 150p</li>
                                                                    <li><i class="fas fa-headphones"></i>Cả Bộ </li>
                                                                    <li><i class="fas fa-headphones"></i>Phần Nghe </li>
                                                                    <li><i class="fab fa-adn"></i>Phần Từ Vựng Ngữ Pháp</li>
                                                                    <li><i class="fas fa-book-open"></i>Phần Đọc</li>
                                                                        <button wire:click="detailDisLayHomePage('{{$items->id}}')" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                            NEXT
                                                                        </button>
                                                                </div>
                                                                <div x-show="openTab === 2">
                                                                    <li><i class="fas fa-clock"></i>Thời Gian: 40p</li>
                                                                    <li><i class="fas fa-headphones"></i>Phần Nghe </li>
                                                                    <button wire:click="detailDisLayListenPage('{{$items->id}}')" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        NEXT
                                                                    </button>
                                                                </div>
                                                                <div x-show="openTab === 3">
                                                                    <li><i class="fas fa-clock"></i>Thời Gian: 40p</li>
                                                                    <li><i class="fab fa-adn"></i>Phần Từ Vựng Ngữ Pháp</li>
                                                                    <button wire:click="detailDisLayVocabularyPage('{{$items->id}}')" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        NEXT
                                                                    </button>
                                                                </div>
                                                                <div x-show="openTab === 4">
                                                                        <li><i class="fas fa-clock"></i>Thời Gian: 90p</li>
                                                                        <li><i class="fas fa-book-open"></i>Phần Đọc</li>
                                                                    <button wire:click="detailDisLayReadPage('{{$items->id}}')" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        NEXT
                                                                    </button>
                                                                    </div>
                                                                </div>
                                                        </ul>
                                                    </aside>
                                                <img src="images/607681ac1acf2.png" alt="" width="80px">
                                            </div>
                                        </div>
                                    </div><!-- /dialog -->
                                </div><!-- /overlay -->
                                <div class="flex items-end justify-end h-56 w-full bg-cover">
                                    <button @click="isDialogOpen = true" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                        CHI TIẾT :
                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                        </svg> GO
                                    </button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3 class="text-gray-700 uppercase">Mã Đề: {{ $items->exam_code }}</h3>
                                    <span class="text-gray-500 mt-2">Thời Gian : 130 phút </span>
                                </div>
                            </div>
                        </div><!-- /dialog -->
                    </div><!-- /overlay -->
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('images/de-thi-jlpt-n1.jpg')">
                        <button @click="isDialogOpen = true" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            CHI TIẾT :
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg> GO
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">Mã Đề: {{ $items->exam_code }}</h3>
                        <span class="text-gray-500 mt-2">Thời Gian : 130 phút </span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="w-full mx-auto">
                <div class="sm:grid grid-cols-4 gap-5 mx-auto px-16">
                        <div class="col-start-1 col-end-3 my-2">
                            <button wire:click = "previousPage()">
                                <div
                                    class="h-full p-6 dark:bg-gray-800 bg-white hover:shadow-xl rounded border-b-4 border-blue-500 shadow-md">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex">
                                        <svg class="mr-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
                                                fill="currentColor" /></svg>
                                        Prev
                                    </h3>
                                    <p class="text-lg">What is Lorem Ipsum?</p>
                                </div>
                            </button>
                        </div>
                        <div class="col-end-5 col-span-2 my-2">
                            <button wire:click = "nextPage()">
                                <div
                                    class="h-full p-6 dark:bg-gray-800 bg-white hover:shadow-xl rounded border-b-4 border-blue-500 shadow-md text-right">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex ">
                                        Next
                                        <svg class="ml-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
                                                fill="currentColor" /></svg>
                                    </h3>
                                    <p class="text-lg">Why do we use it?</p>
                                </div>
                            </button>
                        </div>
            </div>
        </div>
    </div>
</section>

