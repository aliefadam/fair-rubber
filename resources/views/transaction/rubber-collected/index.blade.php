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
            <a class="inline-flex justify-center px-5 py-3 bg-blue-600 text-white text-sm font-medium rounded-[25px]"
                href="{{ route('admin.transaction.rubber-collected.create') }}">
                <span class="flex items-center">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="heroicons-outline:plus"></iconify-icon>
                    <span>Input Nota Timbangan</span>
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
                    <span class="col-span-8 hidden"></span>
                    <span class="col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                id="data-table">
                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                    <tr>
                                        <th scope="col" class=" table-th ">
                                            No
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Nama Kolektor
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Desa
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Tgl Penimbangan
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Petani
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Premi Kolektor
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    @foreach ($rubber_collecteds as $rubber_collected)
                                        <tr>
                                            <td class="table-td">{{ $loop->iteration }}</td>
                                            <td class="table-td ">{{ $rubber_collected->collector->name }}</td>
                                            <td class="table-td ">{{ $rubber_collected->collector->village }}</td>
                                            <td class="table-td ">
                                                {{ Carbon\Carbon::parse($rubber_collected->date)->translatedFormat('l, d F Y') }}
                                            </td>
                                            <td class="table-td ">
                                                {{ formatMoney($rubber_collected->total_honorarium_farmer, true) }}</td>
                                            <td class="table-td ">
                                                {{ formatMoney($rubber_collected->total_honorarium_collector, true) }}</td>
                                            <td class="table-td">
                                                <button id="dropdownDefaultButton-{{ $rubber_collected->id }}"
                                                    data-dropdown-toggle="dropdown-Default-{{ $rubber_collected->id }}"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                    <i
                                                        class="fa-regular fa-ellipsis-vertical cursor-pointer text-[16px]"></i>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-Default-{{ $rubber_collected->id }}"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton-{{ $rubber_collected->id }}">
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                data-rubber-collected-id={{ $rubber_collected->id }}
                                                                data-modal-target="rubber-collected-detail-modal"
                                                                data-modal-toggle="rubber-collected-detail-modal"
                                                                class="btn-detail block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lihat
                                                                Detai</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin.transaction.rubber-collected.show', $rubber_collected->id) }}"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Rubber Detail Modal Detail --}}
    <div id="rubber-collected-detail-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-[90%] flex justify-center p-4">
            <!-- Modal content -->
            <div class="relative w-full bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Detail Nota Timbangan
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="rubber-collected-detail-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 h-[70vh] overflow-y-scroll" id="modal-detail-rubber-collected-body">
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
        $(".btn-detail").on("click", openDetail);

        function openDetail() {
            const rubberCollectedID = $(this).data("rubber-collected-id");
            $.ajax({
                type: "GET",
                url: `/getRubberCollected/${rubberCollectedID}`,
                beforeSend: function() {
                    $("#modal-detail-rubber-collected-body")
                        .addClass("flex justify-center items-center")
                        .html(loadingIndicator());
                },
                success: function(response) {
                    const view = response.view;
                    $("#modal-detail-rubber-collected-body")
                        .removeClass("flex justify-center items-center")
                        .html(view);
                }
            });
        }

        function loadingIndicator() {
            return `
            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
            </div>
            `;
        }
    </script>
@endsection
