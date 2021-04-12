<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>K-WD Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}">--}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Demo App</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-notifications">
                    <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                        <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
                    </a>

                    <div class="dropdown-container">
                        <div class="dropdown-toolbar">
                            <div class="dropdown-toolbar-actions">
                                <a href="#">Mark all as read</a>
                            </div>
                            <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                        </div>
                        <ul class="dropdown-menu">
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Friends</a></li>
            </ul>
        </div>
    </div>
</nav>
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading"
             class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
            Loading.....
        </div>

        <!--sidebar-->
        <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
            <div class="flex flex-col h-full">
                <!-- Sidebar links -->
                <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                    <!-- Dashboards links -->
                    <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                        <a href="#" @click="$event.preventDefault(); open = !open"
                           class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                           :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                           aria-haspopup="true"
                           :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></span>
                            <span class="ml-2 text-sm"> Dashboards </span>
                            <span class="ml-auto" aria-hidden="true"><svg class="w-4 h-4 transition-transform transform"
                                                                          :class="{ 'rotate-180': open }"
                                                                          xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"/></svg></span>
                        </a>
                        <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a href="" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Default
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Project Mangement (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                E-Commerce (soon)
                            </a>
                        </div>
                    </div>

                    <!-- Components links -->
                    <div x-data="{ isActive: false, open: false }">
                        <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                        <a href="#" @click="$event.preventDefault(); open = !open"
                           class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                           :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button"
                           aria-haspopup="true"
                           :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg></span>
                            <span class="ml-2 text-sm"> Components </span>
                            <span aria-hidden="true" class="ml-auto"><svg class="w-4 h-4 transition-transform transform"
                                                                          :class="{ 'rotate-180': open }"
                                                                          xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"/></svg></span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Alerts (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Buttons (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Cards (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Dropdowns (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Forms (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Lists (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Modals (soon)
                            </a>
                        </div>
                    </div>

                    <!-- Pages links -->
                    <div x-data="{ isActive: true, open: false }">
                        <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                        <a href="#" @click="$event.preventDefault(); open = !open"
                           class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                           :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button"
                           aria-haspopup="true"
                           :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></span>
                            <span class="ml-2 text-sm"> Pages </span>
                            <span aria-hidden="true" class="ml-auto"><svg class="w-4 h-4 transition-transform transform"
                                                                          :class="{ 'rotate-180': open }"
                                                                          xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"/></svg></span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a href="../pages/blank.html" role="menuitem"
                               class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                Blank
                            </a>
                            <a href="../pages/404.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                404
                            </a>
                            <a href="../pages/500.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                500
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Profile (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Pricing (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Kanban (soon)
                            </a>
                            <a href="#" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Feed (soon)
                            </a>
                        </div>
                    </div>

                    <!-- Authentication links -->
                    <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                        <a href="#" @click="$event.preventDefault(); open = !open"
                           class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                           :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                           aria-haspopup="true"
                           :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></span>
                            <span class="ml-2 text-sm"> Authentication </span>
                            <span aria-hidden="true" class="ml-auto"><svg class="w-4 h-4 transition-transform transform"
                                                                          :class="{ 'rotate-180': open }"
                                                                          xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"/></svg></span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a href="../auth/register.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Register
                            </a>
                            <a href="../auth/login.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Login
                            </a>
                            <a href="../auth/forgot-password.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Forgot Password
                            </a>
                            <a href="../auth/reset-password.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                Reset Password
                            </a>
                        </div>
                    </div>

                    <!-- Layouts links -->
                    <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                        <a href="#" @click="$event.preventDefault(); open = !open"
                           class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                           :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button"
                           aria-haspopup="true"
                           :aria-expanded="(open || isActive) ? 'true' : 'false'">
                            <span aria-hidden="true"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor"><path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg></span>
                            <span class="ml-2 text-sm"> Layouts </span>
                            <span aria-hidden="true" class="ml-auto">
         <!-- active class 'rotate-180' --><svg class="w-4 h-4 transition-transform transform"
                                                :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor"><path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2" d="M19 9l-7 7-7-7"/></svg></span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a href="../layouts/two-columns-sidebar.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Two Columns Sidebar
                            </a>
                            <a href="../layouts/mini-plus-one-columns-sidebar.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Mini + One Columns Sidebar
                            </a>
                            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                               class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                Mini Column Sidebar
                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Sidebar footer -->
                <div class="flex-shrink-0 px-2 py-4 space-y-2">
                    <button @click="openSettingsPanel" type="button"
                            class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
                        <span aria-hidden="true"><svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                      fill="none"
                                                      viewBox="0 0 24 24" stroke="currentColor"><path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></span>
                        <span>Customize</span>
                    </button>
                </div>
            </div>
        </aside>

        <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
            <!-- Navbar -->
            <livewire:admin.header-menu/>

            <!-- Main content -->
            <h1>Pusher Test</h1>
            <p>
                Try publishing an event to channel <code>my-channel</code>
                with event name <code>my-event</code>.
            </p>
            <main>
                <div class="event-notification-box fixed right-0 top-0 text-white bg-green-400 mt-3 mr-3 px-5 py-3 rounded-sm shadow-lg transform duration-700 opacity-0"></div>
                {{ $slot }}
            </main>

            <!-- Main footer -->
            <livewire:admin.main-footer/>

        </div>
        <livewire:admin.components.setting-panel/>

        <!-- Notification panel -->
        <!-- Panel -->
        <livewire:admin.components.notification-panel/>

        <!-- Search panel -->
        <!-- Backdrop -->
        <livewire:admin.components.search-panel/>
    </div>
</div>

<!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
@livewireScripts
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/color-admin.js')}}"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

<script type="text/javascript">
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.dropdown-menu');

    if (notificationsCount <= 0) {
        notificationsWrapper.hide();
    }

    //Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
    var pusher = new Pusher('ae63fcff498ab9be7975', {
        encrypted: true,
        cluster: "ap1"
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('real-time-message');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\RealTimeMessage', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.message+`</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>
{{--<script type="text/javascript">--}}


{{--    var url = window.location.host; // hàm trả về url của trang hiện tại kèm theo port--}}
{{--    var ws = new WebSocket('ws://127.0.0.1:3000'); // mở 1 websocket với port 8000--}}
{{--    // console.log('connecting...')--}}
{{--    ws.onopen = function() //khi websocket được mở thì hàm này sẽ được thưc hiện--}}
{{--    {--}}
{{--        document.getElementById('status').innerHTML = 'Connected';--}}
{{--        led.disabled = false; //khi websocket được mở, mới cho phép--}}
{{--        console.log('connected...')--}}
{{--    };--}}
{{--</script>--}}
</body>
</html>
