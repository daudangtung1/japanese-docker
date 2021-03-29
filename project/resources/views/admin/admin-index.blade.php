     <!-- Content header -->
     <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
    </div>

                <!-- Content -->
                <div class="mt-2">
                    <!-- State cards -->
                    <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
                        <!-- Value card -->
                        <livewire:admin.components.user-list-box-admin />
                        
                    </div>
                    <!-- Charts -->
                    <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
                        <!-- Bar chart card -->
                        <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                            <!-- Card header -->
                            <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Bar Chart</h4>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500 dark:text-light">Last year</span>
                                    <button
                                        class="relative focus:outline-none"
                                        x-cloak
                                        @click="isOn = !isOn; $parent.updateBarChart(isOn)"
                                    >
                                        <div
                                            class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                                        ></div>
                                        <div
                                            class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                                            :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                                        ></div>
                                    </button>
                                </div>
                            </div>
                            <!-- Chart -->
                            <div class="relative p-4 h-72">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>

                        <!-- Doughnut chart card -->
                        <div class="bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                            <!-- Card header -->
                            <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Doughnut Chart</h4>
                                <div class="flex items-center">
                                    <button
                                        class="relative focus:outline-none"
                                        x-cloak
                                        @click="isOn = !isOn; $parent.updateDoughnutChart(isOn)"
                                    >
                                        <div
                                            class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                                        ></div>
                                        <div
                                            class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                                            :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                                        ></div>
                                    </button>
                                </div>
                            </div>
                            <!-- Chart -->
                            <div class="relative p-4 h-72">
                                <canvas id="doughnutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Two grid columns -->
                    <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
                        <!-- Active users chart -->
                        <div class="col-span-1 bg-white rounded-md dark:bg-darker">
                            <!-- Card header -->
                            <div class="p-4 border-b dark:border-primary">
                                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Active users right
                                    now</h4>
                            </div>
                            <p class="p-4">
                                <span class="text-2xl font-medium text-gray-500 dark:text-light"
                                      id="usersCount">0</span>
                                <span class="text-sm font-medium text-gray-500 dark:text-primary">Users</span>
                            </p>
                            <!-- Chart -->
                            <div class="relative p-4">
                                <canvas id="activeUsersChart"></canvas>
                            </div>
                        </div>

                        <!-- Line chart card -->
                        <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                            <!-- Card header -->
                            <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Line Chart</h4>
                                <div class="flex items-center">
                                    <button
                                        class="relative focus:outline-none"
                                        x-cloak
                                        @click="isOn = !isOn; $parent.updateLineChart()"
                                    >
                                        <div
                                            class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                                        ></div>
                                        <div
                                            class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                                            :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                                        ></div>
                                    </button>
                                </div>
                            </div>
                            <!-- Chart -->
                            <div class="relative p-4 h-72">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
