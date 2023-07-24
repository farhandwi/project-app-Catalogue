<?php

namespace App\Http\Controllers;

use App\Models\Cooperation;
use App\Http\Requests\StoreCooperationRequest;
use App\Http\Requests\UpdateCooperationRequest;

class CooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $cssfilename = "style";
        return view('home', [
            "cooperations" => Cooperation::all(),
            "cssfilename" => $cssfilename
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCooperationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cooperation $cooperation)
    {
        $cssfilename = "style";
        return view('detail',[
            "cooperation" => $cooperation,
            "cssfilename" => $cssfilename
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cooperation $cooperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCooperationRequest $request, Cooperation $cooperation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cooperation $cooperation)
    {
        //
    }
}
