<?php

namespace App\Http\Controllers;

use App\Models\Collector;
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
                'title' => 'Anggota',
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Collector $collector)
    {
        return view(
            'master.collector.show',
            [
                'title' => 'Anggota',
            ]
        );
    }

    function dataDetail($id)
    {
        return view(
            'master.collector.show',
            [
                'title' => 'Anggota',
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

    public function addFarmer($id)
    {
        return view("master.collector.add-farmer", [
            "title" => "Tambah Petani",
        ]);
    }
}
