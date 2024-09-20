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
              
            </div>
            <div class="mb-5">
                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Tanggal Penimbangan Pabrik
                </label>
                <input type="date" id="nik" name="nik"
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

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="message" rows="4" name="decsription"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>

            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-medium ">Data Anggota Petani</h1>
            <a class="inline-flex justify-center px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-[25px]"
                href="javascript:void(0)" id="tambah-petani">
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
                <tbody id="tbody-petani">
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Budi Santoso</td>
                        <td class="px-6 py-4">Kaduhayu</td>
                        <td class="px-6 py-4 flex justify-center">
                            <input type="number" id="kode" name="kode"
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Yanto</td>
                        <td class="px-6 py-4">Pacalukan</td>
                        <td class="px-6 py-4 flex justify-center">
                            <input type="number" id="kode" name="kode"
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Yanto</td>
                        <td class="px-6 py-4">Pacalukan</td>
                        <td class="px-6 py-4 flex justify-center">
                            <input type="number" id="kode" name="kode"
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Yanto</td>
                        <td class="px-6 py-4">Pacalukan</td>
                        <td class="px-6 py-4 flex justify-center">
                            <input type="number" id="kode" name="kode"
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
                </tbody>
                <tfoot>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4" colspan="3">
                            <p class="text-[15px] font-semibold"> Total </p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold" id="total-timbangan-collector">0</p>
                        </th>
                        <th class="px-6 py-4 text-center flex justify-center">
                            <input type="number" id="kode" name="kode"
                                class="input-timbangan-pabrik text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold" id="total-dapat-toleransi">0</p>
                        </th>
                        <th class="px-6 py-4 text-center">
                            <p class="text-[15px] font-semibold" id="total-timbangan-premi">0</p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Max Toleransi Kolektor </p>
                        </th>
                        <th class="px-6 py-4 text-end">
                            <p class="text-[15px] font-semibold">10%</p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Toleransi Timbangan </p>
                        </th>
                        <th class="px-6 py-4 text-end">
                            <p class="text-[15px] font-semibold" id="tolerance-current"></p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Premi Petani </p>
                        </th>
                        <th class="px-6 py-4 text-end">
                            <p class="text-[15px] font-semibold" id="premi-petani">Rp. 0</p>
                        </th>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="px-6 py-4 text-end" colspan="6">
                            <p class="text-[15px] font-semibold"> Premi Kolektor </p>
                        </th>
                        <th class="px-6 py-4 text-end">
                            <p class="text-[15px] font-semibold" id="premi-collector">Rp. 0</p>
                        </th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <div class="flex justify-end mt-5">
            <button type="button"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
        </div>
    </div>
@endsection

@section('more-script')
    <script>
        $("#tambah-petani").click(tambahPetani);
        $(".input-timbangan-collector").on("input", calcTotalCollector);
        $(".input-timbangan-pabrik").on("input", calc);

        function tambahPetani() {
            $("#tbody-petani").append(`
            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">3</td>
                <td class="px-6 py-4"> <input type="text" id="kode" name="kode"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
                <td class="px-6 py-4">
                    <input type="text" id="kode" name="kode"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </td>
                <td class="px-6 py-4 flex justify-center">
                    <input type="number" id="kode" name="kode"
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
            `);
        }

        function calcTotalCollector() {
            const total = $(".input-timbangan-collector").map(function() {
                if (this.value == "") {
                    return 0;
                }
                return +this.value;
            }).get().reduce(function(acc, curr) {
                if (curr == NaN) {
                    curr = 0;
                }
                return acc + curr;
            }, 0);

            $("#total-timbangan-collector").html(total);
            calc();
        }

        function calc() {
            const maxToleransi = 10;
            const inputTimbanganPabrik = +$(".input-timbangan-pabrik").val();
            const totalTimbanganCollector = +$("#total-timbangan-collector").html();
            if (inputTimbanganPabrik != 0) {
                const findPercentage = Math.ceil(((totalTimbanganCollector - inputTimbanganPabrik) /
                    totalTimbanganCollector) * 100);
                console.log(findPercentage);
                if (maxToleransi < findPercentage) {
                    maxToleransi = findPercentage;
                }
                $('#tolerance-current').html(findPercentage + '%');
                $(".input-timbangan-collector").each((i, element) => {
                    const timbanganPabrik = Math.ceil(element.value - ((element.value * findPercentage) / 100));
                    const dapatToleransi = Math.ceil(element.value * maxToleransi / 100);
                    const timbanganPremi = timbanganPabrik + dapatToleransi;
                    $(".timbangan-pabrik").eq(i).html(timbanganPabrik);
                    $(".dapat-toleransi").eq(i).html(dapatToleransi);
                    $(".timbangan-premi").eq(i).html(timbanganPremi);
                    const totalDapatToleransi = $(".dapat-toleransi").map(function() {
                        return +this.value;
                    }).get().reduce(function(acc, curr) {
                        return acc + curr;
                    });
                });
                const totalDapatToleransi = $(".dapat-toleransi").map(function() {
                    return +this.innerHTML;
                }).get().reduce(function(acc, curr) {
                    return acc + curr;
                }, 0);
                $("#total-dapat-toleransi").html(totalDapatToleransi);

                const totalTimbanganPremi = $(".timbangan-premi").map(function() {
                    return +this.innerHTML;
                }).get().reduce(function(acc, curr) {
                    return acc + curr;
                }, 0);
                $("#total-timbangan-premi").html(totalTimbanganPremi);

                let premiPetani = 0;
                let premiKolektor = 0;
                if (findPercentage > maxToleransi) {
                    premiPetani = totalTimbanganPremi * 2000;
                    premiKolektor = totalTimbanganPremi * 500;
                } else {
                    premiPetani = totalTimbanganCollector * 2000;
                    premiKolektor = totalTimbanganCollector * 500;
                }

                $("#premi-petani").html(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(premiPetani));
                $("#premi-collector").html(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(premiKolektor));
            }
        }
    </script>
@endsection
