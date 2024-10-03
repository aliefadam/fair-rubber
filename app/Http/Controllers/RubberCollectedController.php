<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use App\Models\RubberCollected;
use App\Models\RubberCollectedDetail;
use Illuminate\Http\Request;

class RubberCollectedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view(
            'transaction.rubber-collected.index',
            [
                'title' => 'Input Nota Timbangan',
                "rubber_collecteds" => RubberCollected::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'transaction.rubber-collected.create',
            [
                'title' => 'Input Nota Timbangan',
                'collectors' => Collector::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rubberCollectedData = RubberCollected::create([
            "collector_id" => $request->collector_id,
            "date" => $request->tanggal_penimbangan_pabrik,
            "total_collector_scales" => $request->total_timbangan_collector,
            "total_factory_scales" => $request->total_timbangan_pabrik,
            "total_can_tolerate" => $request->total_dapat_toleransi,
            "total_honorarium_scales" => $request->total_timbangan_premi,
            "total_used_scales" => $request->total_timbangan_premi,
            "max_tolerance_percentage" => $request->max_toleransi_collector,
            "tolerance_percentage_scales" => $request->toleransi_timbangan,
            "total_honorarium_farmer" => $request->premi_petani,
            "total_honorarium_collector" => $request->premi_collector,
            "total_honorarium_collector_withdrawn" => 0,
            "description" => $request->deskripsi,
            "status" => 1,
        ]);

        $dataPetani = $request->data_petani;
        $honorariumFarmer = $rubberCollectedData->total_honorarium_farmer / count($dataPetani);
        foreach ($dataPetani as $petani) {
            RubberCollectedDetail::create([
                "rubber_collected_id" => $rubberCollectedData->id,
                "farmer_id" => $petani["id"],
                "farmer_name" => $petani["nama"],
                "farmer_village" => $petani["desa"],
                "collector_scales" => $petani["timbanganCollector"],
                "factory_scales" => $petani["timbanganPabrik"],
                "can_tolerate" => $petani["dapatDitoleransi"],
                "honorarium_scales" => $petani["timbanganPremi"],
                "used_scales" => $petani["timbanganPremi"],
                "honorarium_farmer" => $petani["timbanganPremi"] * 2000,
                "status" => 1,
            ]);
        }
        return response()->json([
            "message" => "success",
            "redirect_url" => route('admin.transaction.rubber-collected.index')
        ])->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     */
    public function show(RubberCollected $rubberCollected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RubberCollected $rubberCollected)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RubberCollected $rubberCollected)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RubberCollected $rubberCollected)
    {
        //
    }

    public function getRubberCollectedById($id)
    {
        $rubberCollected = RubberCollected::find($id);
        $rubberCollectedDetail = RubberCollectedDetail::where("rubber_collected_id", $id)->get();
        return response()->json([
            "view" => view("components.modal-rubber-collected", [
                "rubber_collected" => $rubberCollected,
                "rubber_collected_detail" => $rubberCollectedDetail
            ])->render(),
        ]);
    }
}
