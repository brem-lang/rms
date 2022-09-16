<?php

namespace App\Http\Controllers;

use App\Models\Memorandum;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

class MemorandumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request){
            
            $this->storeData = Memorandum::create([
                'user_id'                   => auth()->user()->id,
                'created_by'                => auth()->user()->name,
                'document_series_no'        => $request->document_series_no,
                'id_no'                     => $request->id_no,
                'name_of_employee'          => $request->name_of_employee,
                'department'                => $request->department,
                'section'                   => $request->section,
                'asset_code'                => $request->asset_code,
                'asset_type'                => $request->asset_type,
                'asset_description'         => $request->asset_description,
                'asset_serial_no'           => $request->asset_serial_no,
                'asset_value'               => $request->asset_value,
                'prepared_by'               => $request->prepared_by,
                'approved_by'               => $request->approved_by,
                'released_by'               => $request->released_by,
                'checked_by'                => $request->checked_by,
                'noted_by'                  => $request->noted_by,
            ]);
        }, 1);

        return to_route('create.memorandum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $memorandum = Memorandum::where('id', $request->id)->first();
        $customPaper = array(0,0,567.00,283.80);
        $pdf = PDF::loadView('livewire.memorandums.pdf', compact('memorandum'))->setPaper($customPaper, 'portrait');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function edit(Memorandum $memorandum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memorandum $memorandum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memorandum $memorandum)
    {
        //
    }

    public function generatePDF(Request $request)
    {
        $memorandum = Memorandum::where('id', $request->id)->first();

        $customPaper = array(0,0,567.00,283.80);

        $pdf = PDF::loadView('livewire.memorandums.pdf', compact('memorandum'))->setPaper($customPaper, 'portrait');
        return $pdf->download($memorandum->document_series_no.'.pdf');
    }
}
