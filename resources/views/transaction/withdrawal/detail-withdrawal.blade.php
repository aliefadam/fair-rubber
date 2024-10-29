@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}
    <div action="" class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
        {{-- <h1 class="text-xl font-medium ">Data </h1> --}}
        {{-- <br> --}}
        <form action="{{ route('admin.transaction.withdrawal.create') }}">

            <div class="flex items-end gap-7">
                <div class="flex-[1]">
                    <h6 class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai </h6>
                    <h4 class="font-semibold">{{ formatDate($dataRaw['date_start']) }}</h4>
                </div>

                <div class="flex-[1]">
                    <h6 class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Akhir </h6>
                    <h4 class="font-semibold">{{ formatDate($dataRaw['date_end']) }}</h4>
                </div>
            </div>

            <div class="flex items-end gap-7 mt-2">
                <div class="flex-[4]">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">

                </div>

                <div class="flex-[1]">
                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="fa-regular fa-save mr-1"></i> Simpan
                    </button>
                </div>

            </div>
        </form>
    </div>
    <form action="{{ route('admin.transaction.withdrawal.store') }}" method="POST">
        @csrf

        <div class="mt-5">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-medium ">Data Kolektor</h1>
            </div>
            <br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        {{-- <tr>
                            <th colspan="4" class="dark:bg-gray-800 dark:border-gray-500"></th>
                            <th scope="col" colspan="3"
                                class="text-center px-6 py-3 bg-gray-100 dark:bg-gray-800 dark:border-gray-500 border-b border-gray-300">
                                Belum Salurkan
                            </th>
                            <th scope="col" colspan="3"
                                class="text-center px-6 py-3 bg-gray-200 dark:bg-gray-800 dark:border-gray-500 border-b border-gray-400">
                                Sudah Salurkan
                            </th>
                        </tr> --}}
                        <tr>
                            {{-- <th scope="col" class="p-4 dark:bg-gray-800 dark:border-gray-500">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:border-gray-500 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th> --}}
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
                            {{-- <th scope="col"
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
                            </th> --}}
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

                            $totalScalesWithdrawn = 0;
                            $totalHonorariumFarmerWithdrawn = 0;

                            $totalHonorariumCollectorWithdrawn = 0

                        @endphp

                        @for ($i = 0; $i < count($data); $i++)
                            <input type="hidden" name="collector_id[]" value="{{ $data[$i]['collector_id'] }}">

                            @php

                                // $totalCollectorScalesUnpaid += $data[$i]['total_unpaid_collector'];
                                $totalScalesWithdrawn += $data[$i]['total_scales_withdrawn'];
                                $totalHonorariumFarmerWithdrawn += $data[$i]['total_honorarium_farmer_withdrawn'];

                                $totalHonorariumCollectorWithdrawn += $data[$i]['total_honorarium_withdrawn'];
                                // $totalFarmerScalesUnpaid += $data[$i]['total_unpaid_farmer'];
                                // $totalFarmerScalesKgUnpaid += $data[$i]['total_unpaid_kg_farmer'];
                                // $totalFarmerScale    sPaid += $data[$i]['total_paid_farmer'];
                                // $totalFarmerScalesKgPaid += $data[$i]['total_paid_kg_farmer'];

                            @endphp
                            <tr
                                class="data-detail-collector bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                {{-- <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="checked_collector w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            name="checkbox_collector_{{ $data[$i]['collector_id'] }}">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td> --}}
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4"><button
                                        data-modal-target="modal-collector-{{ $data[$i]['collector_id'] }}"
                                        data-modal-toggle="modal-collector-{{ $data[$i]['collector_id'] }}" type="button">
                                        {{ $data[$i]['collector_name'] }}
                                    </button> </td>
                                <td class="px-6 py-4">{{ $data[$i]['collector_village'] }}</td>
                                <td class="px-6 py-4">

                                    <div class="relative">
                                        <input type="text" readonly id="email-address-icon"
                                            class="total_scales_withdrawn total_scales_withdrawn_{{ $data[$i]['collector_id'] }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0"
                                            value=" {{ formatMoney($data[$i]['total_scales_withdrawn']) }} ">
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
                                        <input type="text" readonly id="website-admin"
                                            class="total_honorarium_farmer_withdrawn total_honorarium_farmer_withdrawn_{{ $data[$i]['collector_id'] }} rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" 
                                            value="{{ formatMoney($data[$i]['total_honorarium_farmer_withdrawn']) }} ">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <span
                                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            Rp.
                                        </span>
                                        <input type="text" readonly id="website-admin"
                                            class="total_honorarium_withdrawn rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end"
                                            placeholder="0" value="{{ formatMoney($data[$i]['total_honorarium_withdrawn']) }}">
                                    </div>
                                </td>
                                {{-- <td class="px-6 py-4">

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
                                </td> --}}
                            </tr>
                        @endfor

                    </tbody>
                    <tfoot>

                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4" colspan="3">
                                <p class="text-[15px] font-semibold text-end">Total</p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalScalesWithdrawn">
                                    {{ $totalScalesWithdrawn }} Kg </p>
                                <input type="hidden" class="totalScalesWithdrawnValue" value="{{$totalScalesWithdrawn}}" name="">
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalHonorariumFarmerWithdrawn">
                                    {{ formatMoney($totalHonorariumFarmerWithdrawn, true) }}
                                </p>
                                <input type="hidden" class="totalHonorariumFarmerWithdrawnValue" value="{{$totalHonorariumFarmerWithdrawn}}" name="">
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold totalHonorariumCollectorWithdrawn">
                                    {{ formatMoney($totalHonorariumCollectorWithdrawn, true) }}
                                </p>
                                <input type="hidden" class="totalHonorariumCollectorWithdrawnValue" name="">
                            </th>
                            {{-- <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ $totalFarmerScalesKgPaid }} Kg </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ formatMoney($totalFarmerScalesPaid, true) }} </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold"> {{ formatMoney($totalCollectorScalesPaid, true) }}
                                </p>
                            </th> --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

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
                                        {{-- <tr>
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

                                        </tr> --}}
                                        <tr>
                                            {{-- <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th> --}}
                                            <th scope="col" rowspan="2" class="text-center p-4">
                                                No
                                            </th>
                                            <th scope="col" class="text-start px-6 py-3 min-w-[250px] ">
                                                Nama Petani
                                            </th>
                                            <th scope="col" class="text-start px-6 py-3 min-w-[200px] ">
                                                Bukti Data Tidak Wajar
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
                                            {{-- 
                                            <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[200px]">
                                                Total Timbangan
                                            </th>
                                            <th scope="col" class="text-center px-6 py-3 bg-gray-200 min-w-[300px]">
                                                Premi Petani
                                            </th> --}}
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

                                            $subTotalFarmerScalesWithdrawn = 0;
                                            $subTotalFarmerScalesKgWithdrawn = 0;

                                        @endphp
                                        @isset($data[$i]['farmer'])
                                            @for ($j = 0; $j < count($data[$i]['farmer']); $j++)
                                                <input type="hidden" name="farmer_id_{{ $data[$i]['collector_id'] }}[]"
                                                    value="{{ $data[$i]['farmer'][$j]['id'] }}">

                                                @php

                                                    $subTotalFarmerScalesWithdrawn +=
                                                        $data[$i]['farmer'][$j]['total_scales_withdrawn'];
                                                    $subTotalFarmerScalesKgWithdrawn +=
                                                        $data[$i]['farmer'][$j]['total_honorarium_withdrawn'];

                                                @endphp
                                                <tr
                                                    class="data-detail-farmer data-detail-farmer-{{ $data[$i]['collector_id'] }} 
                                                    
                                                    @if ($data[$i]['farmer'][$j]['id'] == null) bg-yellow-200 hover:bg-yellow-50 dark:bg-yellow-100 dark:hover:bg-yellow-300
                                                    @else
                                                        bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-600 @endif
                                                    
                                                    border-b dark:border-gray-700  ">
                                                    {{-- @if ($data[$i]['farmer'][$j]['id'] != null)
                                                        <td class="w-4 p-4">

                                                            <input type="hidden" value="{{ $data[$i]['collector_id'] }}"
                                                                class="collector_id_per_farmer">

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
                                                    @endif --}}
                                                    <td class="px-6 py-4">{{ $j + 1 }}</td>
                                                    <td class="px-6 py-4">{{ $data[$i]['farmer'][$j]['name'] }}


                                                    </td>
                                                    <td class="px-6 py-4">
                                                        @if ($data[$i]['farmer'][$j]['opinion'] == 'tidak wajar')
                                                            <input
                                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                                id="file_input" type="file">
                                                        @endif

                                                    </td>
                                                    <td class="px-6 py-4">{{ $data[$i]['farmer'][$j]['village'] }}</td>
                                                    <td class="px-6 py-4">

                                                        <div class="relative">
                                                            <input type="text" id="email-address-icon"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pe-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-end 
                                                                total_scales_withdrawn_farmer_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}
                                                                total_scales_withdrawn_farmer_id_{{ $data[$i]['collector_id'] }}
                                                                "
                                                                placeholder="0"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['total_scales_withdrawn']) }}">
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
                                                                total_honorarium_withdrawn_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}
                                                                total_honorarium_withdrawn_id_{{ $data[$i]['collector_id'] }}
                                                                "
                                                                placeholder="0"
                                                                name="total_honorarium_withdrawn_id_{{ $data[$i]['farmer'][$j]['id'] }}_{{ $data[$i]['collector_id'] }}"
                                                                value="{{ formatMoney($data[$i]['farmer'][$j]['total_honorarium_withdrawn']) }}">
                                                        </div>
                                                    </td>

                                                    {{-- <td class="px-6 py-4">

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
                                                    </td> --}}
                                                    <td class="text-center">{{ $data[$i]['farmer'][$j]['account_number'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <select name="" id=""
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="wajar" @selected($data[$i]['farmer'][$j]['opinion'] == 'wajar' ? 'selected' : '')>Wajar</option>
                                                            <option value="tidak wajar" @selected($data[$i]['farmer'][$j]['opinion'] == 'tidak wajar' ? 'selected' : '')>Tidak
                                                                Wajar
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
                                                    {{ formatMoney($subTotalFarmerScalesWithdrawn) }} KG</p>
                                            </th>
                                            <th class="px-6 py-4 text-center">
                                                <p class="text-[15px] font-semibold text-end">
                                                    {{ formatMoney($subTotalFarmerScalesKgWithdrawn, true) }}</p>
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
                                                <p class="text-[15px] font-semibold text-start">Total
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
            {{-- 
            <button type="submit"
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                Data</button> --}}
        </div>

    </form>

@endsection

@section('more-script')
    <script>
        $('.checked_farmer').change(function() {
            // console.log();

            // mengecek id kolektor yang berhubungan dengan farmer
            var checkCollector = $(this).closest('.data-detail-farmer').find('.collector_id_per_farmer').val();

            // set variable untuk perhitungan
            var totalFarmerUnpaidKg = 0;
            var totalFarmerUnpaidTotal = 0;

            // melakukan loop pada class checkbox pada farmer
            $('.checked_farmer_' + checkCollector).each(function(i, obj) {

                // mengecek apakah checkbox tersebut dipilih
                if ($(this).prop('checked') == true) {
                    // mencari class terdekat dengan checked_farmer yang bernama data-detail-farmer lalu mencari value dari class unpaid_kg_farmer_id_
                    var unpaidKgRaw = parseFloat($(this).closest('.data-detail-farmer').find(
                        '.unpaid_kg_farmer_id_' + checkCollector).val().replace(/\./g, '')) || 0;
                    // menambahkan hasil nilai yang ada kedalam perhitungan 
                    totalFarmerUnpaidKg += unpaidKgRaw;

                    var unpaidTotalRaw = parseFloat($(this).closest('.data-detail-farmer').find(
                        '.unpaid_farmer_id_' + checkCollector).val().replace(/\./g, '')) || 0;
                    totalFarmerUnpaidTotal += unpaidTotalRaw;
                }
            });

            // drop data hasil perhitungan kedalam class yang telah ditentukan
            $('.dropHereFarmerTotalUnpaidKg_' + checkCollector).val(formatNumber(totalFarmerUnpaidKg));
            $('.dropHereFarmerTotalUnpaidKg_' + checkCollector).html(formatNumber(totalFarmerUnpaidKg) + ' KG');
            $('.dropHereFarmerTotalUnpaid_' + checkCollector).val(formatNumber(totalFarmerUnpaidTotal));
            $('.dropHereFarmerTotalUnpaid_' + checkCollector).html(formatMoney(totalFarmerUnpaidTotal));

            $('.total_unpaid_kg_farmer_' + checkCollector).val(formatNumber(totalFarmerUnpaidKg) + ' KG');
            $('.total_unpaid_farmer_' + checkCollector).val(formatNumber(totalFarmerUnpaidTotal));


            calc();
        });


        $('.checked_collector').change(function() {
            calc();
        });


        // totalFarmerScalesKgUnpaidValue
        // totalFarmerScalesUnpaidValue
        // totalCollectorScalesUnpaidValue

        // totalFarmerScalesKgUnpaid
        // totalFarmerScalesUnpaid
        // totalCollectorScalesUnpaid

        function calc() {

            var totalFarmerUnpaidKg = 0;
            var totalFarmerUnpaidTotal = 0;
            var totalCollectorUnpaidTotal = 0;
            // var checkCollector = $(this).closest('.data-detail-collector');
            $('.checked_collector').each(function(i, obj) {

                // mengecek apakah checkbox tersebut dipilih
                if ($(this).prop('checked') == true) {

                    // mencari class terdekat dengan checked_farmer yang bernama data-detail-farmer lalu mencari value dari class unpaid_kg_farmer_id_
                    var unpaidKgRaw = parseFloat($(this).closest('.data-detail-collector').find(
                        '.total_unpaid_kg_farmer').val().replace(/\./g, '')) || 0;
                    // menambahkan hasil nilai yang ada kedalam perhitungan 
                    totalFarmerUnpaidKg += unpaidKgRaw;

                    var unpaidTotalRaw = parseFloat($(this).closest('.data-detail-collector').find(
                        '.total_unpaid_farmer').val().replace(/\./g, '')) || 0;
                    totalFarmerUnpaidTotal += unpaidTotalRaw;

                    var unpaidTotalCollectorRaw = parseFloat($(this).closest('.data-detail-collector').find(
                        '.total_unpaid_collector').val().replace(/\./g, '')) || 0;
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
    </script>
@endsection
