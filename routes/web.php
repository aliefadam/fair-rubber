<?php

use App\Http\Controllers\CollectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/admin", function () {
    return view("dashboard");
});


Route::prefix("/admin")->group(function () {
    Route::get("/", function () {
        return view("dashboard");
    })->name("admin.dashboard");

    Route::prefix("master")->group(function () {
        Route::resource("collector", CollectorController::class, [
            "as" => "admin.master",
        ]);
        Route::get("data/collector/add-farmer/{id}", [CollectorController::class, "addFarmer"])->name("admin.master.collector.addFarmer");
    });
});
