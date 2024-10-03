<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use App\Models\Farmer;
use Illuminate\Http\Request;

class CollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view(
            'master.collector.index',
            [
                'title' => 'Kolektor',
                "collectors" => Collector::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master.collector.create", [
            "title" => "Tambah Kolektor",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newCollector = [
            "code" => $request->kode,
            "nik" => $request->nik,
            "no_kk" => $request->no_kk,
            "name" => $request->nama,
            "gender" => $request->gender,
            "birth_date" => $request->ttl,
            "village" => $request->desa,
            "address" => $request->alamat,
            "sub_district_id" => $request->kelurahan,
            "district_id" => $request->kecamatan,
            "city_id" => $request->kabupaten_kota,
            "province_id" => $request->provinsi,
            "date_of_join" => $request->anggota_sejak,
            "number_of_garden" => $request->jumlah_kebun,
            "size_of_garden" => $request->luas_kebun,
            "number_of_tree" => $request->jumlah_pohon,
            "weekly_harvest" => $request->hasil_panen_seminggu,
            "ownership_garden" => $request->kepemilikan_kebun,
            "phone" => $request->no_telephone,
            "bank_name" => $request->bank,
            "account_number" => $request->no_rekening,
            "account_name" => $request->nama_rekening,
        ];

        Collector::create($newCollector);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Collector $collector)
    {
        return view(
            'master.collector.show',
            [
                'title' => 'Koletor',
            ]
        );
    }

    function dataDetail($id)
    {
        return view(
            'master.collector.show',
            [
                'title' => 'Detail Koletor',
                "collector" => Collector::find($id),
            ]
        );
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collector $collector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collector $collector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collector $collector)
    {
        //
    }

    public function getCollectorByID($id)
    {
        $collector = Collector::find($id);
        $farmers = $collector->farmers;
        return response()->json([
            "view" => view("components/rubberCollectedTable", [
                "collector" => $collector,
                "farmers" => $farmers,
            ])->render(),
        ]);
    }

    public function addFarmer($id)
    {
        return view("master.collector.add-farmer", [
            "title" => "Tambah Petani",
            "collector" => Collector::find($id),
        ]);
    }

    public function storeFarmer(Request $request, $id)
    {
        $newFarmer = [
            "collector_id" => $request->collector_id,
            "name" => $request->nama,
            "nik" => $request->nik,
            "no_kk" => $request->no_kk,
            "gender" => $request->gender,
            "birth_date" => $request->ttl,
            "village" => $request->desa,
            "sub_district_id" => $request->kelurahan,
            "district_id" => $request->kecamatan,
            "city_id" => $request->kabupaten_kota,
            "province_id" => $request->provinsi,
            "date_of_join" => $request->anggota_sejak,
            "number_of_garden" => $request->jumlah_kebun,
            "size_of_garden" => $request->luas_kebun,
            "number_of_tree" => $request->jumlah_pohon,
            "weekly_harvest" => $request->hasil_panen_seminggu,
            "ownership_garden" => $request->kepemilikan_kebun,
            "phone" => $request->no_telephone,
            "bank_name" => $request->bank,
            "account_number" => $request->no_rekening,
            "account_name" => $request->nama_rekening,
        ];

        Farmer::create($newFarmer);
        return back();
    }
}
