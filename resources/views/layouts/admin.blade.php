<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/img/icon-tab.png">

    <title>Fair Rubber | {{ $title }}</title>
    {{-- <link rel="icon" type="image/png" href="/assets/images/logo/favicon.svg"> --}}

    {{-- Poppins Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    {{-- CKEditor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />

    {{-- Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- End : Theme CSS-->
    <script src="{{ asset('assets/js/settings.js') }}" sync></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css">

    @yield('more-style')
    @vite('resources/css/app.css')
</head>

<body class="dashcode-app" id="body_class">
    @if (session('message'))
        @include('partials.toast', [
            'jenis' => session('message')['jenis'],
            'pesan' => session('message')['pesan'],
        ])
    @endif
    <main class="app-wrapper">
        @include('partials.sidebar')
        @include('partials.settings')
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                @include('partials.topbar')
                <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <div id="content_layout">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
            <div
                class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
                    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
                {{-- <a href="{{ route('template.chat') }}">
                    <div>
                        <span
                            class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                                text-slate-900 ">
                            <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
                            <span
                                class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                                    justify-center rounded-full text-white z-[99]">
                                10
                            </span>
                        </span>
                        <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                            Messages
                        </span>
                    </div>
                </a>
                <a href="{{ route('template.profile') }}"
                    class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
                        h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                    <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt=""
                            class="w-full h-full rounded-full border-2 border-slate-100">
                    </div>
                </a> --}}
                <a href="#">
                    <div>
                        <span
                            class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
                                text-slate-900">
                            <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                            <span
                                class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
                                    justify-center rounded-full text-white z-[99]">
                                2
                            </span>
                        </span>
                        <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                            Notifications
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/rt-plugins.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Flow Bite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        function formatMoney(params) {
            return 'Rp. ' + Intl.NumberFormat("id").format(params);
        }

        function formatNumber(params) {
            return Intl.NumberFormat("id").format(params);
        }

        function init_select2() {
            $("select.select-2").select2();

            // Styling
            $(".select2-container").attr("style", "width: 100%;");
            $(".select2-selection").attr("style",
                "padding: 5px; display: flex; align-items: center; height: 43px;");
            $(".select2-selection").addClass(
                "!bg-gray-50 !border-gray-300 !text-gray-900 !text-sm !rounded-lg !p-2.5 !outline-none !focus:ring-blue-500 !focus:border-blue-500"
            );
            $(".select2-selection__rendered").css("line-height", "1");
            $(".select2-selection__arrow").addClass("!top-[50%] !right-[10px] !-translate-y-[50%]");
            $(".select2-selection__rendered").css("padding", "10px 5px");
        }

        init_select2();
    </script>

    @yield('more-script')
</body>

</html>
