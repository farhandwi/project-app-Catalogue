<?php

namespace App\Http\Controllers;

use App\Models\OrganizationType;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrganizationTypeRequest;

class OrganizationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createcategories', [
            "cssfilename" => 'style',
            "url" => "/organizationtype",
            "label" => "Organization Type"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25'
        ]);

        OrganizationType::create($validatedData);
        return redirect('/dashboard/cooperations')->with('success', 'New Organization Type has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrganizationType $organizationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrganizationType $organizationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationTypeRequest $request, OrganizationType $organizationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrganizationType $organizationType)
    {
        //
    }
}
