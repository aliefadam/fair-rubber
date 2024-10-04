<div class="mb-5 flex justify-between">
    <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-1">
            <span class="text-xs poppins-bold">KOLEKTOR</span>
            <span class="">{{ $rubber_collected->collector->name }}</span>
        </div>
        <div class="flex flex-col gap-1">
            <span class="text-xs poppins-bold">DESKRIPSI</span>
            <span class="">{{ $rubber_collected->description ?? '-' }}</span>
        </div>
    </div>
    <div class="">
        <div class="flex flex-col gap-1">
            <span class="text-xs poppins-bold">TANGGAL PENIMBANGAN</span>
            <span
                class="">{{ Carbon\Carbon::parse($rubber_collected->date)->translatedFormat('l, d F y') }}</span>
        </div>
    </div>
</div>
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
            @foreach ($rubber_collected_detail as $detail)
                <tr data-petani-id="{{ $detail->farmer_id }}"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4" data-number="{{ $loop->iteration }}">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $detail->farmer_name }}</td>
                    <td class="px-6 py-4">{{ $detail->farmer_village }}</td>
                    <td class="px-6 py-4 flex justify-center">
                        <span
                            class="timbangan-pabrik text-center block poppins-medium">{{ $detail->collector_scales }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span
                            class="timbangan-pabrik text-center block poppins-medium">{{ $detail->factory_scales }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span
                            class="dapat-toleransi text-center block poppins-medium">{{ $detail->can_tolerate }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span
                            class="timbangan-premi text-center block poppins-medium">{{ $detail->honorarium_scales }}</span>
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
                    <p class="text-[15px] font-semibold" id="total-timbangan-collector">
                        {{ $rubber_collected->total_collector_scales }}</p>
                </th>
                <th class="px-6 py-4 text-center flex justify-center">
                    <p class="text-[15px] font-semibold">{{ $rubber_collected->total_factory_scales }}</p>
                </th>
                <th class="px-6 py-4 text-center">
                    <p class="text-[15px] font-semibold" id="total-dapat-toleransi">
                        {{ $rubber_collected->total_can_tolerate }}</p>
                </th>
                <th class="px-6 py-4 text-center">
                    <p class="text-[15px] font-semibold" id="total-timbangan-premi">
                        {{ $rubber_collected->total_honorarium_scales }}</p>
                </th>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th class="px-6 py-4 text-end" colspan="6">
                    <p class="text-[15px] font-semibold"> Max Toleransi Kolektor </p>
                </th>
                <th class="px-6 py-4 text-end">
                    <p class="text-[15px] font-semibold">{{ $rubber_collected->max_tolerance_percentage }}%</p>
                </th>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th class="px-6 py-4 text-end" colspan="6">
                    <p class="text-[15px] font-semibold"> Toleransi Timbangan </p>
                </th>
                <th class="px-6 py-4 text-end">
                    <p class="text-[15px] font-semibold" id="toleransi-timbangan">
                        {{ $rubber_collected->tolerance_percentage_scales }}%</p>
                </th>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th class="px-6 py-4 text-end" colspan="6">
                    <p class="text-[15px] font-semibold"> Premi Petani </p>
                </th>
                <th class="px-6 py-4 text-end">
                    <p class="text-[15px] font-semibold" id="premi-petani">
                        {{ formatMoney($rubber_collected->total_honorarium_farmer, true) }}</p>
                </th>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th class="px-6 py-4 text-end" colspan="6">
                    <p class="text-[15px] font-semibold"> Premi Kolektor </p>
                </th>
                <th class="px-6 py-4 text-end">
                    <p class="text-[15px] font-semibold" id="premi-collector">
                        {{ formatMoney($rubber_collected->total_honorarium_collector, true) }}</p>
                </th>
            </tr>
        </tfoot>
    </table>
</div>
