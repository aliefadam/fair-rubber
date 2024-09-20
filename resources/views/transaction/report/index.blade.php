@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <div action="" class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        <h1 class="text-xl font-medium ">Filter </h1>
        <br>
        <div class="flex items-end gap-7">
            <div class="flex-[4]">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Petani</label>
                <input type="text" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama" required />
            </div>
            <div class="flex-[4]">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kolektor
                </label>
                <input type="text" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama" required />
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
            <h1 class="text-xl font-medium ">Data Anggota</h1>
        </div>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 border-collapse border border-gray-300">
                <thead class="text-xs text-gray-700 bg-gray-100">
                    <tr>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 text-center">No</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 text-center">Input Data</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 text-center">Penimbangan Pabrik</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 text-center">Disalurkan</th>
                        <th colspan="4" class="border border-gray-300 px-4 py-2 text-center">Timbangan Masuk</th>
                        <th colspan="2" class="border border-gray-300 px-4 py-2 text-center">Disalurkan</th>
                        <th colspan="2" class="border border-gray-300 px-4 py-2 text-center">Belum Salurkan</th>
                        <th colspan="2" class="border border-gray-300 px-4 py-2 text-center">Sudah Salurkan</th>
                        <th colspan="3" class="border border-gray-300 px-4 py-2 text-center">Pembatalan Premi</th>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Kolektor</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Pabrik</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Dapat Toleransi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Timbangan Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Premi</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Alasan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border border-gray-300">
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">07/08/2024</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">07/08/2024</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">150 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">150 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">0 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">150 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">150 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 300.000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">150 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 300.000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">100 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 200.000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                    </tr>
                    <tr class="border border-gray-300">
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">31/08/2024</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">31/01/2024</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">260 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">247 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">13 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">260 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">410 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 820.000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">410 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 0</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">510 Kg</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp. 1.020.000</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                    </tr>
                    <!-- Add more rows here as needed -->
                </tbody>
            </table>
            
        </div>
    </div>




    <!-- Modal toggle -->


    <!-- Main modal -->

@endsection

@section('more-script')
@endsection
