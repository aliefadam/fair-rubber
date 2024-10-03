<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RubberCollectedController;
use App\Http\Controllers\WithdrawalController;
use App\Models\Collector;
use App\Models\RubberCollected;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/admin", function () {
    return view("dashboard");
});


Route::prefix("/admin")->group(function () {
    Route::get("/", function () {
        return view("dashboard", [
            "title" => "Dashboard",
        ]);
    })->name("admin.dashboard");

    Route::prefix("master")->group(function () {
        Route::resource("collector", CollectorController::class, [
            "as" => "admin.master",
        ]);
        Route::get("data/collector/add-farmer/{id}", [CollectorController::class, "addFarmer"])->name("admin.master.collector.addFarmer");
        Route::post("data/collector/store-farmer/{id}", [CollectorController::class, "storeFarmer"])->name("admin.master.collector.storeFarmer");
        Route::get("data/collector/data-detail/{id}", [CollectorController::class, "dataDetail"])->name("admin.master.collector.data-detail");
    });

    Route::prefix("transaction")->group(function () {
        Route::resource("rubber-collected", RubberCollectedController::class, [
            "as" => "admin.transaction",
        ]);
        Route::resource("withdrawal", WithdrawalController::class, [
            "as" => "admin.transaction",
        ]);
        Route::resource("report", ReportController::class, [
            "as" => "admin.transaction",
        ]);
    });

    Route::get("/admin/transaction/withdrawal/print", function () {
        return view("transaction.withdrawal.print");
    })->name("admin.transaction.withdrawal.print");

    Route::get("/data/transaction/withdrawal/detail-withdrawal/1", function (Request $req) {

        // return 'as';
        $collector = Collector::with('farmers', 'farmers.rubberCollectedDetail', 'rubberCollected')->get();

        $rubberCollectedData = RubberCollected::with('rubberCollectedDetail')
            ->whereHas('rubberCollectedDetail', function ($query) {
                $query->whereNull('farmer_id');
            })->get();
        // return $rubberCollectedData;
        // return $collector;

        // return $req->all();

        $data = [];

        for ($i = 0; $i < count($collector); $i++) {
            // set variable untuk pertambahan kolektor
            $total_paid_collector = 0;
            $total_unpaid_collector = 0;

            $data[$i]['collector_id'] = $collector[$i]->id;
            $data[$i]['collector_name'] = $collector[$i]->name;
            $data[$i]['collector_village'] = $collector[$i]->village;

            for ($j = 0; $j < count($collector[$i]->rubberCollected); $j++) {
                // belum cair
                if ($collector[$i]->rubberCollected[$j]->status == 1) {
                    if ($collector[$i]->rubberCollected[$j]->date >= $req->date_start && $collector[$i]->rubberCollected[$j]->date <= $req->date_end) {
                        $total_unpaid_collector += $collector[$i]->rubberCollected[$j]->total_honorarium_collector;
                    }
                }
                // sudah cair
                if ($collector[$i]->rubberCollected[$j]->status == 2) {
                    $total_paid_collector += $collector[$i]->rubberCollected[$j]->total_honorarium_collector;
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
                    $lastIndex += $j;
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

            $data[$i]['total_paid_collector'] = $total_paid_collector;
            $data[$i]['total_unpaid_collector'] = $total_unpaid_collector;
            $data[$i]['total_paid_farmer'] = $total_paid_farmer;
            $data[$i]['total_unpaid_farmer'] = $total_unpaid_farmer;
            $data[$i]['total_paid_kg_farmer'] = $total_paid_kg_farmer;
            $data[$i]['total_unpaid_kg_farmer'] = $total_unpaid_kg_farmer;
        }
        return view("transaction.withdrawal.detail-withdrawal", [
            "title" => "Lakukan Penarikan",
            'data' => $data,
            'collector' => $collector,
        ]);
    })->name("admin.transaction.withdrawal.detail-withdrawal");
});

require_once __DIR__ . '/api.php';
