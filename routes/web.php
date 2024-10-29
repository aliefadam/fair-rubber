<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RubberCollectedController;
use App\Http\Controllers\WithdrawalController;
use App\Models\Collector;
use App\Models\RubberCollected;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->to('/admin');
});

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");
});

Route::middleware("auth")->group(function () {
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

            Route::get("data/collector/data-detail/{id}", [CollectorController::class, "dataDetail"])->name("admin.master.collector.data-detail");
            Route::get("data/collector/add-farmer/{id}", [CollectorController::class, "addFarmer"])->name("admin.master.collector.addFarmer");
            Route::post("data/collector/store-farmer/{id}", [CollectorController::class, "storeFarmer"])->name("admin.master.collector.storeFarmer");
            Route::get("data/collector/edit-farmer/{id}", [CollectorController::class, "editFarmer"])->name("admin.master.collector.editFarmer");
            Route::put("data/collector/update-farmer/{id}", [CollectorController::class, "updateFarmer"])->name("admin.master.collector.updateFarmer");
        });

        Route::prefix("transaction")->group(function () {
            Route::resource("rubber-collected", RubberCollectedController::class, [
                "as" => "admin.transaction",
            ]);
            Route::resource("withdrawal", WithdrawalController::class, [
                "as" => "admin.transaction",
            ]);
            Route::get("/data/withdrawal/detail-withdrawal/{id}", [WithdrawalController::class, "dataDetail"])->name("admin.transaction.withdrawal.detail-withdrawal");

            Route::get("/admin/transaction/withdrawal/print",[WithdrawalController::class, "print"])->name("admin.transaction.withdrawal.print");

            Route::resource("report", ReportController::class, [
                "as" => "admin.transaction",
            ]);
        });

    });

    Route::delete("/logout", [AuthController::class, "logout"])->name("logout");
});

require_once __DIR__ . '/api.php';
