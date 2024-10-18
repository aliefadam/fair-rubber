<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use App\Models\RubberCollected;
use App\Models\RubberCollectedDetail;
use App\Models\Withdrawal;
use App\Models\WithdrawalCollectorDetails;
use App\Models\WithdrawalCollectorRubberCollectedDetails;
use App\Models\WithdrawalFarmerDetails;
use App\Models\WithdrawalFarmerRubberCollectedDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Withdrawal::get();
        return view("transaction.withdrawal.index", [
            "title" => "Penarikan",
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {

        // return $req->all();

        // mencari data awal sebagai bahan pengolahan data pencairan data
        $collector = Collector::with('farmers', 'farmers.rubberCollectedDetail', 'rubberCollected')->get();
        // return $collector;

        // mencari data rubber collected dari petani yang null / belum tersimpan kedalam database
        $rubberCollectedData = RubberCollected::with('rubberCollectedDetail')
            ->whereHas('rubberCollectedDetail', function ($query) {
                $query->whereNull('farmer_id');
            })->get();
        // return $rubberCollectedData;

        // set data 
        $data = [];

        // loop data collector
        for ($i = 0; $i < count($collector); $i++) {
            // set variable untuk pertambahan kolektor
            $total_paid_collector = 0;
            $total_unpaid_collector = 0;

            // data collector
            $data[$i]['collector_id'] = $collector[$i]->id;
            $data[$i]['collector_name'] = $collector[$i]->name;
            $data[$i]['collector_village'] = $collector[$i]->village;

            // mencari data total yang ingin dicarikan collector
            for ($j = 0; $j < count($collector[$i]->rubberCollected); $j++) {
                // belum cair
                if ($collector[$i]->rubberCollected[$j]->status == 1) {
                    if ($collector[$i]->rubberCollected[$j]->date >= $req->date_start && $collector[$i]->rubberCollected[$j]->date <= $req->date_end) {

                        $data[$i]['rubber'][$j]['remaining_honorarium'] = $collector[$i]->rubberCollected[$j]->total_honorarium_collector - $collector[$i]->rubberCollected[$j]->total_honorarium_collector_withdrawn;
                        $data[$i]['rubber'][$j]['status'] = $collector[$i]->rubberCollected[$j]->status;
                        $data[$i]['rubber'][$j]['id'] = $collector[$i]->rubberCollected[$j]->id;

                        $total_unpaid_collector += $data[$i]['rubber'][$j]['remaining_honorarium'];
                    }
                }
                // sudah cair
                if ($collector[$i]->rubberCollected[$j]->status == 2) {
                    $total_paid_collector += $collector[$i]->rubberCollected[$j]->total_honorarium_collector_withdrawn;
                }
            }

            // set variable untuk pertambahan petani
            $total_paid_farmer = 0;
            $total_unpaid_farmer = 0;
            $total_paid_kg_farmer = 0;
            $total_unpaid_kg_farmer = 0;
            // loop data petani yaang ter-relasi dengan collector
            $lastIndex = 1;
            for ($j = 0; $j < count($collector[$i]->farmers); $j++) {
                $lastIndex += $j;

                $data[$i]['farmer'][$j]['id'] = $collector[$i]->farmers[$j]->id;
                $data[$i]['farmer'][$j]['name'] = $collector[$i]->farmers[$j]->name;
                $data[$i]['farmer'][$j]['village'] = $collector[$i]->farmers[$j]->village;
                $data[$i]['farmer'][$j]['account_number'] = $collector[$i]->farmers[$j]->account_number;
                $data[$i]['farmer'][$j]['account_name'] = $collector[$i]->farmers[$j]->account_name;

                $paid_kg_farmer = 0;
                $paid_farmer = 0;
                $unpaid_kg_farmer = 0;
                $unpaid_farmer = 0;


                // loop data rubbercollecteddetail yang ter-relasi dengan petani
                for ($k = 0; $k < count($collector[$i]->farmers[$j]->rubberCollectedDetail); $k++) {
                    $data[$i]['farmer'][$j]['rubber'][$k]['id'] = $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->rubberCollected->id;
                    $data[$i]['farmer'][$j]['rubber'][$k]['used_scales'] = $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->used_scales;
                    $data[$i]['farmer'][$j]['rubber'][$k]['honorarium_farmer'] = $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->honorarium_farmer;
                    $data[$i]['farmer'][$j]['rubber'][$k]['status'] = $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->status;

                    // mengecek status belum cair
                    if ($collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->status == 1) {
                        // mengecek apakah sesuai dengan tanggal awal dan tanggal akir
                        if ($collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->rubberCollected->date >= $req->date_start && $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->rubberCollected->date <= $req->date_end) {

                            $unpaid_farmer += $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->honorarium_farmer;
                            $unpaid_kg_farmer += $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->used_scales;
                        }
                    }
                    // mengecek status sudah cair
                    if ($collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->status == 2) {
                        $paid_farmer += $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->honorarium_farmer;
                        $paid_kg_farmer += $collector[$i]->farmers[$j]->rubberCollectedDetail[$k]->used_scales;
                    }
                }

                // set variable untuk pertambahan petani
                $data[$i]['farmer'][$j]['total_paid'] = $paid_farmer;
                $data[$i]['farmer'][$j]['total_unpaid'] = $unpaid_farmer;
                $data[$i]['farmer'][$j]['paid_kg_farmer'] = $paid_kg_farmer;
                $data[$i]['farmer'][$j]['unpaid_kg_farmer'] = $unpaid_kg_farmer;

                $total_paid_farmer += $paid_farmer;
                $total_unpaid_farmer += $unpaid_farmer;
                $total_paid_kg_farmer += $paid_kg_farmer;
                $total_unpaid_kg_farmer += $unpaid_kg_farmer;
            }

            // membuat array untuk petani yang belum memiliki data pada database
            // men-loop data rubber collected 
            for ($j = 0; $j < count($rubberCollectedData); $j++) {
                $totalPaidFarmer = 0;  // Variabel untuk menyimpan total paid
                $totalPaidFarmerKg = 0;  // Variabel untuk menyimpan total paid

                // $data[$i]['farmer'][$j]['rubber'] = [];

                for ($k = 0; $k < count($rubberCollectedData[$j]->rubberCollectedDetail); $k++) {
                    if ($rubberCollectedData[$j]->rubberCollectedDetail[$k]->farmer_id == null) {
                        if ($rubberCollectedData[$j]->collector_id == $collector[$i]->id) {
                            $data[$i]['farmer'][$lastIndex]['id'] = null;
                            $data[$i]['farmer'][$lastIndex]['name'] = $rubberCollectedData[$j]->rubberCollectedDetail[$k]->farmer_name;
                            $data[$i]['farmer'][$lastIndex]['village'] = $rubberCollectedData[$j]->rubberCollectedDetail[$k]->farmer_village;
                            $data[$i]['farmer'][$lastIndex]['account_number'] = '-';
                            $data[$i]['farmer'][$lastIndex]['account_name'] = '-';

                            // membuat array untuk men-list data kolektor
                            $data[$i]['farmer'][$lastIndex]['rubber'][] = [
                                'id' => $rubberCollectedData[$j]->id,
                                'used_scales' => $rubberCollectedData[$j]->rubberCollectedDetail[$k]->used_scales,
                                'honorarium_farmer' => $rubberCollectedData[$j]->rubberCollectedDetail[$k]->honorarium_farmer,
                                'status' => $rubberCollectedData[$j]->rubberCollectedDetail[$k]->status
                            ];


                            // Periksa status, jika status "1", tambahkan ke total unpaid 
                            for ($l = 0; $l < count($data[$i]['farmer'][$lastIndex]['rubber']); $l++) {
                                $totalPaidFarmer += $data[$i]['farmer'][$lastIndex]['rubber'][$l]['honorarium_farmer'];
                                $totalPaidFarmerKg += $data[$i]['farmer'][$lastIndex]['rubber'][$l]['used_scales'];
                            }

                            // Assign nilai total ke dalam array
                            $data[$i]['farmer'][$lastIndex]['total_unpaid'] = $totalPaidFarmer;  // Total paid honorarium
                            $data[$i]['farmer'][$lastIndex]['total_paid'] = 0;
                            $data[$i]['farmer'][$lastIndex]['paid_kg_farmer'] = 0;
                            $data[$i]['farmer'][$lastIndex]['unpaid_kg_farmer'] = $totalPaidFarmerKg;
                        }
                    }
                }
            }

            $data[$i]['farmer'] = array_values($data[$i]['farmer']);

            $data[$i]['total_paid_collector'] = $total_paid_collector;
            $data[$i]['total_unpaid_collector'] = $total_unpaid_collector;
            $data[$i]['total_paid_farmer'] = $total_paid_farmer;
            $data[$i]['total_unpaid_farmer'] = $total_unpaid_farmer;
            $data[$i]['total_paid_kg_farmer'] = $total_paid_kg_farmer;
            $data[$i]['total_unpaid_kg_farmer'] = $total_unpaid_kg_farmer;
        }

        // return $data[0]['farmer'][0]['rubber'][0]->id;

        // return $data;
        return view("transaction.withdrawal.create", [
            "title" => "Lakukan Penarikan",
            'data' => $data,
            'collector' => $collector,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // return $req->all();

        // Ambil semua input dari request
        // $input = $req->all();

        // $unpaidFarmer= [];

        // // Loop melalui collector_id
        // for ($i = 0; $i < count($input['collector_id']); $i++) {
        //     $collectorId = $input['collector_id'][$i];  // ID Collector saat ini

        //     // Periksa apakah checkbox collector diaktifkan
        //     if ($req->has('checkbox_collector_' . $collectorId)) {

        //         // Loop melalui farmer_id untuk setiap collector
        //         foreach ($input['farmer_id_' . $collectorId] as $farmerIndex => $farmerId) {
        //             // Cek apakah farmer_id ada dan checkbox farmer diaktifkan
        //             if ($farmerId !== null && $req->has('checked_farmer_' . $farmerId . '_' . $collectorId)) {

        //                 // Ambil nilai unpaid_farmer_id
        //                 $unpaidFarmer[] = isset($input['unpaid_farmer_id_' . $farmerId . '_' . $collectorId]) ? $input['unpaid_farmer_id_' . $farmerId . '_' . $collectorId] : 0;

        //             }
        //         }
        //     }
        // }



        // return $unpaidFarmer;


        // mengolah data withdrawal parent



        $input = $req->all();

        $datawithdrawal = [
            'id' => DB::table('withdrawals')->max('id') + 1,
            'date_start' => $req->date_start_store,
            'date_end' => $req->date_end_store,
            'total_scales_withdrawn' => strReplace($req->total_farmer_scales_kg_unpaid_value),
            'total_honorarium_farmer' => strReplace($req->total_farmer_scales_unpaid_value),
            'total_honorarium_collector' => strReplace($req->total_collector_scales_unpaid_value),
            'description' => '-',
            'status' => 1,
        ];

        // return $input['checkbox_collector_' . 2];

        // return $req->all();

        $datawithdrawalCollector = [];

        // Loop melalui collector_id
        for ($i = 0; $i < count($input['collector_id']); $i++) {
            $collectorId = $input['collector_id'][$i];  // ID Collector saat ini

            // Periksa apakah checkbox collector diaktifkan
            if ($req->has('checkbox_collector_' . $collectorId)) {

                // Gunakan fungsi strReplace yang telah diperbarui untuk menangani angka dengan koma/titik
                $totalUnpaidCollector = strReplace($req->total_unpaid_collector[$i]);
                $totalUnpaidCollectorShould = strReplace($req->total_unpaid_collector_should[$i]);

                // Lakukan penghitungan
                $totalHonorariumRemainingWithdrawn = $totalUnpaidCollectorShould - $totalUnpaidCollector;

                // Masukkan data ke dalam array
                $datawithdrawalCollector[$i]['collector_id'] = $collectorId;
                $datawithdrawalCollector[$i]['total_unpaid_collector'] = $totalUnpaidCollector;
                $datawithdrawalCollector[$i]['total_unpaid_collector_should'] = $totalUnpaidCollectorShould;
                $datawithdrawalCollector[$i]['total_honorarium_remaining_withdrawn'] = $totalHonorariumRemainingWithdrawn;
                $datawithdrawalCollector[$i]['total_unpaid_collector_rubber_collected_id'] = isset($input['total_unpaid_collector_rubber_collected_' . $collectorId]) ? $input['total_unpaid_collector_rubber_collected_' . $collectorId] : [];;
            }
        }

        // return $datawithdrawalCollector;

        $datawithdrawalFarmer = [];

        // Loop melalui collector_id
        for ($i = 0; $i < count($input['collector_id']); $i++) {
            $collectorId = $input['collector_id'][$i];  // ID Collector saat ini

            // Periksa apakah checkbox collector diaktifkan
            if ($req->has('checkbox_collector_' . $collectorId)) {

                // Loop melalui farmer_id untuk setiap collector
                foreach ($input['farmer_id_' . $collectorId] as $farmerIndex => $farmerId) {

                    // Cek apakah farmer_id ada dan checkbox farmer diaktifkan
                    if ($farmerId !== null && $req->has('checked_farmer_' . $farmerId . '_' . $collectorId)) {

                        // Ambil nilai unpaid_farmer_id
                        $datawithdrawalFarmer[$i][$farmerId]['total'] = isset($input['unpaid_farmer_id_' . $farmerId . '_' . $collectorId]) ? strReplace($input['unpaid_farmer_id_' . $farmerId . '_' . $collectorId]) : 0;
                        $datawithdrawalFarmer[$i][$farmerId]['kg'] = isset($input['unpaid_kg_farmer_id_' . $farmerId . '_' . $collectorId]) ? strReplace($input['unpaid_kg_farmer_id_' . $farmerId . '_' . $collectorId]) : 0;
                        $datawithdrawalFarmer[$i][$farmerId]['farmer_id'] = $farmerId;
                        $datawithdrawalFarmer[$i][$farmerId]['rubber_collected_id'] = isset($input['farmer_id_rubber_collected_' . $farmerId . '_' . $collectorId]) ? $input['farmer_id_rubber_collected_' . $farmerId . '_' . $collectorId] : [];
                    }
                }
            }
        }

        // Proses filtering dan reindexing
        foreach ($datawithdrawalFarmer as $index => $farmers) {
            // Filter data untuk menghapus petani dengan rubber_collected_id yang kosong
            $filteredFarmers = array_filter($farmers, function ($farmerData) {
                return !empty($farmerData['rubber_collected_id']);
            });

            // Reset key menjadi numerik menggunakan array_values
            $datawithdrawalFarmer[$index] = array_values($filteredFarmers);
        }




        // return [$datawithdrawal, $datawithdrawalCollector, $datawithdrawalFarmer];

        // return $datawithdrawalFarmer;

        DB::beginTransaction();
        try {


            Withdrawal::insert($datawithdrawal);

            for ($i = 0; $i < count($datawithdrawalCollector); $i++) {
                $dataWithdrawalCollectorDetails = WithdrawalCollectorDetails::create([
                    'withdawal_id' => $datawithdrawal['id'],
                    'collector_id' => $datawithdrawalCollector[$i]['collector_id'],
                    'total_honorarium_withdrawn' => $datawithdrawalCollector[$i]['total_unpaid_collector'],
                    'total_honorarium_remaining_withdrawn' => $datawithdrawalCollector[$i]['total_honorarium_remaining_withdrawn'],
                    'total_honorarium_should_withdrawn' => $datawithdrawalCollector[$i]['total_unpaid_collector_should'],
                ]);

                // $totalWithdrawalCollector = $datawithdrawalCollector[$i]['total_unpaid_collector'];

                $totalWithdrawalCollector = $datawithdrawalCollector[$i]['total_unpaid_collector'];

                for ($j = 0; $j < count($datawithdrawalCollector[$i]['total_unpaid_collector_rubber_collected_id']); $j++) {

                    // Dapatkan data RubberCollected sekali saja
                    $rubberCollected = RubberCollected::where('id', $datawithdrawalCollector[$i]['total_unpaid_collector_rubber_collected_id'][$j])->first();

                    $checkingWidrawnCollector = $rubberCollected->total_honorarium_collector - $rubberCollected->total_honorarium_collector_withdrawn;

                    // Cek apakah jumlah penarikan lebih besar dari yang tersisa
                    if ($totalWithdrawalCollector > $checkingWidrawnCollector) {
                        $totalWithdrawalCollector -= $checkingWidrawnCollector;
                        $honorariumWithdrawn = $rubberCollected->total_honorarium_collector; // Maksimal ditarik
                    } else {
                        $honorariumWithdrawn = $rubberCollected->total_honorarium_collector_withdrawn + $totalWithdrawalCollector; // Sisa yang ditarik
                        $totalWithdrawalCollector = 0; // Semua telah ditarik
                    }

                    // Buat WithdrawalCollectorRubberCollectedDetails
                    WithdrawalCollectorRubberCollectedDetails::create([
                        'withdrawal_collector_rubber_collected_id' => $dataWithdrawalCollectorDetails->id,
                        'rubber_collected_id' => $datawithdrawalCollector[$i]['total_unpaid_collector_rubber_collected_id'][$j],
                    ]);

                    // Update RubberCollected
                    $rubberCollected->update([
                        'total_honorarium_collector_withdrawn' => $honorariumWithdrawn,
                        'status' => 3,
                    ]);

                    // Jika tidak ada lagi yang bisa ditarik, keluar dari loop
                    if ($totalWithdrawalCollector == 0) {
                        break;
                    }
                }
            }

            for ($i = 0; $i < count($datawithdrawalFarmer); $i++) {
                for ($j = 0; $j < count($datawithdrawalFarmer[$i]); $j++) {
                    $dataWithdrawalFarmerDetails[$i] = WithdrawalFarmerDetails::create([
                        'withdawal_id' => $datawithdrawal['id'],
                        'farmer_id' => $datawithdrawalFarmer[$i][$j]['farmer_id'],
                        'total_scales_withdrawn' => $datawithdrawalFarmer[$i][$j]['kg'],
                        'total_honorarium_withdrawn' => $datawithdrawalFarmer[$i][$j]['total'],
                        'status' => 1,
                    ]);
                    for ($k = 0; $k < count($datawithdrawalFarmer[$i][$j]['rubber_collected_id']); $k++) {
                        WithdrawalFarmerRubberCollectedDetails::create([
                            'withdrawal_farmer_rubber_collected_id' => $dataWithdrawalFarmerDetails[$i]['id'],
                            'rubber_collected_id' => $datawithdrawalFarmer[$i][$j]['rubber_collected_id'][$k],
                        ]);

                        RubberCollectedDetail::where('rubber_collected_id', $datawithdrawalFarmer[$i][$j]['rubber_collected_id'][$k])
                            ->where('farmer_id', $datawithdrawalFarmer[$i][$j]['farmer_id'])
                            ->update([
                                'status' => 3
                            ]);
                    }
                }
            }

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            // return$th;
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'trace' => $th->getTrace(),
                'data' => [],

            ]);
        }

        // Redirect atau response setelah data tersimpan
        // return
    }

    /**
     * Display the specified resource.
     */
    public function show(Withdrawal $withdrawal)
    {
        //
    }

    public function detailWithdrawal(Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Withdrawal $withdrawal)
    {
        //
    }
}
