<nav class="leading-none bg-gradient-to-b from-gray-100 to-gray-50 fixed w-full top-0 shadow-md z-[40]">
    <div class="mx-20 border-b py-3 flex justify-between items-center">
        <div class="">
            <div class="flex gap-2 items-center">
                <span class="text-sm leading-none poppins-medium">Ikuti kami di</span>
                <div class="flex items-center gap-2">
                    <a href="">
                        <i class="fa-brands fa-facebook text-black hover:text-primary duration-200"></i>
                    </a>
                    <a href="">
                        <i
                            class="fa-brands fa-square-instagram text-black hover:text-pink-700 duration-200 text-[17px]"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex gap-2 items-center text-blue-800 poppins-medium">
                <a href="javascript:void(0)" class="text-sm leading-none" data-dropdown-toggle="dropdownNotification">
                    <i class="fa-regular fa-bell mr-1"></i> Notifikasi
                </a>
            </div>
            <div class="flex gap-2 items-center text-blue-800 poppins-medium">
                <a href="javascript:void(0)" class="text-sm leading-none" data-dropdown-toggle="translateDropdown">
                    <i class="fa-regular fa-globe mr-1"></i> Bahasa Indonesia
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="flex py-1 px-28">
        <div class="flex-[1] py-3 flex justify-center items-center">
            <a href="{{ route('home') }}" class="poppins-black text-primary text-3xl">CITRA</a>
        </div>
        <div class="flex-[1.5] py-3">
            <form action="javascript:void(0)" class="relative w-full">
                <div class="flex border rounded-md overflow-hidden">
                    <input id="input-keyword" autocomplete="off" type="text"
                        class="px-5 h-[40px] flex-auto outline-none border-none" placeholder="Cari Produk...">
                    <button class="w-[40px] h-[40px] bg-primary flex justify-center items-center" type="button">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </button>
                </div>

                <div id="search-result"
                    class="hidden absolute z-[999] w-full bg-white mt-2 shadow-xl rounded-lg overflow-hidden">
                    {{-- Data Ditampilkan Dari Javascript --}}
                    <div id="container-result" class="overflow-auto max-h-[500px] styling-scrollbar"></div>
                    {{-- <a href=""
                        class="hover:bg-blue-700 hover:text-white duration-200   py-3 px-5 flex justify-center text-sm text-blue-700 poppins-medium">
                        Lihat semua hasil pencarian <span id="search-keyword"></span>
                    </a> --}}
                </div>
            </form>
        </div>
        <div class="flex-[1] py-3 flex justify-end items-center gap-5">
            <a href="javascript:void(0)" id="open-cart" class="flex gap-2 cursor-pointer group"
                data-dropdown-toggle="keranjang">
                <div class="relative" id="container-total-cart">
                    @if (getQuantityCart() != 0)
                        <span id="cart_count"
                            class="absolute top-[-7px] right-[-7px] bg-yellow-300 w-[17px] h-[17px] rounded-full flex justify-center items-center text-[9px] poppins-semibold">
                            {{ getQuantityCart() }}
                        </span>
                    @endif
                    <i
                        class="fa-solid fa-cart-shopping text-primary text-[30px] group-hover:text-primary-hover duration-300"></i>
                </div>
                <span
                    class="poppins-medium text-primary flex items-center group-hover:text-primary-hover duration-300">Keranjang</span>
            </a>
            <a href="javascript:void(0)" id="open-favorite" class="flex gap-2 cursor-pointer group"
                data-dropdown-toggle="favorit">
                <div class="relative" id="container-total-favorite">
                    @if (getCountFavorite() != 0)
                        <span id="favorite_count"
                            class="absolute top-[-7px] right-[-7px] bg-yellow-300 w-[17px] h-[17px] rounded-full flex justify-center items-center text-[9px] poppins-semibold">
                            {{ getCountFavorite() }}
                        </span>
                    @endif
                    <i
                        class="fa-solid fa-heart text-primary text-[30px] group-hover:text-primary-hover duration-300"></i>
                </div>
                <span
                    class="poppins-medium text-primary flex items-center group-hover:text-primary-hover duration-300">Favorit</span>
            </a>
        </div>
    </div>
    <div class="py-5 border-t mx-20">
        <div class="flex items-center">
            <a class="flex gap-2 justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-r text-center"
                href="{{ route('about-us') }}"><i class="fa-solid fa-building"></i> Tentang Kami</a>
            @auth
                <a data-dropdown-toggle="product-dropdown"
                    class="flex gap-2 items-center justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-r text-center"
                    href="javascript:void(0)"><i class="fa-solid fa-list"></i> Produk</a>
            @else
                <a class="flex gap-2 justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-r text-center"
                    href="{{ route('product') }}"><i class="fa-solid fa-bag-shopping"></i> Semua Produk</a>
            @endauth
            <a class="flex gap-2 justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-r text-center"
                href="{{ route('category') }}"><i class="fa-solid fa-tag"></i> Kategori Produk</a>
            <a class="flex gap-2 justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-r text-center"
                href="{{ route('promo') }}"><i class="fa-solid fa-percent"></i> Promo</a>

            @auth
                <div class="relative duration-300 hover:-translate-y-[2px] flex justify-center gap-2 flex-[1] border-l text-center poppins-semibold"
                    href="">
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full md:me-0 dark:text-white"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 me-2 rounded-full" src="{{ getUserImage() }}" alt="user photo">
                        <span class="poppins-bold capitalize">{{ Auth::user()->name }}</span>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="overflow-hidden z-10 hidden bg-white divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Akun
                                    Saya</a>
                            </li>
                        </ul>
                        <form action="{{ route('logout') }}" method="POST"
                            class="flex justify-center border-t-2 border-black" role="search">
                            @csrf
                            @method('DELETE')
                            <button
                                class="duration-300 hover:bg-red-700 hover:text-white w-full text-center flex justify-center px-4 py-3 text-sm text-red-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</button>
                        </form>
                    </div>
                </div>
            @else
                <a class="flex gap-2 justify-center text-primary duration-300 hover:-translate-y-[2px] flex-[1] border-l text-center poppins-semibold"
                    href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i>
                    Masuk atau Daftar
                </a>
            @endauth
        </div>
    </div>
