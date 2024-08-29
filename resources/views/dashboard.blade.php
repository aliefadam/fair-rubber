@extends('layouts.admin')
@section('content')
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            Dashboard
        </h4>
        {{-- <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <button
                class="btn inline-flex justify-center bg-white text-slate-700 dark:bg-slate-700 !font-normal dark:text-white ">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light"
                        icon="heroicons-outline:calendar"></iconify-icon>
                    <span>Weekly</span>
                </span>
            </button>
            <button
                class="btn inline-flex justify-center bg-white text-slate-700 dark:bg-slate-700 !font-normal dark:text-white ">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light"
                        icon="heroicons-outline:filter"></iconify-icon>
                    <span>Select Date</span>
                </span>
            </button>
        </div> --}}
    </div>
    <div class="grid grid-cols-12 gap-5 mb-5">
        <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
            <div class="bg-no-repeat bg-cover bg-center p-5 rounded-[6px] relative"
                style="background-image: url(/assets/images/all-img/widget-bg-2.png)">
                <div class="max-w-[180px]">
                    <h4 class="text-xl font-medium text-white mb-2">
                        <span class="block font-normal">Good evening,</span>
                        {{-- <span class="block">{{ Auth::user()->name }}</span> --}}
                    </h4>
                    <p class="text-sm text-white font-normal">
                        Kabar Baik Hari Ini ?
                    </p>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                <!-- BEGIN: Group Chart -->
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#e9ffe5] dark:bg-slate-900	 text-success-500">
                                    <iconify-icon icon=heroicons:shopping-cart></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Pendapatan (E)
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pendapatanDiakui'], true) }} --}}
                                </div>
                            </div>
                        </div>
                        <div class="ltr:ml-auto rtl:mr-auto max-w-[124px]">
                            <div id="spae-line1"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#fffde5] dark:bg-slate-900	 text-warning-500">
                                    <iconify-icon icon=heroicons:shopping-cart></iconify-icon>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Pendapatan (U)
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pendapatanPending'], true) }} --}}
                                </div>
                            </div>
                        </div>
                        <div class="ltr:ml-auto rtl:mr-auto max-w-[124px]">
                            <div id="spae-line3"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#FFEDE6] dark:bg-slate-900	 text-warning-500">
                                    <iconify-icon icon=heroicons:cube></iconify-icon>

                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Produk Terjual
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['produkTerjual']) }} --}}
                                </div>
                            </div>
                        </div>
                        <div class="ltr:ml-auto rtl:mr-auto max-w-[124px]">
                            <div id="spae-line2"></div>
                        </div>
                    </div>
                </div>

                <!-- END: Group Chart -->
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-5 mb-5">

        <div class="2xl:col-span-12 lg:col-span-12 col-span-12">
            <div class="grid md:grid-cols-5 grid-cols-1 gap-4">
                <!-- BEGIN: Group Chart -->
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#ffe3d9] dark:bg-slate-900 text-danger-500">
                                    <i class="fa-light fa-money-bill"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Belum Bayar
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pesananMenungguPembayaran']) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#e6f7ff] dark:bg-slate-900	 text-info-500">
                                    <i class="fa-light fa-circle-check"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Dikonfimasi
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pesananDikonfirmasi']) }} --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#fffce6] dark:bg-slate-900	 text-[#9dbe43]">
                                    <i class="fa-light fa-arrows-rotate-reverse"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Diproses
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pensananDiProses']) }} --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#EAE6FF] dark:bg-slate-900	 text-[#5743BE]">
                                    <i class="fa-sharp fa-light fa-truck-moving"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Pengiriman
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pesananDalamPengiriman']) }} --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-4 pb-3 px-4">
                        <div class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none">
                                <div
                                    class="h-12 w-12 rounded-full flex flex-col items-center justify-center text-2xl bg-[#eaffe6] dark:bg-slate-900	 text-success-500">
                                    <i class="fa-light fa-box-check"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="text-slate-600 dark:text-slate-300 text-sm mb-1 font-medium">
                                    Selesai
                                </div>
                                <div class="text-slate-900 dark:text-white text-lg font-medium">
                                    {{-- {{ formatMoney(dashboardData()['pesananDiterima']) }} --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Group Chart -->
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5">
        <div class="2xl:col-span-8 lg:col-span-7 col-span-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="legend-ring">
                        <div id="column-bar-charts"></div>

                        {{-- <div id="revenue-barchart"></div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-4 lg:col-span-5 col-span-12">
            <div class="card">
                <header class="card-header">
                    <h4 class="text-2xl poppins-medium">Informasi</h4>
                    <div>
                        <!-- BEGIN: Card Dropdown -->
                        {{-- <div class="relative">
                            <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span
                                        class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                        rounded dark:text-slate-400">
                                        <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                    </span>
                                </button>
                                <ul
                                    class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last 28 Days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last Month</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- END: Card Droopdown -->
                    </div>
                </header>


                <div class="card-body p-6">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-5">
                        <div class="bg-slate-50 dark:bg-slate-900 rounded pt-3 px-4">
                            <div class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">
                                Total Pengguna
                            </div>
                            <div class="text-lg text-slate-900 dark:text-white font-medium mb-[6px]">
                                {{-- {{ formatMoney(dashboardData()['totalUser']) }} --}}
                            </div>
                            <div class="mt-4">
                                <div class="bar-chart" colors="#FA916B" height="44"></div>
                            </div>
                        </div>
                        <!-- end single -->
                        <div class="bg-slate-50 dark:bg-slate-900 rounded pt-3 px-4">
                            <div class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">
                                Pesanan Masuk
                            </div>
                            <div class="text-lg text-slate-900 dark:text-white font-medium mb-[6px]">
                                {{-- {{ formatMoney(dashboardData()['totalPesananMingguIni']) }} --}}
                            </div>
                            {{-- <div class="font-normal text-xs text-slate-600 dark:text-slate-300"> --}}
                            {{-- <span class="text-primary-500">+02% --}}
                            {{-- </span> --}}
                            {{-- From last Week --}}
                            {{-- </div> --}}
                            <div class="mt-4">
                                <div class="line-chart" colors="#4669fa" height="44"></div>
                            </div>
                        </div>
                        <!-- end single -->
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 dark:bg-slate-900 rounded pt-3 px-4">
                                <div class="flex items-center">
                                    <div class="flex-none">
                                        <div class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">
                                            Pendapatan Keseluruhan
                                        </div>
                                        <div class="text-lg text-slate-900 dark:text-white font-medium mb-[6px]">
                                            {{-- {{ formatMoney(dashboardData()['pendapatanDiakui'] + dashboardData()['pendapatanPending'], true) }} --}}
                                        </div>
                                        {{-- <div class="font-normal text-xs text-slate-600 dark:text-slate-300">
                                            <span class="text-primary-500">+08%</span>
                                            From last Week
                                        </div> --}}

                                        <div class="font-normal text-xs text-slate-600 dark:text-slate-300">
                                            <span {{-- class="text-info-500 font-medium">{{ formatMoney(dashboardData()['pendapatanDiakui'], true) }}</span> --}} (Earned) <br>
                                                <span {{-- class="text-danger-500 font-medium">{{ formatMoney(dashboardData()['pendapatanPending'], true) }}</span> --}} (Unearned) </div>
                                        </div>
                                        <div class="flex-1">
                                            <div class="legend-ring2">
                                                <div id="donut-chart-income" class="donut-chart-income" height="180"
                                                    colors="#F1595C,#0CE7FA" hidelabel="hideLabel" size="65%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-2xl poppins-medium">Pelanggan Setia</h4>

                    </div>
                    <div class="card-body p-6">
                        <!-- BEGIN: Customer Card -->
                        <div class="pb-2">
                            {{-- <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-info-500">
                                <div class="  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <img src=/assets/images/all-img/cus-1.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        2
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Nicole Kidman
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    70
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">70%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-info-500 h-full rounded-xl" style="width: 70%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-warning-500">
                                <div class="  ring-2 ring-[#FFC155]  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <span class="crown absolute -top-[24px] left-1/2 -translate-x-1/2">
                                        <img src="/assets/images/icon/crown.svg" alt="">
                                    </span>
                                    <img src=/assets/images/all-img/cus-2.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        1
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Monica Bellucci
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    80
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">80%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-warning-500 h-full rounded-xl" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-success-500">
                                <div class="  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <img src=/assets/images/all-img/cus-3.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        3
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Pamela Anderson
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    65
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">65%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-success-500 h-full rounded-xl" style="width: 65%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="grid grid-cols-1 gap-5 mt-5">


                            </div>
                        </div>
                        <!-- END: Customer Card -->
                    </div>
                </div>
            </div>

            <div class="xl:col-span-6 col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-2xl poppins-medium">Pelanggan Terbaru</h4>

                    </div>
                    <div class="card-body p-6">
                        <!-- BEGIN: Customer Card -->
                        <div class="pb-2">
                            {{-- <div class="grid md:grid-cols-3 grid-cols-1 gap-5">
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-info-500">
                                <div class="  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <img src=/assets/images/all-img/cus-1.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        2
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Nicole Kidman
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    70
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">70%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-info-500 h-full rounded-xl" style="width: 70%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-warning-500">
                                <div class="  ring-2 ring-[#FFC155]  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <span class="crown absolute -top-[24px] left-1/2 -translate-x-1/2">
                                        <img src="/assets/images/icon/crown.svg" alt="">
                                    </span>
                                    <img src=/assets/images/all-img/cus-2.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        1
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Monica Bellucci
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    80
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">80%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-warning-500 h-full rounded-xl" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative z-[1] text-center p-4 rounded before:w-full before:h-[calc(100%-60px)] before:absolute before:left-0
                                before:top-[60px] before:rounded before:z-[-1] before:bg-opacity-[0.1] before:bg-success-500">
                                <div class="  h-[70px] w-[70px] rounded-full mx-auto mb-4 relative">
                                    <img src=/assets/images/all-img/cus-3.png alt=""
                                        class="w-full h-full rounded-full">
                                    <span
                                        class="h-[27px] w-[27px] absolute right-0 bottom-0 rounded-full bg-[#FFC155] border border-white flex flex-col
                                        items-center justify-center text-white text-xs font-medium">
                                        3
                                    </span>
                                </div>
                                <h4 class="text-sm text-slate-600 font-semibold mb-4">
                                    Pamela Anderson
                                </h4>
                                <div
                                    class="inline-block bg-slate-900 text-white px-[10px] py-[6px] text-xs font-medium rounded-full min-w-[60px]">
                                    65
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm font-normal dark:text-slate-300 mb-3 mt-4">
                                        <span>Progress</span>
                                        <span class="font-normal">65%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-xl overflow-hidden">
                                        <div class="progress-bar bg-success-500 h-full rounded-xl" style="width: 65%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="grid grid-cols-1 gap-5 mt-5">


                            </div>
                        </div>
                        <!-- END: Customer Card -->
                    </div>
                </div>
            </div>
            <div class="xl:col-span-12 col-span-12">
                <div class="card">
                    <div class="card-header noborder">
                        <h4 class="text-2xl poppins-medium">Pesanan Terbaru
                        </h4>
                        {{-- <div>
                        <!-- BEGIN: Card Dropdown -->
                        <div class="relative">
                            <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span
                                        class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                                        rounded dark:text-slate-400">
                                        <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                                    </span>
                                </button>
                                <ul
                                    class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last 28 Days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last Month</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                            dark:hover:text-white">
                                            Last Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END: Card Droopdown -->
                    </div> --}}
                    </div>
                    <div class="card-body p-6">
                        <!-- BEGIN: Order table -->
                        <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                        <thead class=" bg-slate-200 dark:bg-slate-700">
                                            <tr>
                                                <th scope="col" class=" table-th ">
                                                    Cust
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Invoice
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Harga
                                                </th>
                                                <th scope="col" class=" table-th ">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END: Order Table -->
                    </div>
                </div>
            </div>


            <div class="xl:col-span-6 col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-2xl poppins-medium">Produk Terbaru</h4>

                    </div>
                    <div class="card-body p-6">
                        <!-- BEGIN: Products -->
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-5">



                        </div>
                        <!-- END: Product -->
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-2xl poppins-medium">Produk Terlaris</h4>

                    </div>
                    <div class="card-body p-6">
                        <!-- BEGIN: Products -->
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-5">



                        </div>
                        <!-- END: Product -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
