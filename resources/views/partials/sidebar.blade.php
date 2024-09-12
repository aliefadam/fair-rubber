<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">
        <a class="flex items-center" href="index.html">
            <img src="/imgs/logo.jpg" class="black_logo size-[35px] rounded-full shadow-lg" alt="logo">
            {{-- <img src="/img/icon-tab.png" class="black_logo w-[30px]" alt="logo">
            <img src="/img/icon-tab.png" class="white_logo w-[30px]" alt="logo"> --}}
            {{-- <img src="/assets/images/logo/logo-c-white.svg" class="white_logo" alt="logo"> --}}
            {{-- <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span> --}}
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter text-slate-900 dark:text-white poppins-black">FAIR
                RUBBER</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                </div>
            </span>
            <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                </div>
            </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow"
        class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none opacity-0">
    </div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
        id="sidebar_menus">

        {{-- {{dd(menu())}} --}}

        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">Menu</li>
            <li>
                <a href="/admin" class="navItem active">
                    <span class="flex items-center gap-2">
                        <i class="fa-regular fa-home"></i>
                        <span>Dashboard</span>
                    </span>
                </a>
            </li>
            <li class="sidebar-menu-title">Master</li>
            <li>
                <a href="{{ route('admin.master.collector.index') }}" class="navItem">
                    <span class="flex items-center gap-2">
                        <i class="fa-regular fa-users"></i>
                        <span>Anggota</span>
                    </span>
                </a>
            </li>
            <li class="sidebar-menu-title">Transaction</li>
            <li>
                <a href="{{ route('admin.transaction.rubber-collected.index') }}" class="navItem">
                    <span class="flex items-center gap-2">
                        <i class="fa-regular fa-scale-unbalanced-flip"></i>
                        <span>Nota Timbangan</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.transaction.withdrawal.index') }}" class="navItem">
                    <span class="flex items-center gap-2">
                        <i class="fa-regular fa-money-from-bracket"></i>
                        <span>Penarikan</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.transaction.report.index') }}" class="navItem">
                    <span class="flex items-center gap-2">
                        <i class="fa-regular fa-list"></i>
                        <span>Laporan</span>
                    </span>
                </a>
            </li>
        </ul>

        {{-- @foreach (menu() as $el)
            <ul class="sidebar-menu">
                @if (checkingPrivileges($el['parent']) == 1)
                    <li class="sidebar-menu-title">{{ $el['parent'] }}</li>
                    @foreach ($el['child'] as $el1)
                        @if (count($el1['children']) > 0)
                            @if (checkingPrivileges($el1['name']) == 1)
                                <li class="">
                                    <a href="#" class="navItem">
                                        <span class="flex items-center gap-2">
                                            <i class="{{ $el1['icon'] }}"></i>
                                            <span>{{ $el1['name'] }} </span>
                                        </span>
                                        <iconify-icon class="icon-arrow"
                                            icon="heroicons-outline:chevron-right"></iconify-icon>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        @foreach ($el1['children'] as $el2)
                                            @if (checkingPrivileges($el2['name']) == 1)
                                                <li>
                                                    <a href="{{ route($el2['route']) }}"
                                                        class="{{ request()->is(str_replace('.', '/', str_replace('.index', '', $el2['route']))) || request()->is(str_replace('.', '/', $el1['route'])) ? 'active' : '' }}">{{ $el2['name'] }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @else
                            @if (checkingPrivileges($el1['name']) == 1)
                                <li>
                                    <a href="{{ route($el1['route']) }}"
                                        class="navItem {{ request()->is(str_replace('.', '/', str_replace('.index', '', $el1['route']))) ? 'active' : '' }}">
                                        <span class="flex items-center gap-2">
                                            <i class="{{ $el1['icon'] }}"></i>
                                            <span>{{ $el1['name'] }}</span>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                @endif
            </ul>
        @endforeach --}}
    </div>
</div>
<!-- End: Sidebar -->
<!-- End: Sidebar -->
