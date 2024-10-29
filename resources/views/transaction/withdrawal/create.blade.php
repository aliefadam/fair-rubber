@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <div action="" class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        <h1 class="text-xl font-medium ">Filter Tanggal</h1>
        <br>
        <form action="{{ route('admin.transaction.withdrawal.create') }}">

            <div class="flex items-end gap-7">
                <div class="flex-[4]">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Mulai</label>
                    <input type="date" name="date_start" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ request()->date_start }}" required />
                </div>
                <div class="flex-[4]">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Akhir
                    </label>
                    <input type="date" name="date_end" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ request()->date_end }}" required />
                </div>
                <div class="flex-[1]">
                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="fa-regular fa-magnifying-glass mr-1"></i> Filter
                    </button>
                </div>

            </div>
        </form>
    </div>

    <form action="{{ route('admin.transaction.withdrawal.store') }}" method="POST">
        @csrf

        <input type="date" name="date_start_store"
            class="bg-gray-50 hidden border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ request()->date_start }}" required />

        <input type="date" name="date_end_store"
            class="bg-gray-50 hidden border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ request()->date_end }}" required />


        <div class="mt-5">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-medium ">Data Kolektor</h1>
            </div>
            <br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th colspan="4" class="dark:bg-gray-800 dark:border-gray-500"></th>
                            <th scope="col" colspan="3"
                                class="text-center px-6 py-3 bg-gray-100 dark:bg-gray-800 dark:border-gray-500 border-b border-gray-300">
                                Belum Salurkan
                            </th>
                            <th scope="col" colspan="3"
                                class="text-center px-6 py-3 bg-gray-200 dark:bg-gray-800 dark:border-gray-500 border-b border-gray-400">
                                Sudah Salurkan
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="p-4 dark:bg-gray-800 dark:border-gray-500">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:border-gray-500 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" rowspan="2" class="text-center p-4 dark:bg-gray-800 dark:border-gray-500">
                                No
                            </th>
                            <th scope="col"
                                class="text-start px-6 py-3 min-w-[300px]  dark:bg-gray-800 dark:border-gray-500">
                                Nama Petani
                            </th>
                            <th scope="col"
                                class="text-start px-6 py-3 min-w-[250px] dark:bg-gray-800 dark:border-gray-500">
                                Desa
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-100 dark:bg-gray-800 dark:border-gray-500 min-w-[200px]">
                                Total Timbangan
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-100 dark:bg-gray-800 dark:border-gray-500 min-w-[300px]">
                                Premi Petani
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-100 dark:bg-gray-800 dark:border-gray-500 min-w-[300px]">
                                Premi Kolektor
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-200 dark:bg-gray-800 dark:border-gray-500 min-w-[200px]">
                                Total Timbangan
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-200 dark:bg-gray-800 dark:border-gray-500 min-w-[300px]">
                                Premi Petani
                            </th>
                            <th scope="col"
                                class="text-center px-6 py-3 bg-gray-200 dark:bg-gray-800 dark:border-gray-500 min-w-[300px]">
                                Premi Kolektor
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $totalCollectorScalesUnpaid = 0;
                            $totalCollectorScalesPaid = 0;

                            $totalFarmerScalesUnpaid = 0;
                            $totalFarmerScalesKgUnpaid = 0;
                            $totalFarmerScalesPaid = 0;
                            $totalFarmerScalesKgPaid = 0;

                        @endphp

                        @for ($i = 0; $i < count($data); $i++)
                            <input type="hidden" name="collector_id[]" value="{{ $data[$i]['collector_id'] }}">

                            @php

                                // $totalCollectorScalesUnpaid += $data[$i]['total_unpaid_collector'];
                                $totalCollectorScalesPaid += $data[$i]['total_paid_collector'];
                                // $totalFarmerScalesUnpaid += $data[$i]['total_unpaid_farmer'];
                                // $totalFarmerScalesKgUnpaid += $data[$i]['total_unpaid_kg_farmer'];
                                $totalFarmerScalesPaid += $data[$i]['total_paid_farmer'];
                                $totalFarmerScalesKgPaid += $data[$i]['total_paid_kg_farmer'];

                            @endphp
                            <tr
                                class="data-detail-collector bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="checked_collector w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            name="checkbox_collector_{{ $data[$i]['collector_id'] }}">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ $i + 1 }}</td>
                                <td class="px-6 py-4"><button
                                        data-modal-target="modal-collector-{{ $data[$i]['collector_id'] }}"
                                        data-modal-toggle="modal-collector-{{ $data[$i]['collector_id'] }}" type="button">
                                        {{ $data[$i]['collector_name'] }}
                                    </button> </td>
                                <td class="px-6 py-4">{{ $data[$i]['collector_village'] }}</td>
                                <td class="px-6 py-4">

                                    <div class="relative">
                                        <input type="text" id="email-address-icon"
                                            class="total_unpaid_kg_farmer total_unpaid_kg_farmer_{{ $data[$i]['collector_id'] }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0">
                                        <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none">
                                            Kg
                                        </div>
                                    </div>

                                </td>
                                {{-- total_unpaid_farmer --}}
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <span
                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            Rp.
                                        </span>
                                        <input type="text" id="website-admin"
                                            class="total_unpaid_farmer total_unpaid_farmer_{{ $data[$i]['collector_id'] }} rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" name="total_unpaid_farmer[]" {{-- value="{{ formatMoney($data[$i]['total_unpaid_farmer']) }} "> --}}>
                                        <input type="text" id="website-admin"
                                            class="total_unpaid_farmer_all total_unpaid_farmer_all_{{ $data[$i]['collector_id'] }} rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" name="total_unpaid_farmer_should[]" {{-- value="{{ formatMoney($data[$i]['total_unpaid_farmer']) }} "> --}}>
                                    </div>
                                </td>
                                {{-- Total Unpaid Collector --}}
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <span
                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            Rp.
                                        </span>
                                        <input type="text" id="website-admin"
                                            class="total_unpaid_collector total_unpaid_collector_{{ $data[$i]['collector_id'] }} rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" name="total_unpaid_collector[]"
                                            value="{{ formatMoney($data[$i]['total_unpaid_collector']) }}">

                                        <input type="text" id="website-admin"
                                            class="total_unpaid_collector_hidden total_unpaid_collector_hidden_{{ $data[$i]['collector_id'] }} rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" name="total_unpaid_collector_should[]"
                                            value="{{ formatMoney($data[$i]['total_unpaid_collector']) }}">

                                        {{-- mencari id rubber collected pada collector --}}
                                        @if (isset($data[$i]['rubber']))
                                            @for ($j = 0; $j < count($data[$i]['rubber']); $j++)
                                                <input type="hidden"
                                                    name="total_unpaid_collector_rubber_collected_{{ $data[$i]['collector_id'] }}[]"
                                                    value="{{ $data[$i]['rubber'][$j]['id'] }}">
                                            @endfor
                                        @endif
                                    </div>
                                </td>
                                {{-- total_paid_kg_farmer --}}
                                <td class="px-6 py-4">

                                    <div class="relative">
                                        <input type="text" id="email-address-icon"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" value="{{ formatMoney($data[$i]['total_paid_kg_farmer']) }}">
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
                                            placeholder="0" value="{{ formatMoney($data[$i]['total_paid_farmer']) }}">
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
                                            placeholder="0" value="{{ formatMoney($data[$i]['total_paid_collector']) }}">
                                    </div>
                                </td>
                            </tr>
                        @endfor

                    </tbody>
                    <tfoot>

                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4" colspan="4">
                                <p class="text-[15px] font-semibold text-end">Total</p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalFarmerScalesKgUnpaid">
                                    {{ $totalFarmerScalesKgUnpaid }} Kg </p>
                                <input type="hidden" class="totalFarmerScalesKgUnpaidValue"
                                    name="total_farmer_scales_kg_unpaid_value">
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalFarmerScalesUnpaid">
                                    {{ formatMoney($totalFarmerScalesUnpaid, true) }}
                                </p>
                                <input type="hidden" class="totalFarmerScalesUnpaidValue"
                                    name="total_farmer_scales_unpaid_value">
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalCollectorScalesUnpaid">
                                    {{ formatMoney($totalCollectorScalesUnpaid, true) }}
                                </p>
                                <input type="hidden" name="total_collector_scales_unpaid_should_value"
                                    value="{{ formatMoney($totalCollectorScalesUnpaid) }}">
                                <input type="hidden" class="totalCollectorScalesUnpaidValue"
                                    name="total_collector_scales_unpaid_value">
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ $totalFarmerScalesKgPaid }} Kg </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ formatMoney($totalFarmerScalesPaid, true) }} </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ formatMoney($totalCollectorScalesPaid, true) }}
                                </p>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>








        {{-- DATA PETANI --}}
        @for ($i = 0; $i < count($data); $i++)
            <!-- Main modal -->
            <div id="modal-collector-{{ $data[$i]['collector_id'] }}" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-full max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-normal text-gray-900 dark:text-white">
                                Data Petani Kolektor <b>{{ $data[$i]['collector_name'] }}</b>
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="modal-collector-{{ $data[$i]['collector_id'] }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                                Nama Kolektor
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
                                            <th scope="col" rowspan="2"
                                                class="text-center px-6 py-3  min-w-[300px]">
                                                No. Rekening
                                            </th>
                                            <th scope="col" rowspan="2"
                                                class="text-center px-6 py-3  min-w-[200px]">
                                                Status Premi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php

                                            $subTotalFarmerScalesUnpaid = 0;
                                            $subTotalFarmerScalesKgUnpaid = 0;
                                            $subTotalFarmerScalesPaid = 0;
                                            $subTotalFarmerScalesKgPaid = 0;

                                        @endphp
                                        @if (isset($data[$i]['farmer']))
                                            @for ($j = 0; $j < count($data[$i]['farmer']); $j++)

                                                <input type="hidden" name="farmer_id_{{ $data[$i]['collector_id'] }}[]"
                                                    value="{{ $data[$i]['farmer'][$j]['id'] }}">

                                                @php

                                                    $subTotalFarmerScalesUnpaid +=
                                                        $data[$i]['farmer'][$j]['total_unpaid'];
                                                    $subTotalFarmerScalesKgUnpaid +=
                                                        $data[$i]['farmer'][$j]['unpaid_kg_farmer'];
                                                    $subTotalFarmerScalesPaid += $data[$i]['farmer'][$j]['total_paid'];
                                                    $subTotalFarmerScalesKgPaid +=
                                                        $data[$i]['farmer'][$j]['paid_kg_farmer'];

                                                @endphp
                                                <tr
                                                    class="data-detail-farmer data-detail-farmer-{{ $data[$i]['collector_id'] }} 
                                                    
                                                    @if ($data[$i]['farmer'][$j]['id'] == null) 
                                                    bg-yellow-200 hover:bg-yellow-50 dark:bg-yellow-100 dark:hover:bg-yellow-300
                                                    @elseif ($data[$i]['farmer'][$j]['unpaid_kg_farmer'] >= 500)
                                                    bg-red-200 hover:bg-red-50 dark:bg-red-100 dark:hover:bg-red-300
                                                    @else
                                                    bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-600 
                                                    @endif
                                                    
                                                    border-b dark:border-gray-700  ">
                                                    @if ($data[$i]['farmer'][$j]['id'] != null)
                                                        <td class="w-4 p-4">

                                                            <input type="hidden" value="{{ $data[$i]['collector_id'] }}"
                                                                class="collector_id_per_farmer">

                                                            <input type="hidden"
                                                                class="farmer_id_not_null_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}"
                                                                value="{{ $data[$i]['farmer'][$j]['id'] }}">

                                                            {{-- mengecek id rubbercollected yang terkait /  --}}
                                                            @if (isset($data[$i]['farmer'][$j]['rubber']))
                                                                @for ($k = 0; $k < count($data[$i]['farmer'][$j]['rubber']); $k++)
                                                                    @if (isset($data[$i]['farmer'][$j]['rubber'][$k]['id']))
                                                                        <input type="text" class="hidden"
                                                                            name="farmer_id_rubber_collected_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}[]"
                                                                            value="{{ $data[$i]['farmer'][$j]['rubber'][$k]['id'] }}">
                                                                    @endif
                                                                @endfor
                                                            @endif


                                                            <div class="flex items-center">
                                                                <input id="checkbox-table-search-1" type="checkbox"
                                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
                                                                checked_farmer_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}
                                                                checked_farmer_{{ $data[$i]['collector_id'] }}
                                                                checked_farmer"
                                                                    name="checked_farmer_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}">
                                                                <label for="checkbox-table-search-1"
                                                                    class="sr-only">checkbox</label>
                                                            </div>
                                                        </td>
                                                    @else
                                                        <td class="w-4 p-4"> - </td>
                                                    @endif
                                                    <td class="px-6 py-4">{{ $j + 1 }}</td>
                                                    <td class="px-6 py-4">{{ $data[$i]['farmer'][$j]['name'] }}</td>
                                                    <td class="px-6 py-4">{{ $data[$i]['farmer'][$j]['village'] }}</td>
                                                    <td class="px-6 py-4">

                                                        <div class="relative">
                                                            <input type="text" id="email-address-icon"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end 
                                                                unpaid_kg_farmer_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}
                                                                unpaid_kg_farmer_id_{{ $data[$i]['collector_id'] }}"
                                                                placeholder="0"
                                                                name="unpaid_kg_farmer_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['unpaid_kg_farmer']) }}">
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
                                                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end  
                                                                unpaid_farmer_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}
                                                                unpaid_farmer_id_{{ $data[$i]['collector_id'] }}"
                                                                placeholder="0"
                                                                name="unpaid_farmer_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['total_unpaid']) }}">
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4">

                                                        <div class="relative">
                                                            <input type="text" id="email-address-icon"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                                                placeholder="0"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['paid_kg_farmer']) }}">
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
                                                                placeholder="0"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['total_paid']) }}">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $data[$i]['farmer'][$j]['account_number'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <select name="opinion_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}" id=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="wajar" @selected($data[$i]['farmer'][$j]['unpaid_kg_farmer'] < 500 ? 'selected' : '')>Wajar
                                                            </option>
                                                            <option value="tidak wajar" @selected($data[$i]['farmer'][$j]['unpaid_kg_farmer'] >= 500 ? 'selected' : '')>Tidak Wajar
                                                            </option>
                                                        </select>
                                                    </td>

                                                </tr>
                                            @endfor
                                        @endisset


                                </tbody>
                                <tfoot>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th class="px-6 py-4" colspan="4">
                                            <p class="text-[15px] font-semibold text-start">Total</p>
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p class="text-[15px] font-semibold text-end">
                                                {{ formatMoney($subTotalFarmerScalesKgUnpaid) }} KG</p>
                                            {{-- <input type="hidden" name="" class="drop-total-unpaid-collector-{{ $data[$i]['collector_id'] }}"> --}}
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p class="text-[15px] font-semibold text-end">
                                                {{ formatMoney($subTotalFarmerScalesUnpaid, true) }}</p>

                                            <input type="hidden" name=""
                                                value="{{ formatMoney($subTotalFarmerScalesUnpaid) }}"
                                                class="dropHereFarmerTotalUnpaidAll dropHereFarmerTotalUnpaidAll_{{ $data[$i]['collector_id'] }}">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p class="text-[15px] font-semibold text-end">
                                                {{ formatMoney($subTotalFarmerScalesKgPaid) }} KG</p>
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p class="text-[15px] font-semibold text-end">
                                                {{ formatMoney($subTotalFarmerScalesPaid, true) }} </p>
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                    </tr>
                                </tfoot>

                                <tfoot>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th class="px-6 py-4" colspan="4">
                                            <p class="text-[15px] font-semibold text-start">Total Terpilih (Checked)
                                            </p>
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p
                                                class="text-[15px] font-semibold text-end dropHereFarmerTotalUnpaidKg dropHereFarmerTotalUnpaidKg_{{ $data[$i]['collector_id'] }}">
                                                0 KG</p>
                                            <input type="hidden" name=""
                                                class="dropHereFarmerTotalUnpaidKg dropHereFarmerTotalUnpaidKg_{{ $data[$i]['collector_id'] }}">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                            <p
                                                class="text-[15px] font-semibold text-end dropHereFarmerTotalUnpaid dropHereFarmerTotalUnpaid_{{ $data[$i]['collector_id'] }}">
                                                Rp. 0 </p>
                                            <input type="hidden" name=""
                                                class="dropHereFarmerTotalUnpaid dropHereFarmerTotalUnpaid_{{ $data[$i]['collector_id'] }}">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                        <th class="px-6 py-4 text-center">
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-between items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                        <button data-modal-hide="modal-collector-{{ $data[$i]['collector_id'] }}" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endfor

    <div class="text-end">

        <button type="submit"
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
            Data</button>
    </div>

