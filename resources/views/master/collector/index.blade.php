@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}


    <div class="flex justify-between rtl:space-x-reverse items-center mb-5">
        <div class="">
            <ul class="m-0 p-0 list-none">
                <li class="inline-block relative top-[3px] text-base text-primary-500">
                    <a href="index.html">
                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                        <iconify-icon icon="heroicons-outline:chevron-right"
                            class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                    </a>
                </li>
                <li class="inline-block relative text-sm text-primary-500 ">
                    Master
                    <iconify-icon icon="heroicons-outline:chevron-right"
                        class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </li>
                <li class="inline-block relative text-sm text-slate-500 dark:text-white">
                    {{ $title }}
                </li>
            </ul>
        </div>

        <div class="gap-5">
            <a class="inline-flex justify-center px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-[25px]"
                href="{{ route('admin.master.collector.create') }}">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="heroicons-outline:plus"></iconify-icon>
                    <span>Tambah Data</span>
                </span>
            </a>
        </div>

    </div>

    <!-- END: BreadCrumb -->
    <div class="space-y-5">
        <div class="card">
            {{-- <header class=" card-header noborder">
                <h4 class="text-2xl poppins-medium">{{ $title }}
                </h4>
            </header> --}}
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class=" col-span-8  hidden"></span>
                    <span class="  col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                id="data-table">
                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class=" table-th ">
                                            No
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Nama
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    <tr>
                                        <td class="table-td">1</td>
                                        <td class="table-td ">
                                            <div>
                                                ACIP
                                            </div>
                                        </td>

                                        <td class="table-td">
                                            <div>
                                                <div class="relative">
                                                    <div class="dropdown relative">
                                                        <button class="text-xl text-center block w-full " type="button"
                                                            id="tableDropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <iconify-icon
                                                                icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                        </button>
                                                        <ul
                                                            class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                                                shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">

                                                            <li>
                                                                <a href="{{ route('admin.master.collector.addFarmer', 1) }}"
                                                                    class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                            dark:hover:text-white">
                                                                    Tambah Petani</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('admin.master.collector.data-detail', 1) }}"
                                                                    class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                            dark:hover:text-white">
                                                                    Lihat</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                        dark:hover:text-white">
                                                                    Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="del('')"
                                                                    class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                                        dark:hover:text-white">
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
