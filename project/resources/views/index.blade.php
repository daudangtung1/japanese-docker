
<x-guest-layout>
{{--    <section class="banner-index py-16">--}}
{{--        <div class="banner--head relative">--}}
{{--            <div class=" w-full h-36-r mx-4">--}}
{{--                <img src="images/wallpaper1.jpg" alt="" class="w-full h-full object-cover max-w-full h-full rounded-lg">--}}
{{--            </div>--}}
{{--            <div class=" w-full h-36-r mx-4">--}}
{{--                <img src="images/wallpaper2.jpg" alt="" class="w-full h-full object-cover max-w-full h-full rounded-lg">--}}
{{--            </div>--}}
{{--            <div class="w-full h-36-r mx-4">--}}
{{--                <img src="images/wallpaper3.jpg" alt="" class="w-full h-full object-cover max-w-full h-full rounded-lg">--}}
{{--            </div>--}}
{{--            <div class=" w-full h-36-r mx-4">--}}
{{--                <img src="images/wallpaper4.jpg" alt="" class="w-full h-full object-cover max-w-full h-full rounded-lg">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="w-full">
        <div class="container mx-auto">
                <div class="md:flex mt-8 md:-mx-4">
                    <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                    <span>Shop Now</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Games</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                    <span>Shop Now</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="bg-blue-600">
            <div class="container mx-auto">
                <div class="flex py-16 items-center ">
                    <div class="text-white bg-blue-700 rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">All </div>
                    <div class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">N1</div>
                    <div class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">N2</div>
                    <div class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">N3</div>
                    <div class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">N4</div>
                    <div class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl">N5</div>
                    <input class="text-blue-700  bg-white rounded-2xl shadow-lg px-20 py-4 mx-2 text-xl" type="text" placeholder="Search">
                </div>
            </div>

        </div>
        <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'" class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
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
                <h3 class="text-gray-700 text-2xl font-medium">Wrist Watch</h3>
                <span class="mt-3 text-sm text-gray-500">200+ Products</span>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Classic watch</h3>
                            <span class="text-gray-500 mt-2">$123</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-1.2.1&auto=format&fit=crop&w=689&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Old watch</h3>
                            <span class="text-gray-500 mt-2">$95</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Classic watch</h3>
                            <span class="text-gray-500 mt-2">$125</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">fossil watch</h3>
                            <span class="text-gray-500 mt-2">$180</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1434056886845-dac89ffe9b56?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">braun watch</h3>
                            <span class="text-gray-500 mt-2">$49</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1526045431048-f857369baa09?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">rolex watch</h3>
                            <span class="text-gray-500 mt-2">$86</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495857000853-fe46c8aefc30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">MVMtx watch</h3>
                            <span class="text-gray-500 mt-2">$100</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1444881421460-d838c3b98f95?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">breitling watch</h3>
                            <span class="text-gray-500 mt-2">$180</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex rounded-md mt-8">
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                        <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:frontend.components.box-exam-user />

    <section class="bg-blue-100 pb-40 relative">
        <div class="justify-center flex flex-wrap">
            <div class="flex flex-wrap items-center container">
                <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        CSS Components
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                        Every element that you need in a product comes built in as a component. All components fit
                        perfectly with each other and can have different colours.
                    </p>

                    <div class="block pb-6">
							<span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								BUTTONS
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								INPUTS
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								LABELS
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								MENUS
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								NAVBARS
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								PAGINATION
							</span>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
								PROGRESSBARS
							</span>
                    </div>
                    <a href=""
                       class="font-bold text-blue-400 hover:text-blue-500 ease-linear transition-all duration-150"
                       target="_blank">View All</a>
                </div>
                <div class="w-full md:w-6/12 px-12 md:px-4 ml-auto mr-auto mt-48">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center pt-32 container">
            <div class="w-full md:w-6/12 px-4 mr-auto ml-auto mt-32">
                <div class="justify-center flex flex-wrap">
                    <div class="my-4 w-full lg:w-6/12 px-4">
                        <a href="">
                            <div class="bg-red-600 shadow-lg rounded-lg text-center p-8">
                                <img src="{{'images/svelte.jpg'}}" alt=""
                                     class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-blue-500 shadow-lg rounded-lg text-center p-8 mt-8">
                                <img src="{{'images/svelte.jpg'}}" alt=""
                                     class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-gray-700 shadow-lg rounded-lg text-center p-8 mt-8">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                    </div>
                    <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                        <a href="">
                            <div class="bg-red-600 shadow-lg rounded-lg text-center p-8">
                                <img src="{{'images/svelte.jpg'}}" alt=""
                                     class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-blue-500 shadow-lg rounded-lg text-center p-8 mt-8">
                                <img src="{{'images/svelte.jpg'}}" alt=""
                                     class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-gray-700 shadow-lg rounded-lg text-center p-8 mt-8">
                                <img src="{{'images/svelte.jpg'}}" alt=""
                                     class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white">
                                <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
                <h3 class="text-3xl mb-2 font-semibold leading-normal">
                    Javascript Components
                </h3>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-600">
                    In order to create a great User Experience some components require JavaScript. In this way you can
                    manipulate the elements on the page and give more options to your users.
                </p>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-600">
                    We created a set of Components that are dynamic and come to help you.
                </p>
                <div class="block pb-6">
						<span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-500 bg-white uppercase last:mr-0 mr-2 mt-2">
							ALERTS
						</span>
                </div>
                <a href="" class="font-bold text-blue-400 hover:text-blue-500 ease-linear transition-all duration-150"
                   target="_blank">View All</a>
            </div>
        </div>
        <div class="container mx-auto px-4 pb-32 pt-48">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
                    <div class="md:pr-12">
                        <h3 class="text-3xl font-semibold"> Documentation</h3>
                        <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            This extension comes a lot of fully coded examples that help you get started faster. You can
                            adjust the colors and also the programming language. You can change the text and images and
                            you're good to go.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">Built by Developers for Developers</li>
                            <li class="py-2">Carefully crafted code for Components</li>
                            <li class="py-2">Dynamic Javascript Components</li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0">
                    <img src="{{'images/documentation.png'}}"
                         style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);"
                         alt="" class="max-w-full rounded-lg shadow-xl">
                </div>
            </div>
        </div>
        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="w-full md:w-6/12 px-12 md:px-4">
                <h2 class="font-semibold text-4xl">Beautiful Example Pages</h2>
                <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-500">
                    Notus JS is a completly new product built using our past experience in web templates. Take the
                    examples we made for you and start playing with them.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-gray-500 ">
        <div class="container">
            <div class="justify-center flex flex-wrap">
                <div class="w-full lg:w-12/12 mx-4 -mt-24 z-10">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-4/12 px-4">
                            <h5 class="text-xl font-semibold pb-4 text-center">Login Page</h5>
                            <a href="">
                                <img src="{{'images/login.jpg'}}" alt="" class="rounded-lg">
                            </a>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <h5 class="text-xl font-semibold pb-4 text-center">Login Page</h5>
                            <a href="">
                                <img src="{{'images/login.jpg'}}" alt="" class="rounded-lg">
                            </a>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <h5 class="text-xl font-semibold pb-4 text-center">Login Page</h5>
                            <a href="">
                                <img src="{{'images/login.jpg'}}" alt="" class="rounded-lg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-500 py-20 relative">
        <div class="flex flex-wrap justify-center container">
            <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto md:mt-64">
                <h3 class="text-3xl mb-2 font-semibold leading-normal text-white">Open Source</h3>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-300">Since Tailwind CSS is an open
                    source project we wanted to continue this movement too. You can give this version a try to feel the
                    design and also test the quality of the code!</p>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-300">Get it free on Github and please
                    help us spread the news with a Star!</p>
                <a href="" class="text-white font-bold px-6 py-4 rounded uppercase bg-gray-700">github star</a>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-32">
            </div>
        </div>
        <div class="h-36 bg-gray-500 absolute -bottom-32 left-0 right-0 z-0 overflow-hidden"
             style="clip-path: polygon(0 0, 0 45%, 100% 0);">
        </div>
    </section>
    <section class="pb-16 bg-blue-100 pt-32">
        <div class="container">
            <div class="flex flex-wrap justify-center bg-white rounded-lg py-16 px-12 -mt-40 z-10 relative">
                <div class="w-full text-center lg:w-8/12">
                    <p class="text-4xl text-center">
                    </p>
                    <h3 class="font-semibold text-3xl">Do you love this Starter Kit?</h3>
                    <p class="text-gray-500 text-lg leading-relaxed mt-4 mb-4">
                        Cause if you do, it can be yours now. Hit the buttons below to navigate to get the Free version
                        for your next project. Build a new web app or give an old project a new look!
                    </p>
                    <div class="flex flex-col mt-10 sm:block">
                        <a href=""
                           class="uppercase bg-pink-500 rounded text-white font-bold outline-none py-4 px-6 mr-1 mb-2">get
                            started</a>
                        <a href=""
                           class="uppercase bg-gray-700 rounded text-white font-bold outline-none py-4 px-6 mr-1 mb-2">help
                            with a star</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--slider-->
    <section class="bg-blue-100">
        <div class="menu">
            <a class="showSingle" target="1">Div 1</a>
            <a class="showSingle" target="2">Div 2</a>
        </div>
        <div class="cnt">
            <div class="first-item slider" id="div1">
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
            </div>
            <div class="second-item slider" id="div2">
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
                <div class="bg-white border-rounded mx-4 px-4 text-center py-4 rounded-lg">
                    <p class="title mx-4 ">N3+ N2 + N1 1</p>
                    <p class="price ">100</p>
                    <p class="jp-price mb-10">10</p>
                    <a href="" class="rounded-lg bg-blue-300 text-white px-2 py-1">Mua ngay</a>
                </div>
            </div>
        </div>
    </section>
    <!--end slide-->
</x-guest-layout>
