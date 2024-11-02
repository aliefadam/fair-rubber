@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <form action="{{ route('admin.transaction.rubber-collected.store') }}" method="POST" id="formRubberCollected">
        @csrf
        <div class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-5">
            <h1 class="text-xl font-medium ">Data Kolektor</h1>
            <br>
            <div class="grid grid-cols-2 gap-7">
                <div class="mb-5">
                    <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Kolektor <span class="text-red-500">*</span>
                    </label>
                    {{-- <h1 class="text-xl">{{ $rubberCollected->collector->name }}</h1> --}}
                    <select disabled name="collector" id="collector"
                        class="cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($collectors as $collector)
                            <option @selected($collector->id == $rubberCollected->collector_id) value="{{ $collector->id }}">{{ $collector->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tanggal Penimbangan Pabrik
                    </label>
                    <input value="{{ $rubberCollected->created_at->format('Y-m-d') }}" type="date"
                        id="tanggal_penimbangan_pabrik" name="tanggal_penimbangan_pabrik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="grid grid-cols-2 w-full gap-7">
                <div class="pt-5 customerInformation">
                    <h6 class="pb-3 text-sm text-gray-800 font-bold">Informasi Kolektor</h6>
                    <p class="text-sm dropNameCustomer text-gray-600 dark:text-gray-200">Acip</p>
                    <p class="text-sm dropPhoneCustomer text-gray-600 dark:text-gray-200">Jl Wonosari No. 1 Surabaya</p>
                    <p class="text-sm dropAddressCustomer text-gray-600 dark:text-gray-200">0821819192</p>
                </div>
                <div class="">

                    <label for="decsription"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea id="decsription" rows="4" name="decsription"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here...">{{ $rubberCollected->description }}</textarea>

                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-medium ">Data Anggota Petani</h1>
                <a class="inline-flex justify-center px-5 py-3 bg-blue-600 text-white text-sm font-medium rounded-[25px]"
                    href="javascript:void(0)" id="tambah-petani">
                    <span class="flex items-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="heroicons-outline:plus"></iconify-icon>
                        <span>Tambah Petani</span>
                    </span>
                </a>
            </div>
            <br>

            {{-- Table Ditampilkan Dari Javascript --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id="table">
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
                    <tbody id="tbody-petani">
                        @foreach ($rubberCollectedDetail as $detail)
                            <tr data-petani-id="{{ $detail->farmer_id }}"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4" data-number="{{ $loop->iteration }}">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">{{ $detail->farmer_name }}</td>
                                <td class="px-6 py-4">{{ $detail->farmer_village }}</td>
                                <td class="px-6 py-4 flex justify-center">
                                    <input value="{{ $detail->collector_scales }}" type="number"
                                        id="input-timbangan-collector" name="input-timbangan-collector[]"
                                        class="input-timbangan-collector text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="timbangan-pabrik text-center block text-lg poppins-medium">{{ $detail->factory_scales }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="dapat-toleransi text-center block text-lg poppins-medium">{{ $detail->can_tolerate }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="timbangan-premi text-center block text-lg poppins-medium">{{ $detail->honorarium_scales }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4" colspan="3">
                                <p class="text-[15px] font-semibold"> Total </p>
                            </th>
                            <th class="px-6 py-4 text-center">
                                <p class="text-[15px] font-semibold" id="total-timbangan-collector">
                                    {{ $rubberCollected->total_collector_scales }}</p>
                            </th>
                            <th class="px-6 py-4 text-center flex justify-center">
                                <input value="{{ $rubberCollected->total_factory_scales }}" type="number"
                                    id="total-timbangan-pabrik" name="total_timbangan_pabrik"
                                    class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </th>
                            <th class="px-6 py-4 text-center">
                                <p class="text-[15px] font-semibold" id="total-dapat-toleransi">
                                    {{ $rubberCollected->total_can_tolerate }}</p>
                            </th>
                            <th class="px-6 py-4 text-center">
                                <p class="text-[15px] font-semibold" id="total-timbangan-premi">
                                    {{ $rubberCollected->total_honorarium_scales }}</p>
                            </th>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 text-end" colspan="6">
                                <p class="text-[15px] font-semibold"> Max Toleransi Kolektor </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold">{{ $rubberCollected->max_tolerance_percentage }}%</p>
                                {{-- <p class="text-[15px] font-semibold">{{ $collector->tolerance }}%</p> --}}
                            </th>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 text-end" colspan="6">
                                <p class="text-[15px] font-semibold"> Toleransi Timbangan </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold" id="toleransi-timbangan">
                                    {{ $rubberCollected->tolerance_percentage_scales }}%
                                </p>
                            </th>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 text-end" colspan="6">
                                <p class="text-[15px] font-semibold"> Premi Petani </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold" id="premi-petani">
                                    Rp.{{ formatMoney($rubberCollected->total_honorarium_farmer) }}</p>
                            </th>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 text-end" colspan="6">
                                <p class="text-[15px] font-semibold"> Premi Kolektor </p>
                            </th>
                            <th class="px-6 py-4 text-end">
                                <p class="text-[15px] font-semibold" id="premi-collector">
                                    Rp.{{ formatMoney($rubberCollected->total_honorarium_collector) }}</p>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="flex justify-end mt-5">
                <button type="submit" id="btn-submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
            </div>
        </div>
    </form>
@endsection

@section('more-script')
    <script>
        // changeCollector();
        $(".input-timbangan-collector").on("input", hitungTotalTimbanganCollector);
        $("#total-timbangan-pabrik").on("input", hitungTotalTimbanganCollector);
        $("#tambah-petani").on("click", tambahPetani);
        $("#btn-submit").on("click", submitForm)
        $("select#collector").on("change", changeCollector);
        const toleransiKolektor = {{ $collector->tolerance }};
        let toleransiTimbangan = 0;

        function submitForm(e) {
            e.preventDefault();
            const dataPetani = [];
            const banyakBaris = $("#tbody-petani tr").length;
            for (let i = 0; i < banyakBaris; i++) {
                if ($("#tbody-petani tr").eq(i).find("td").eq(3).find("input").val() === "") continue;
                dataPetani.push({
                    id: $("#tbody-petani tr").eq(i).data("petani-id") ?? "",
                    nama: $("#tbody-petani tr").eq(i).find("td").eq(1).find("input").length ?
                        $("#tbody-petani tr").eq(i).find("td").eq(1).find("input").val() : $("#tbody-petani tr").eq(
                            i).find("td").eq(1).html(),
                    desa: $("#tbody-petani tr").eq(i).find("td").eq(2).find("input").length ?
                        $("#tbody-petani tr").eq(i).find("td").eq(2).find("input").val() : $("#tbody-petani tr").eq(
                            i).find("td").eq(2).html(),
                    timbanganCollector: $("#tbody-petani tr").eq(i).find("td").eq(3).find("input").val(),
                    timbanganPabrik: $("#tbody-petani tr").eq(i).find("td").eq(4).find("span").html(),
                    dapatDitoleransi: $("#tbody-petani tr").eq(i).find("td").eq(5).find("span").html(),
                    timbanganPremi: $("#tbody-petani tr").eq(i).find("td").eq(6).find("span").html(),
                });
            }

            const data = {
                _token: "{{ csrf_token() }}",
                collector_id: $("#collector").val(),
                total_timbangan_collector: +$("#total-timbangan-collector").html(),
                total_timbangan_pabrik: +$("#total-timbangan-pabrik").val(),
                total_dapat_toleransi: +$("#total-dapat-toleransi").html(),
                total_timbangan_premi: +$("#total-timbangan-premi").html(),
                max_toleransi_collector: +toleransiKolektor,
                toleransi_timbangan: +toleransiTimbangan == 0 ?
                    $("#toleransi-timbangan").html().replace("%", "") : toleransiTimbangan,
                premi_petani: +$("#premi-petani").html().replace(/Rp|&nbsp;|\./g, ''),
                premi_collector: +$("#premi-collector").html().replace(/Rp|&nbsp;|\./g, ''),
                tanggal_penimbangan_pabrik: $("#tanggal_penimbangan_pabrik").val(),
                deskripsi: $("#decsription").val() ?? "",
                data_petani: dataPetani,
            };

            $.ajax({
                type: "PUT",
                url: "/editRubberCollected/{{ $rubberCollected->id }}",
                data: data,
                beforeSend: function() {
                    $("#btn-submit").prop("disabled", true)
                        .addClass("bg-gray-300")
                        .removeClass("bg-green-700 hover:bg-green-800")
                        .html("Tunggu...");
                },
                success: function(response) {
                    window.location.href = response.redirect_url;
                }
            });
        }

        function changeCollector() {
            const collectorID = $("#collector").val();
            $.ajax({
                type: "GET",
                url: `/getCollectorByID/${collectorID}`,
                beforeSend: function() {
                    $("#table").html(loadingChangeCollector());
                },
                success: function(response) {
                    const view = response.view;
                    $("#table").html(view);
                    $(".input-timbangan-collector").on("input", hitungTotalTimbanganCollector);
                    $("#total-timbangan-pabrik").on("input", hitungTotalTimbanganCollector);
                }
            });
        }

        function loadingChangeCollector() {
            return `
            <div class="flex justify-center items-center p-5 bg-white">
                <span class="poppins-medium">LOADING...</span>
            </div>
            `;
        }

        function hitungTotalTimbanganCollector() {
            const totalTimbanganCollector = $(".input-timbangan-collector").get().map((input) => {
                return +input.value;
            }).reduce((acc, curr) => acc + curr);
            $("#total-timbangan-collector").html(totalTimbanganCollector);
            hitungToleransiTimbangan();
        }

        function hitungToleransiTimbangan() {
            const totalTimbanganCollector = +$("#total-timbangan-collector").html();
            const totalTimbanganPabrik = +$("#total-timbangan-pabrik").val();
            /*
             * Rumus Toleransi Timbangan adalah
             * ((totalTimbanganCollector - totalTimbanganPabrik) / totalTimbanganCollector) * 100
             * Dibulatkan Keatas
             */
            toleransiTimbangan = Math.ceil(parseFloat(((totalTimbanganCollector - totalTimbanganPabrik) /
                    totalTimbanganCollector) *
                100).toFixed(2));
            $("#toleransi-timbangan").html(toleransiTimbangan + "%");
            generateAll();
        }

        function generateAll() {
            isiTimbanganPabrik();
            hitungTotalDapatToleransi();
            hitungTotalTimbanganPremi();
            hitungPremiPetani();
            hitungPremiCollector();
        }

        /*
         * Rumus Mengisi Timbangan Pabrik
         * timbangan pabrik = setiap input timbangan collector - (setiap input timbangan collector * toleransiTimbangan / 100)
         * Dibulatkan Keatas
         */
        function isiTimbanganPabrik() {
            $(".input-timbangan-collector").each((i, timbanganCollector) => {
                const timbanganPabrik = Math.ceil(timbanganCollector.value - ((timbanganCollector.value *
                    toleransiTimbangan) / 100));
                $(".timbangan-pabrik").eq(i).html(timbanganPabrik);
            });
        }

        function hitungTotalDapatToleransi() {
            const totalDapatToleransi = [];
            if (dibawahSusut()) {
                // Posisi Dibawah
                $(".input-timbangan-collector").each((i, timbanganCollector) => {
                    const dapatToleransi = Math.floor((timbanganCollector.value *
                        toleransiTimbangan) / 100);
                    totalDapatToleransi.push(dapatToleransi);
                    $(".dapat-toleransi").eq(i).html(dapatToleransi);
                });
            } else {
                // Posisi Diatas
                $(".input-timbangan-collector").each((i, timbanganCollector) => {
                    const dapatToleransi = Math.floor((timbanganCollector.value *
                        toleransiKolektor) / 100);
                    totalDapatToleransi.push(dapatToleransi);
                    $(".dapat-toleransi").eq(i).html(dapatToleransi);
                });
            }

            const total = totalDapatToleransi.reduce((acc, curr) => acc + curr);
            $("#total-dapat-toleransi").html(total);
        }

        function hitungTotalTimbanganPremi() {
            $(".timbangan-pabrik").each((i, timbanganPabrik) => {
                const timbanganPremi = +timbanganPabrik.innerHTML + +$(".dapat-toleransi").eq(i).html();
                $(".timbangan-premi").eq(i).html(timbanganPremi)
            });

            const totalTimbanganPremi = $(".timbangan-premi").get().map((timbanganPremi) => {
                return +timbanganPremi.innerHTML;
            }).reduce((acc, curr) => acc + curr);
            $("#total-timbangan-premi").html(totalTimbanganPremi);
        }

        function hitungPremiPetani() {
            const premiPetani = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(+$("#total-timbangan-premi").html() * 2000);
            $("#premi-petani").html(premiPetani);
        }

        function hitungPremiCollector() {
            const premiCollector = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(+$("#total-timbangan-premi").html() * 500);
            $("#premi-collector").html(premiCollector);
        }

        function tambahPetani() {
            const lastRow = $("#tbody-petani tr").last().find("td").eq(0);
            const lastRowNumber = lastRow.data("number") ?? 0;
            const html = `
            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4" data-number="${lastRowNumber + 1}">${lastRowNumber + 1}</td>
                <td class="px-6 py-4">
                    <input type="text" id="farmer_name" name="farmer_name[]"
                        class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
                <td class="px-6 py-4">
                    <input type="text" id="farmer_village" name="farmer_village[]"
                        class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
                <td class="px-6 py-4 flex justify-center">
                    <input type="number" id="factory_scales" name="factory_scales[]"
                        class="input-timbangan-collector text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
                <td class="px-6 py-4">
                    <span class="timbangan-pabrik text-center block text-lg poppins-medium">0</span>
                </td>
                <td class="px-6 py-4">
                    <span class="dapat-toleransi text-center block text-lg poppins-medium">0</span>
                </td>
                <td class="px-6 py-4">
                    <span class="timbangan-premi text-center block text-lg poppins-medium">0</span>
                </td>
            </tr>
            `;

            $("#tbody-petani").append(html);
            $(".input-timbangan-collector").on("input", hitungTotalTimbanganCollector);
            $("#total-timbangan-pabrik").on("input", hitungTotalTimbanganCollector);
        }

        function dibawahSusut() {
            return toleransiTimbangan <= toleransiKolektor;
        }
    </script>
@endsection
