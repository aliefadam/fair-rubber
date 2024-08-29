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
                href="{{ route('admin.transaction.withdrawal.create') }}">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="heroicons-outline:plus"></iconify-icon>
                    <span>Cairkan</span>
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
                                            Status
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Tgl Upload Bukti
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Tgl Permi Dibagikan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Bulan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Timbangan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Kolektor
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Petani
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Tersalurkan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Tidak Tersalurkan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    <tr>
                                        <td class="table-td">1</td>
                                        <td class="table-td">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Selesai
                                            </span>
                                        </td>
                                        <td class="table-td">2024-08-01</td>
                                        <td class="table-td">2024-08-05</td>
                                        <td class="table-td">Agustus 2024</td>
                                        <td class="table-td">1500 kg</td>
                                        <td class="table-td">Rp 3,000,000</td>
                                        <td class="table-td">Rp 1,500,000</td>
                                        <td class="table-td">Rp 4,000,000</td>
                                        <td class="table-td">Rp 500,000</td>
                                        <td class="table-td">
                                            <div class="flex gap-3">
                                                <i class="fa-regular fa-trash"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-td">2</td>
                                        <td class="table-td">
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending
                                            </span>
                                        </td>
                                        <td class="table-td">2024-08-10</td>
                                        <td class="table-td">2024-08-15</td>
                                        <td class="table-td">September 2024</td>
                                        <td class="table-td">2000 kg</td>
                                        <td class="table-td">Rp 4,000,000</td>
                                        <td class="table-td">Rp 2,000,000</td>
                                        <td class="table-td">Rp 5,500,000</td>
                                        <td class="table-td">Rp 500,000</td>
                                        <td class="table-td">
                                            <div class="flex gap-3">
                                                <i class="fa-regular fa-trash"></i>
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
