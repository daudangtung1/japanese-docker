<main class="text-white flex items-center justify-center" x-data="carouselFilter()">
    <div class="container grid grid-cols-1">
        <div class="flex py-12 justify-center">
            <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-800': active != 0 }" href="#" @click.prevent="changeActive(0)">Fruit</a>
            <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-white" :class="{ 'text-gray-700': active != 1 }" href="#" @click.prevent="changeActive(1)">People</a>
        </div>

        <div class="row-start-2 col-start-1"
             x-show="active == 0"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
        >
            <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 0"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Dragon Fruit</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 1"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Avocado</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 2"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Mango</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 3"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Orange</h1>
                </div>


                <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1581375221876-8f287f7cd2cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1581375279144-bb3b381c7046?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1581375303816-4a17124934f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>


        <div class="row-start-2 col-start-1"
             x-show="active == 1"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
        >
            <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 0"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Beth</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 1"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Lee</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 2"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Jade</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest"
                        x-show="active == 3"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-12"
                    >Drew</h1>
                </div>


                <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1462804993656-fac4ff489837?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                        <img
                            src="https://images.unsplash.com/photo-1480455624313-e29b44bbfde1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<section>
    <div class="bg-gray-300">
        <div class="bg-blue-600">
            <div class="container mx-auto px-6">
                <div class="flex py-16 items-center " x-data="{ allItems: true , isCategories: false }">
                    <a wire:click.prevent = "getAllItemsCategory('')" class="text-white bg-blue-700 rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">All </a>
                    @if(isset($exam_categories))
                        @foreach($exam_categories as $key => $exam_category )
                            <button wire:click.prevent ="getItemsCategory({{ $exam_category->id }})" class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">{{$exam_category->exam_categories}}</button>
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
            <span class="mt-3 text-sm text-gray-500">Số Lượng : @if($count_exam)
                                                                    {{ $count_exam }}
                                                                @elseif($count_exam_all)
                                                                    {{ $count_exam_all }}
                                                                @endif
            </span>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @foreach($exam_detail as $items)
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden " x-data="{ 'isDialogOpen': false },{ openTab: 1 }"
                     @keydown.escape="isDialogOpen = false" >
                    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                        <!-- dialog -->
                        <div class="bg-white shadow-2xl m-4 sm:m-8" x-show="isDialogOpen" @click.away="isDialogOpen = false">
                            <div class="p-2">
                                <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                                    <!-- dialog -->
                                    <div class="bg-white shadow-2xl m-4 sm:m-8" x-show="isDialogOpen" @click.away="isDialogOpen = false">

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
                                                            Phần Nghe
                                                        </a>
                                                    </li>
                                                    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                                                        <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="#">
                                                            Phần Từ Vựng,Ngữ Pháp
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
                                                                        <a href="{{ route('exam-detail-display',[ App\Http\Livewire\Frontend\Components\SectionExam::DISPLAYTOTAL, $items->id] ) }}" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                            NEXT
                                                                        </a>
                                                                </div>
                                                                <div x-show="openTab === 2">
                                                                    <li><i class="fas fa-clock"></i>Thời Gian: 40p</li>
                                                                    <li><i class="fas fa-headphones"></i>Phần Nghe </li>
                                                                        <a href="{{ route('exam-detail-display',[ App\Http\Livewire\Frontend\Components\SectionExam::DISPLAYEXAMLISTEN, $items->id] ) }}" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                            NEXT
                                                                        </a>
                                                                </div>
                                                                <div x-show="openTab === 3">
                                                                    <li><i class="fas fa-clock"></i>Thời Gian: 40p</li>
                                                                    <li><i class="fab fa-adn"></i>Phần Từ Vựng Ngữ Pháp</li>
                                                                    <a href="{{ route('exam-detail-display',[ App\Http\Livewire\Frontend\Components\SectionExam::DISPLAYEXAMVOCABULARY, $items->id] ) }}" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        NEXT
                                                                    </a>
                                                                </div>
                                                                <div x-show="openTab === 4">
                                                                        <li><i class="fas fa-clock"></i>Thời Gian: 90p</li>
                                                                        <li><i class="fas fa-book-open"></i>Phần Đọc</li>
                                                                    <a href="{{ route('exam-detail-display',[ App\Http\Livewire\Frontend\Components\SectionExam::DISPLAYEXAMREAD, $items->id] ) }}" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                                        NEXT
                                                                    </a>
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
                            <button wire:click = "nextPage()">
                                <div
                                    class="h-full p-6 dark:bg-gray-800 bg-white hover:shadow-xl rounded border-b-4 border-blue-500 shadow-md">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex">
                                        <svg class="mr-2" width="24" height="30" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
                                                fill="currentColor" /></svg>
                                        Next
                                    </h3>
                                    <p class="text-lg">What is Lorem Ipsum?</p>
                                </div>
                            </button>
                        </div>
                        <div class="col-end-5 col-span-2 my-2">
                            <button wire:click = "resetPage()">
                                <div
                                    class="h-full p-6 dark:bg-gray-800 bg-white hover:shadow-xl rounded border-b-4 border-blue-500 shadow-md text-right">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex ">
                                        Return
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

