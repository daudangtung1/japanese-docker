<x-app-layout>
    <main class="profile-page">
        <section class="relative block" style="height: 200px;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover">
          <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-50 bg-black"
          ></span>
            </div>
            <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;"
            >
                <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
                >
                    <polygon
                        class="text-gray-300 fill-current"
                        points="2560 0 2560 100 0 100"
                    ></polygon>
                </svg>
            </div>
        </section>
        <div x-data="{ openTab: 1 }">
            <section class="relative py-16 bg-gray-300">
                <div class="container mx-auto px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                            <ul class="md:flex items-center justify-center text-base text-gray-400  md:pt-0">
                                <li @click="openTab = 1" :class="{ 'active': openTab === 2 }" class="-mb-px mr-1">
                                    <a @click="openTab = 1" :class="{ 'active': openTab === 2 }" class="inline-block no-underline hover:text-black font-medium text-md text-gray-800 py-2 px-4 lg:-ml-2" href="#">
                                        Thông Tin Tài Khoản Cá Nhân
                                    </a>
                                </li>
                                <li @click="openTab = 2" :class="{ 'active': openTab === 2 }" class="-mb-px mr-1">
                                    <a @click="openTab = 2" :class="{ 'active': openTab === 2 }" class="inline-block no-underline hover:text-gray-700 font-medium text-md py-2 px-4 lg:-ml-2" href="#">
                                        Tạo mới thông tin cá nhân
                                    </a>
                                </li>
                                <li @click="openTab = 3" :class="{ 'active': openTab === 3 }" class="-mb-px mr-1">
                                    <a @click="openTab = 3" :class="{ 'active': openTab === 3 }" class="inline-block no-underline hover:text-gray-700  font-medium text-md py-2 px-4 lg:-ml-2" href="#">
                                        Lịch Sử Bài Thi
                                    </a>
                                </li>
                                <li @click="openTab = 4" :class="{ 'active': openTab === 4  }" class="-mb-px mr-1">
                                    <a @click="openTab = 4" :class="{ 'active': openTab === 4 }" class="inline-block no-underline hover:text-gray-700  font-medium text-md py-2 px-4 lg:-ml-2" href="#">
                                        Nạp Tài Khoản
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </section>
            <section class="relative py-16 bg-gray-300">
                <div class="container mx-auto px-4">
                            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                                <div x-show.transition.in.duration.500.origin.top="openTab === 1">
                                    <div class="px-6">
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                                <div class="relative">
                                                    <img
                                                        alt="..."
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                                                        style="max-width: 150px;"
                                                    />
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                                    <div class="container mx-auto">
                                                        <div class="mt-4 mb-12 px-4 pt-4 pb-12 justify-between bg-white dark:bg-gray-600 shadow-sm rounded-lg">
                                                            <div class="justify-center">
                                                                <div class="text-base text-xl text-center py-4 clear-both">Cấp Độ (%)</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 65%;">
                                                                        65 %
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 35%;">
                                                                        35%
                                                                    </div>
                                                                </div>
                                                                <div class="text-base text-xl text-center py-4 clear-both">N1</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 42%;">
                                                                        10
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 58%;">
                                                                        14
                                                                    </div>
                                                                </div>
                                                                <div class="text-base text-xl text-center py-4 clear-both">N2</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 33%;">
                                                                        3
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 67%;">
                                                                        6
                                                                    </div>
                                                                </div>
                                                                <div class="text-base text-xl text-center py-4 clear-both">N3</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 65%;">
                                                                        13
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 35%;">
                                                                        7
                                                                    </div>
                                                                </div>
                                                                <div class="text-base text-xl text-center py-4 clear-both">N4</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 50%;">
                                                                        0
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 50%;">
                                                                        0
                                                                    </div>
                                                                </div>
                                                                <div class="text-base text-xl text-center py-4 clear-both">N5</div>
                                                                <div>
                                                                    <div class="float-left bg-red-100 pl-4" style="width: 50%;">
                                                                        0
                                                                    </div>
                                                                    <div class="float-left w-1/5 bg-blue-100 pl-4" style="width: 50%;">
                                                                        0
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                                    <div class="mr-4 p-3 text-center">
                                                        <span style="font-size: 3em ;color: Gold;">
                                                            <i class="fas fa-award"></i>
                                                        </span>
                                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">N2</span>
                                                        <span class="text-sm text-gray-500">Xếp Hạng Level </span>
                                                    </div>
                                                    <div class="mr-4 p-3 text-center">
                                                        <span style="font-size: 3em ;color: DodgerBlue;">
                                                            <i class="fas fa-check-circle"></i>
                                                        </span>
                                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">300</span>
                                                        <span class="text-sm text-gray-500">Số Câu Trả Lời Đúng : </span>
                                                    </div>
                                                    <div class="mr-4 p-3 text-center">
                                                        <span style="font-size: 3em ;color: Red;">
                                                           <i class="fab fa-bitcoin"></i>
                                                        </span>
                                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">G.V</span>
                                                        <span class="text-sm text-gray-500">Tài Khoản </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-12">
                                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                                Phung Trung Hieu
                                            </h3>
                                            <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                                <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                                                Los Angeles, California
                                            </div>
                                            <div class="mb-2 text-gray-700 mt-10">
                                                <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                                                >Solution Manager - Creative Tim Officer
                                            </div>
                                            <div class="mb-2 text-gray-700">
                                                <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                                                >University of Computer Science
                                            </div>
                                        </div>
                                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                                            <div class="flex flex-wrap justify-center">
                                                <div class="w-full lg:w-9/12 px-4">
                                                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                                        An artist of considerable range, Jenna the name taken by
                                                        Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                                        performs and records all of his own music, giving it a
                                                        warm, intimate feel with a solid groove structure. An
                                                        artist of considerable range.
                                                    </p>
                                                    <a href="#pablo" class="font-normal text-pink-500"
                                                    >Show more</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show.transition.in.duration.500.origin.top="openTab === 2">
                                    <div class="px-6">
                                        <div class="flex flex-wrap">
                                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                @livewire('profile.update-profile-information-form')

                                                <x-jet-section-border />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div x-show.transition.in.duration.500.origin.top="openTab === 3">
                                    <div class="px-6">
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                                <div class="relative">
                                                    <img
                                                        alt="..."
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                                                        style="max-width: 150px;"
                                                    />
                                                </div>
                                            </div>
                                            <div
                                                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                                            >
                                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                                    <button
                                                        class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                                                        type="button"
                                                        style="transition: all 0.15s ease 0s;"
                                                    >
                                                        Connect
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                                    <div class="mr-4 p-3 text-center">
                                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">N2</span>
                                                        <span class="text-sm text-gray-500">Xếp Hạng Level </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-12">
                                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                                Phung Trung Hieu
                                            </h3>
                                            <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                                <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                                                Los Angeles, California
                                            </div>
                                            <div class="mb-2 text-gray-700 mt-10">
                                                <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                                                >Solution Manager - Creative Tim Officer
                                            </div>
                                            <div class="mb-2 text-gray-700">
                                                <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                                                >University of Computer Science
                                            </div>
                                        </div>
                                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                                            <div class="flex flex-wrap justify-center">
                                                <div class="w-full lg:w-9/12 px-4">
                                                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                                        An artist of considerable range, Jenna the name taken by
                                                        Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                                        performs and records all of his own music, giving it a
                                                        warm, intimate feel with a solid groove structure. An
                                                        artist of considerable range.
                                                    </p>
                                                    <a href="#pablo" class="font-normal text-pink-500"
                                                    >Show more</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show.transition.in.duration.500.origin.top="openTab === 4">
                                    <div class="px-6">
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                                <div class="relative">
                                                    <img
                                                        alt="..."
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                                                        style="max-width: 150px;"
                                                    />
                                                </div>
                                            </div>
                                            <div
                                                class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                                            >
                                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                                    <button
                                                        class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                                                        type="button"
                                                        style="transition: all 0.15s ease 0s;"
                                                    >
                                                        Connect
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                                    <div class="mr-4 p-3 text-center">
                                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">N2</span>
                                                        <span class="text-sm text-gray-500">Xếp Hạng Level </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-12">
                                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                                Phung Trung Hieu
                                            </h3>
                                            <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                                <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                                                Los Angeles, California
                                            </div>
                                            <div class="mb-2 text-gray-700 mt-10">
                                                <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                                                >Solution Manager - Creative Tim Officer
                                            </div>
                                            <div class="mb-2 text-gray-700">
                                                <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                                                >University of Computer Science
                                            </div>
                                        </div>
                                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                                            <div class="flex flex-wrap justify-center">
                                                <div class="w-full lg:w-9/12 px-4">
                                                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                                        An artist of considerable range, Jenna the name taken by
                                                        Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                                        performs and records all of his own music, giving it a
                                                        warm, intimate feel with a solid groove structure. An
                                                        artist of considerable range.
                                                    </p>
                                                    <a href="#pablo" class="font-normal text-pink-500"
                                                    >Show more</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
    </main>
</x-app-layout>
