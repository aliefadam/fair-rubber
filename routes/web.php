<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\RubberCollectedController;
use App\Http\Controllers\WithdrawalController;
use App\Models\RubberCollected;
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
        Route::get("data/collector/data-detail/{id}", [CollectorController::class, "dataDetail"])->name("admin.master.collector.data-detail");
    });

    Route::prefix("transaction")->group(function () {
        Route::resource("rubber-collected", RubberCollectedController::class, [
            "as" => "admin.transaction",
        ]);
        Route::resource("withdrawal", WithdrawalController::class, [
            "as" => "admin.transaction",
        ]);
    });
});
