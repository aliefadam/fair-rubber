<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use App\Models\RubberCollected;
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
            ]
        );
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
}
