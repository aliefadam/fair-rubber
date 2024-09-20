@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}
    <div class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        <div class="text-end gap-5">
            <div class="py-5">
                <h6 class="pb-3 text-sm text-gray-800 font-bold">Informasi Kolektor</h6>
                <p class="text-sm text-gray-600 dark:text-gray-200 text-weight-bold dark:text-weight-bold">
                    {{ $collector->code }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ $collector->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ $collector->address }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ $collector->phone }}</p>
            </div>
        </div>
    </div>


    <h1 class="text-xl font-bold my-5">Data Petani</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Petani
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No KK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tlp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Bergabung
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bank
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Rekening
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No rekening
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Lahir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Provinsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kota
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kabupaten
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kecamatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Kebun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ukuran Kebun (m<sup>2</sup>)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Pohon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Panen Mingguan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kepemilikan Kebun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collector->farmers as $farmer)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">{{ $farmer->name }}</td>
                        <td class="px-6 py-4">{{ $farmer->nik }}</td>
                        <td class="px-6 py-4">1234567890123456</td>
                        <td class="px-6 py-4">081234567890</td>
                        <td class="px-6 py-4">2022-01-15</td>
                        <td class="px-6 py-4">Laki-laki</td>
                        <td class="px-6 py-4">Bank BRI</td>
                        <td class="px-6 py-4">Budi Santoso</td>
                        <td class="px-6 py-4">1234567890</td>
                        <td class="px-6 py-4">1980-05-10</td>
                        <td class="px-6 py-4">Jawa Barat</td>
                        <td class="px-6 py-4">Bandung</td>
                        <td class="px-6 py-4">Kabupaten Bandung</td>
                        <td class="px-6 py-4">Cimahi</td>
                        <td class="px-6 py-4">Cimahi Selatan</td>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">2000</td>
                        <td class="px-6 py-4">100</td>
                        <td class="px-6 py-4">500 kg</td>
                        <td class="px-6 py-4">Milik Sendiri</td>
                        <td class="flex items-center px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('more-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // var urlDel = "/admin/master-data/brand/";
        // var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('assets/js/stored.js') }}"></script>
@endsection