</form>

@endsection

@section('more-script')
<script>
    $(document).ready(function() {
        // Set semua checkbox menjadi checked
        $('.checked_collector').prop('checked', true);
        $('.checked_farmer').prop('checked', true);

        // Panggil fungsi perhitungan secara langsung setelah set checkbox
        calculateFarmerUnpaid();
        calc(); // Panggil perhitungan kolektor

        // Trigger event change untuk menjalankan kalkulasi ulang
        $('.checked_farmer').trigger('change');
        $('.checked_collector').trigger('change');

        // Fungsi onchange untuk checkbox checked_farmer
        $('.checked_farmer').change(function() {
            calculateFarmerUnpaid();
        });

        // Fungsi onchange untuk checkbox checked_collector
        $('.checked_collector').change(function() {
            calc();
        });

        // Fungsi untuk menghitung unpaid farmer
        function calculateFarmerUnpaid() {
            $('.checked_farmer').each(function() {
                var checkCollector = $(this).closest('.data-detail-farmer').find(
                    '.collector_id_per_farmer').val();

                var checkCollectorFindFarmerId = $(this).closest('.data-detail-farmer').find(
                    '.collector_id_per_farmer').val();

                var totalFarmerUnpaidKg = 0;
                var totalFarmerUnpaidTotal = 0;

                // Melakukan loop pada class checkbox pada farmer
                $('.checked_farmer_' + checkCollector).each(function(i, obj) {
                    if ($(this).prop('checked') == true) {
                        var unpaidKgRaw = parseFloat($(this).closest('.data-detail-farmer')
                            .find('.unpaid_kg_farmer_id_' + checkCollector).val().replace(
                                /\./g, '')) || 0;
                        totalFarmerUnpaidKg += unpaidKgRaw;

                        var unpaidTotalRaw = parseFloat($(this).closest('.data-detail-farmer')
                            .find('.unpaid_farmer_id_' + checkCollector).val().replace(
                                /\./g, '')) || 0;
                        totalFarmerUnpaidTotal += unpaidTotalRaw;
                    }
                });

                // Drop data hasil perhitungan ke dalam class yang ditentukan
                $('.dropHereFarmerTotalUnpaidKg_' + checkCollector).val(formatNumber(
                    totalFarmerUnpaidKg));
                $('.dropHereFarmerTotalUnpaidKg_' + checkCollector).html(formatNumber(
                    totalFarmerUnpaidKg) + ' KG');
                $('.dropHereFarmerTotalUnpaid_' + checkCollector).val(formatNumber(
                    totalFarmerUnpaidTotal));
                $('.dropHereFarmerTotalUnpaid_' + checkCollector).html(formatMoney(
                    totalFarmerUnpaidTotal));

                $('.total_unpaid_kg_farmer_' + checkCollector).val(formatNumber(totalFarmerUnpaidKg));
                $('.total_unpaid_farmer_' + checkCollector).val(formatNumber(totalFarmerUnpaidTotal));

                $('.total_unpaid_farmer_all_' + checkCollector).val($('.dropHereFarmerTotalUnpaidAll_' +
                    checkCollector).val());

                // menghitung persentase dari nilai keseluruhan petani yang belum dibayarkan dan dibandingkan dengan yang dipilih saja.
                var percentageFarmerWithdrawn = (totalFarmerUnpaidTotal / $(
                    '.dropHereFarmerTotalUnpaidAll_' + checkCollector).val().replace(/\./g,
                    '') || 0) * 100;

                // hasil dari persentase petani , dijadikan acuan untuk menghitung total persentase / uang yang akan dicairkan oleh koletor tersebut
                var percentageCollectorToWithdrawn = (percentageFarmerWithdrawn / 100) * $(
                        '.total_unpaid_collector_hidden_' + checkCollector).val().replace(/\./g, '') ||
                    0;
                // console.log(percentageCollectorToWithdrawn);

                $('.total_unpaid_collector_' + checkCollector).val(formatNumber(
                    percentageCollectorToWithdrawn));

            });
            calc();

        }

        // Fungsi kalkulasi untuk collector
        function calc() {
            var totalFarmerUnpaidKg = 0;
            var totalFarmerUnpaidTotal = 0;
            var totalCollectorUnpaidTotal = 0;

            $('.checked_collector').each(function(i, obj) {
                if ($(this).prop('checked') == true) {
                    var unpaidKgRaw = parseFloat($(this).closest('.data-detail-collector').find(
                        '.total_unpaid_kg_farmer').val().replace(/\./g, '')) || 0;
                    totalFarmerUnpaidKg += unpaidKgRaw;

                    var unpaidTotalRaw = parseFloat($(this).closest('.data-detail-collector').find(
                        '.total_unpaid_farmer').val().replace(/\./g, '')) || 0;
                    totalFarmerUnpaidTotal += unpaidTotalRaw;

                    var unpaidTotalCollectorRaw = parseFloat($(this).closest('.data-detail-collector')
                        .find('.total_unpaid_collector').val().replace(/\./g, '')) || 0;
                    totalCollectorUnpaidTotal += unpaidTotalCollectorRaw;
                }
            });

            $('.totalFarmerScalesKgUnpaid').html(formatNumber(totalFarmerUnpaidKg) + ' KG');
            $('.totalFarmerScalesKgUnpaidValue').val(formatNumber(totalFarmerUnpaidKg));
            $('.totalFarmerScalesUnpaid').html(formatMoney(totalFarmerUnpaidTotal));
            $('.totalFarmerScalesUnpaidValue').val(formatNumber(totalFarmerUnpaidTotal));
            $('.totalCollectorScalesUnpaid').html(formatMoney(totalCollectorUnpaidTotal));
            $('.totalCollectorScalesUnpaidValue').val(formatNumber(totalCollectorUnpaidTotal));
        }
    });



    // totalFarmerScalesKgUnpaidValue
    // totalFarmerScalesUnpaidValue
    // totalCollectorScalesUnpaidValue

    // totalFarmerScalesKgUnpaid
    // totalFarmerScalesUnpaid
    // totalCollectorScalesUnpaid
</script>
@endsection
