@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <div action="" class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        <h1 class="text-xl font-medium ">Data Kolektor</h1>
        <br>
        <div class="grid grid-cols-2 gap-7">
            <div class="mb-5">
                <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Kolektor <span class="text-red-500">*</span>
                </label>
                <select name="customer_id" id="customer_id"
                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Acip</option>
                </select>
                <div class="pt-5 customerInformation">
                    <h6 class="pb-3 text-sm text-gray-800 font-bold">Informasi Kolektor</h6>
                    <p class="text-sm dropNameCustomer text-gray-600 dark:text-gray-200">Acip</p>
                    <p class="text-sm dropPhoneCustomer text-gray-600 dark:text-gray-200">Jl Wonosari No. 1 Surabaya</p>
                    <p class="text-sm dropAddressCustomer text-gray-600 dark:text-gray-200">0821819192</p>
                </div>
            </div>
            <div class="mb-5">
                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Tanggal Penimbangan Pabrik
                </label>
                <input type="date" id="nik" name="nik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-medium ">Data Anggota Petani</h1>
            <a class="inline-flex justify-center px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-[25px]"
                href="#">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="heroicons-outline:plus"></iconify-icon>
                    <span>Tambah Data</span>
                </span>
            </a>
        </div>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 min-w-[200px]">
                            Nama Petani
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Desa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Timbangan Kolektor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Timbangan Pabrik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dapat Ditoleransi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Timbangan Premi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                    </tr>
                </tbody>
                <tfoot>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4" colspan="3">
                            <p class="text-[15px] font-semibold"> Total </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 100 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 100 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 100 </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold"> 100 </p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Premi Petani </p>
                        </th>
                        <th class="px-6 py-4 text-end">
                            <p class="text-[15px] font-semibold"> Rp. 1.500.000 </p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Premi Petani </p>
                        </th>
                        <th class="px-6 py-4 text-end">
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