</nav>

{{-- Produk Dropdown --}}
<div id="product-dropdown"
    class="overflow-hidden z-[999] !mt-2 hidden bg-white divide-gray-100 rounded-lg shadow w-[200px] dark:bg-gray-700 dark:divide-gray-600">
    <a class="flex gap-2 px-5 py-4 text-sm poppins-medium items-center justify-center text-blue-500 duration-300 text-center border-b hover:bg-gray-100"
        href="{{ route('product') }}"><i class="fa-solid fa-bag-shopping"></i> Daftar Produk</a>
    <a class="flex gap-2 px-5 py-4 text-sm poppins-medium items-center justify-center text-blue-500 duration-300 text-center hover:bg-gray-100"
        href="{{ route('redeem-product') }}"><i class="fa-solid fa-tickets-perforated"></i> Redeem Produk</a>
</div>

{{-- Translate Dropdown --}}
<div id="translateDropdown"
    class="z-[99] hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="translateDropdownDefaultButton">
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100">Bahasa Indonesia</a>
        </li>
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100">English</a>
        </li>
    </ul>
</div>

<!-- Keranjang menu -->
<div id="keranjang"
    class="w-[400px] z-[99] hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-700">
    {{-- Data Cart Ditampilkan Dari Javascript --}}
    <div id="container-cart"></div>
</div>

<!-- Favorite menu -->
<div id="favorit"
    class="w-[300px] z-[99] hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-700">
    {{-- Data Favorite Ditampilkan Dari Javascript --}}
    <div id="container-favorite"></div>
</div>

{{-- Dropdown Notifikasi --}}
<div id="dropdownNotification"
    class="z-[99] hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-lg"
    aria-labelledby="dropdownNotificationButton">
    <div class="block px-4 py-3 font-medium text-center text-sm text-white rounded-t-lg bg-blue-800">
        Notifikasi
    </div>
    <div class="divide-y divide-gray-100">
        <div class="flex px-4 py-4">
            <div class="flex-shrink-0">
                <img class="rounded-full w-10 h-10 scale-95" src="{{ asset('img/icon-tab.png') }}" alt="Jese image">
            </div>
            <div class="w-full ps-3">
                <div class="text-gray-500 text-sm">Pesanan Anda Telah Diproses oleh admin
                </div>
                <div class="text-xs text-blue-800">a few moments ago</div>
            </div>
        </div>

    </div>
    {{-- <a href="#"
        class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
        <div class="inline-flex items-center ">
            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                <path
                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
            </svg>
            View all
        </div>
    </a> --}}
