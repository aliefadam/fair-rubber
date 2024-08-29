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
                        <th scope="col" class="text-center px-6 py-3 min-w-[200px]">
                            Nama Petani
                        </th>
                        <th scope="col" class="text-center px-6 py-3">
                            Desa
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100">
                            Total Timbangan
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100">
                            Premi Petani
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-100">
                            Premi Kolektor
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200">
                            Total Timbangan
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200">
                            Premi Petani
                        </th>
                        <th scope="col" class="text-center px-6 py-3 bg-gray-200">
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
                        <td class="px-6 py-4">Budi Santoso</td>
                        <td class="px-6 py-4">Kaduhayu</td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
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
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </td>
                        <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
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
@endsection

@section('more-script')
@endsection
