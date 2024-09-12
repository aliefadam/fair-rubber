@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <div action="" class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        <h1 class="text-xl font-medium ">Filter Tanggal</h1>
        <br>
        <div class="flex items-end gap-7">
            <div class="flex-[4]">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Mulai</label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="flex-[4]">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Akhir
                </label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="flex-[1]">
                <button type="button"
                    class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-regular fa-magnifying-glass mr-1"></i> Filter
                </button>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-medium ">Data Anggota Kolektor</h1>
        </div>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th colspan="4"></th>
                        <th scope="col" colspan="3"
                            class="text-center px-6 py-3 bg-gray-100 border-b border-gray-300">
                            Belum Salurkan
                        </th>
                        <th scope="col" colspan="3"
                            class="text-center px-6 py-3 bg-gray-200 border-b border-gray-400">
                            Sudah Salurkan
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" rowspan="2" class="text-center p-4">
                            No
                        </th>
                        <th scope="col" class="text-start px-6 py-3 min-w-[300px] ">
                            Nama Petani
                        </th>
                        <th scope="col" class="text-start px-6 py-3 min-w-[250px] ">
                            Desa
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100 min-w-[200px]">
                            Total Timbangan
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100 min-w-[300px]">
                            Premi Petani
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100 min-w-[300px]">
                            Premi Kolektor
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[200px]">
                            Total Timbangan
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[300px]">
                            Premi Petani
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[300px]">
                            Premi Kolektor
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4"><button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                type="button"> ACIP </button> </td>
                        <td class="px-6 py-4">Kaduhayu</td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">AHMAD</td>
                        <td class="px-6 py-4">Kaduhayu</td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">ERDI</td>
                        <td class="px-6 py-4">Kaduhayu</td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">

                            <div class="relative">
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                    Kg
                                </div>
                            </div>

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp.
                                </span>
                                <input type="text" id="website-admin"
                                    class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                    placeholder="0">
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4" colspan="4">
                            <p class="text-[15px] font-semibold text-end">Total</p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 2150 Kg </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 2150 Kg </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>




    <!-- Modal toggle -->


    <!-- Main modal -->
    <div id="default-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Data Petani Kolektor " ACIP "
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th colspan="4"></th>
                                    <th scope="col" colspan="2"
                                        class="text-center px-6 py-3 bg-gray-100 border-b border-gray-300">
                                        Belum Salurkan
                                    </th>
                                    <th scope="col" colspan="2"
                                        class="text-center px-6 py-3 bg-gray-200 border-b border-gray-400">
                                        Sudah Salurkan
                                    </th>
                                    <th colspan="2"></th>

                                </tr>
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" rowspan="2" class="text-center p-4">
                                        No
                                    </th>
                                    <th scope="col" class="text-start px-6 py-3 min-w-[250px] ">
                                        Nama Petani
                                    </th>
                                    <th scope="col" class="text-start px-6 py-3 min-w-[200px] ">
                                        Desa
                                    </th>
                                    <th scope="col" class="text-center px-6 py-3 bg-gray-100 min-w-[200px]">
                                        Total Timbangan
                                    </th>
                                    <th scope="col" class="text-center px-6 py-3 bg-gray-100 min-w-[300px]">
                                        Premi Petani
                                    </th>

                                    <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[200px]">
                                        Total Timbangan
                                    </th>
                                    <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[300px]">
                                        Premi Petani
                                    </th>
                                    <th scope="col" rowspan="2" class="text-center px-6 py-3  min-w-[300px]">
                                        No. Rekening
                                    </th>
                                    <th scope="col" rowspan="2" class="text-center px-6 py-3  min-w-[200px]">
                                        Status Premi
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">Amin</td>
                                    <td class="px-6 py-4">Kaduhayu</td>
                                    <td class="px-6 py-4">

                                        <div class="relative">
                                            <input type="text" id="email-address-icon"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                                Kg
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                Rp.
                                            </span>
                                            <input type="text" id="website-admin"
                                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">

                                        <div class="relative">
                                            <input type="text" id="email-address-icon"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                                Kg
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                Rp.
                                            </span>
                                            <input type="text" id="website-admin"
                                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                        </div>
                                    </td>
                                    <td class="text-center">012831010293</td>

                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">2</td>
                                    <td class="px-6 py-4">Erah</td>
                                    <td class="px-6 py-4">Kaduhayu</td>
                                    <td class="px-6 py-4">

                                        <div class="relative">
                                            <input type="text" id="email-address-icon"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                                Kg
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                Rp.
                                            </span>
                                            <input type="text" id="website-admin"
                                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">

                                        <div class="relative">
                                            <input type="text" id="email-address-icon"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                                Kg
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                Rp.
                                            </span>
                                            <input type="text" id="website-admin"
                                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                placeholder="0">
                                        </div>
                                    </td>
                                    <td class="text-center">012831010293</td>
                                    <td class="text-center">

                                        <div class="max-w-sm mx-auto">
                                            <select id="countries"
                                                class="bg-gray-50 border border-gray-300 win-w-[200px] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>- Select -</option>
                                                <option value="Wajar">Wajar</option>
                                                <option value="Tidak Wajar">Tidak Wajar</option>
                                            </select>
                                        </div>

                                    </td>

                                </tr>
                            </tbody>
                            <tfoot>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th class="px-6 py-4" colspan="4">
                                        <p class="text-[15px] font-semibold text-end">Total</p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> 2150 Kg </p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> 2150 Kg </p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                                    </th>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th class="px-6 py-4" colspan="8">
                                        <p class="text-[15px] font-semibold text-end">Premi Petani</p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                                    </th>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th class="px-6 py-4" colspan="8">
                                        <p class="text-[15px] font-semibold text-end">Premi Kolektor</p>
                                    </th>
                                    <th class="px-6 py-4 text-center">
                                        <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                                    </th>
                                </tr>
                        </table>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex justify-between items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                        Data</button>
                    <button data-modal-hide="default-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('more-script')
@endsection
