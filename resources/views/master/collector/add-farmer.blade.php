@extends('layouts.admin')
@section('content')
    <!-- BEGIN: Breadcrumb -->
    {{-- <x-breadcrum grandparent="Master" parent="Produk" :current="$title" :route="route('admin.master-data.brand.create')"></x-breadcrum> --}}

    <form action="{{ route('admin.master.collector.storeFarmer', $collector->id) }}" method="POST" class="bg-white p-5">
        @csrf
        <input type="hidden" name="collector_id" value="{{ $collector->id }}">
        <div class="grid grid-cols-2 gap-7">
            <div class="">
                <div class="mb-5">
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        NIK
                    </label>
                    <input type="number" id="nik" name="nik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="no_kk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nomor KK
                    </label>
                    <input type="number" id="no_kk" name="no_kk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-6">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jenis Kelamin <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-3 flex items-center gap-3">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="M" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="F" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="ttl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tanggal Lahir <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="ttl" name="ttl" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Provinsi</label>
                    <select id="provinsi" name="provinsi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Provinsi</option>
                        <option value="1">Jawa Timur</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="kabupaten_kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Kabupaten/Kota</label>
                    <select id="kabupaten_kota" name="kabupaten_kota"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Kabupaten/Kota</option>
                        <option value="1">Kota Surabaya</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Kecamatan</label>
                    <select id="kecamatan" name="kecamatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Kecamatan</option>
                        <option value="1">Benowo</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="kelurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Kelurahan</label>
                    <select id="Kelurahan" name="kelurahan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Kelurahan</option>
                        <option value="1">Sememi</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="desa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Desa <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="desa" name="desa"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Alamat Rumah <span class="text-red-500">*</span>
                    </label>
                    <textarea
                        class="resize-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="alamat" id="" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="">
                <div class="mb-5">
                    <label for="anggota_sejak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Anggota Sejak <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="anggota_sejak" name="anggota_sejak"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required />
                </div>
                <div class="mb-5">
                    <label for="jumlah_kebun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jumlah Kebun
                    </label>
                    <input type="number" id="jumlah_kebun" name="jumlah_kebun"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="luas_kebun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Total Luas Kebun (m<sup>2</sup>)
                    </label>
                    <input type="number" id="luas_kebun" name="luas_kebun"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="jumlah_pohon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jumlah Pohon
                    </label>
                    <input type="number" id="jumlah_pohon" name="jumlah_pohon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="hasil_panen_seminggu"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Hasil Panen Seminggu
                    </label>
                    <input type="number" id="hasil_panen_seminggu" name="hasil_panen_seminggu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-6">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Kepemilikan Kebun
                    </label>
                    <div class="mt-3 flex items-center gap-3">
                        <div class="flex items-center">
                            <input id="milik-sendiri" type="radio" value="Milik Sendiri" name="kepemilikan_kebun"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="milik-sendiri"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Milik Sendiri</label>
                        </div>
                        <div class="flex items-center">
                            <input id="orang-lain" type="radio" value="Orang Lain" name="kepemilikan_kebun"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="orang-lain"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orang Lain</label>
                        </div>
                        <div class="flex items-center">
                            <input id="sewa-lahan" type="radio" value="Sewa Lahan" name="kepemilikan_kebun"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="sewa-lahan" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sewa
                                Lahan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="no_telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nomor Telepon
                    </label>
                    <input type="number" id="no_telephone" name="no_telephone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Bank</label>
                    <select id="bank" name="bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Bank</option>
                        <option value="1">BCA</option>
                        <option value="2">BNI</option>
                        <option value="3">BRI</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="no_rekening" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nomor Rekening
                    </label>
                    <input type="number" id="no_rekening" name="no_rekening"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="mb-5">
                    <label for="nama_rekening" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Rekening
                    </label>
                    <input type="text" id="nama_rekening" name="nama_rekening"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Daftarkan</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('more-script')
@endsection
