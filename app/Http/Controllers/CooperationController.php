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

        return view('home', [

            "cooperations" => Cooperation::latest()->name(request(['search']))->paginate(7),
            "cssfilename" => 'style',
            "loginstatus" => false

        ]);

    }

    public function adminaccess() {

        return view('home', [

            "cooperations" => Cooperation::latest()->name(request(['search']))->get(),
            "cssfilename" => 'style',
            "loginstatus" => false

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
        return view('detail',[
            "cooperation" => $cooperation->load('country', 'industry', 'organizationtype'),
            "cssfilename" => 'style ',
            "loginstatus" => false
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
