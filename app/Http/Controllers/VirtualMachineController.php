<?php

namespace App\Http\Controllers;

use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class VirtualMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/virtual_machine/index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VirtualMachine $virtualMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VirtualMachine $virtualMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VirtualMachine $virtualMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VirtualMachine $virtualMachine)
    {
        //
    }
}
