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
        @foreach ($farmers as $farmer)
            <tr data-petani-id="{{ $farmer->id }}"
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4" data-number="{{ $loop->iteration }}">{{ $loop->iteration }}</td>
                <td class="px-6 py-4">{{ $farmer->name }}</td>
                <td class="px-6 py-4">{{ $farmer->village }}</td>
                <td class="px-6 py-4 flex justify-center">
                    <input type="number" id="input-timbangan-collector" name="input-timbangan-collector[]"
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
        @endforeach
    </tbody>
    <tfoot>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th class="px-6 py-4" colspan="3">
                <p class="text-[15px] font-semibold"> Total </p>
            </th>
            <th class="px-6 py-4 text-center">
                <p class="text-[15px] font-semibold" id="total-timbangan-collector">0</p>
            </th>
            <th class="px-6 py-4 text-center flex justify-center">
                <input type="number" id="total-timbangan-pabrik" name="total_timbangan_pabrik"
                    class="text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </th>
            <th class="px-6 py-4 text-center">
                <p class="text-[15px] font-semibold" id="total-dapat-toleransi">0</p>
            </th>
            <th class="px-6 py-4 text-center">
                <p class="text-[15px] font-semibold" id="total-timbangan-premi">0</p>
            </th>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th class="px-6 py-4 text-end" colspan="6">
                <p class="text-[15px] font-semibold"> Max Toleransi Kolektor </p>
            </th>
            <th class="px-6 py-4 text-end">
                <p class="text-[15px] font-semibold">{{ $collector->tolerance }}%</p>
            </th>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th class="px-6 py-4 text-end" colspan="6">
                <p class="text-[15px] font-semibold"> Toleransi Timbangan </p>
            </th>
            <th class="px-6 py-4 text-end">
                <p class="text-[15px] font-semibold" id="toleransi-timbangan"></p>
            </th>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th class="px-6 py-4 text-end" colspan="6">
                <p class="text-[15px] font-semibold"> Premi Petani </p>
            </th>
            <th class="px-6 py-4 text-end">
                <p class="text-[15px] font-semibold" id="premi-petani">Rp. 0</p>
            </th>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th class="px-6 py-4 text-end" colspan="6">
                <p class="text-[15px] font-semibold"> Premi Kolektor </p>
            </th>
            <th class="px-6 py-4 text-end">
                <p class="text-[15px] font-semibold" id="premi-collector">Rp. 0</p>
            </th>
        </tr>
    </tfoot>
</table>