</div>


<script>
    $(document).ready(function() {
        const auth = {{ auth()->check() ? 'true' : 'false' }};
        if (auth) {
            getCartList();
            getFavoriteList();
        }

        $("#open-cart").on("click", getCartList);
        $("#open-favorite").on("click", getFavoriteList);
        $("#input-keyword").on("input", search);


        $(document).on("click", function(e) {
            if (!$(e.target).is("#input-keyword, #search-result")) {
                $("#search-result").hide();
            }
        });

        function search() {
            const keyword = $(this).val();
            $("#search-keyword").html(` "${keyword}" `);
            $.ajax({
                type: "GET",
                url: `/search-product/${keyword}`,
                beforeSend: function() {
                    if (keyword == "") {
                        $("#search-result").hide();
                    } else {
                        let HTML = "";
                        for (let i = 0; i < 3; i++) {
                            HTML += `
                            <a href="javascript:void(0)"
                                class="cursor-default p-5 w-full flex items-center justify-between border-b">
                                <div class="flex gap-2">
                                    <div
                                        class="w-[50px] h-[50px] bg-gradient-to-r from-gray-300 to-gray-200 rounded-lg">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h1
                                            class="w-fit poppins-medium text-sm bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                                            Lorem ipsum dolor sit amet.</h1>
                                        <h1
                                            class="w-fit poppins-semibold text-sm bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                                            Rp. 1231123123
                                        </h1>
                                    </div>
                                </div>
                                <div
                                    class="w-[20px] h-[20px] bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                                    1
                                </div>
                            </a>
                            `;
                        }
                        $("#container-result").html(HTML);
                        $("#search-result").show();
                    }
                },
                success: function(response) {
                    const data = response.data;
                    $("#container-result").html(data);
                }
            });
        }

        function getCartList() {
            $.ajax({
                type: "GET",
                url: "/getCartList",
                beforeSend: function() {
                    loadingCartList();
                },
                success: function(response) {
                    const carts = response.result.cart;
                    const variant = response.result.variant;
                    const price = response.result.price;
                    const cart_count = response.cart_count;
                    let displayCart = `
                    <div class="p-3 flex justify-between items-center">
                        <h1 class="text-sm poppins-medium">Keranjang (${cart_count})</h1>
                        <a class="text-sm poppins-semibold text-primary hover:text-primary-hover" href="/cart">Lihat
                            Semua
                            Keranjang</a>
                    </div>
                    `;
                    let displayEmptyCart = `
                    <div class="bg-white shadow-md border-t rounded-t-lg p-5 flex flex-col gap-3 items-center justify-center">
                        <img class="w-[100px]" src="/img/empty-cart.png" alt="">
                        <h1 class="poppins-semibold">Belum ada item dikeranjang nihh!</h1>
                        <a href="{{ route('product') }}"
                            class="text-sm rounded-lg bg-blue-700 hover:bg-blue-800 px-5 py-2 text-white">
                            Belanja Sekarang Yuk!
                        </a>
                    </div>
                    `;
                    $.each(carts, function(i, cart) {
                        displayCart += `
                        <a href="/product/${cart.product.slug}" class="flex justify-between hover:bg-gray-100 p-3">
                            <div class="flex gap-2">
                                <img src="/${JSON.parse(cart.product.image)[0]}"
                                    class="w-[50px] h-[50px] rounded-md object-cover">
                                <div class="flex flex-col gap-1 leading-none">
                                    <h1 class="text-sm poppins-medium">${cart.product.name}</h1>
                                    <span class="capitalize text-xs">${variant[i]}</span>
                                </div>
                            </div>
                            <div class="text-sm poppins-semibold text-end">
                                ${cart.qty}
                                x
                                ${price[i]}
                            </div>
                        </a>
                        `;
                    });
                    if (cart_count != 0) {
                        $("#container-cart").html(displayCart);
                    } else {
                        $("#container-cart").html(displayEmptyCart);
                    }
                }
            });
        }

        function getFavoriteList() {
            $.ajax({
                type: "GET",
                url: "/getFavoriteList",
                beforeSend: function() {
                    loadingFavoriteList();
                },
                success: function(response) {
                    const favorites = response.result;
                    const favorite_count = response.favorite_count;

                    let displayFavorite = `
                    <div class="p-3 flex justify-between items-center">
                        <h1 class="text-sm poppins-medium ">Favorit (${favorite_count})</h1>
                        <a class="text-sm poppins-semibold text-primary hover:text-primary-hover" href="/favorit">
                            Lihat Semua Favorit
                        </a>
                    </div>
                    `;

                    let displayEmptyFavorite = `
                    <div class="bg-white shadow-md border-t rounded-t-lg p-5 flex flex-col gap-3 items-center justify-center">
                        <img class="w-[100px]" src="/img/sad-heart.png" alt="">
                        <h1 class="poppins-semibold text-center">Belum ada product yang ditambahkan</h1>
                    </div>
                    `;

                    $.each(favorites, function(i, favorite) {
                        displayFavorite += `
                        <a href="" class="flex justify-between hover:bg-gray-100 p-3">
                            <div class="flex gap-2">
                                <img src="/${JSON.parse(favorite.product.image)[0]}" class="w-[50px] h-[50px] rounded-md object-cover">
                                <div class="flex flex-col justify-center leading-none">
                                    <h1 class="text-[15px] poppins-medium">${favorite.product.name}</h1>
                                </div>
                            </div>
                        </a>
                         `;
                    });

                    if (favorite_count != 0) {
                        $("#container-favorite").html(displayFavorite);
                    } else {
                        $("#container-favorite").html(displayEmptyFavorite);
                    }
                }
            });
        }

        function loadingCartList() {
            let displayCart = `
            <div class="p-3 flex justify-between items-center">
                <h1 class="text-sm poppins-medium bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">Keranjang
                    (cart_count)</h1>
                <a class="text-sm poppins-semibold bg-gradient-to-r from-gray-300 to-gray-200 text-transparent"
                    href="/cart">
                    Lihat Semua Keranjang
                </a>
            </div>
            `;
            for (let i = 0; i < 4; i++) {
                displayCart += `
                <a href="" class="flex gap-2 justify-between p-3">
                    <div class="flex gap-2">
                        <div class="w-[50px] h-[50px] bg-gradient-to-r from-gray-300 to-gray-200 rounded-lg"></div>
                        <div class="flex flex-col gap-1 leading-none">
                            <h1 class="text-sm poppins-medium bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                                Jam Tangan One Piece</h1>
                            <span class="capitalize text-xs bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">Warnah
                                Hitam Ukuran L</span>
                        </div>
                    </div>
                    <div class="h-fit text-sm poppins-semibold text-end bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                        Rp. 000000000
                    </div>
                </a>
                `;
            }
            $("#container-cart").html(displayCart);
        }

        function loadingFavoriteList() {
            let displayFacorite = `
            <div class="p-3 flex justify-between items-center">
                <h1 class="text-sm poppins-medium bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">Favorit (1)</h1>
                <a class="text-sm poppins-semibold bg-gradient-to-r from-gray-300 to-gray-200 text-transparent"
                    href="">
                    Lihat Semua Favorit
                </a>
            </div>
            `;

            for (let i = 0; i < 4; i++) {
                displayFacorite += `
                 <a href="" class="flex justify-between p-3">
                    <div class="flex gap-2">
                        <div
                            class="w-[50px] h-[50px] bg-gradient-to-r from-gray-300 to-gray-200 text-transparent rounded-md object-cover">
                        </div>
                        <div class="flex flex-col gap-1 leading-none">
                            <h1 class="text-sm poppins-medium bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">
                                T-Shirt With Tape Details</h1>
                            <span class="text-xs bg-gradient-to-r from-gray-300 to-gray-200 text-transparent">Warna Hitam,
                                Ukuran L</span>
                        </div>
                    </div>
                </a>
                 `;
            }

            $("#container-favorite").html(displayFacorite);
        }
    });
</script>
