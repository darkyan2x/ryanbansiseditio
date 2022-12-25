<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::get();
        
        return response()->json([
            'status' => true,
            'facilities' => $facilities,
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip' => ['integer'],
            'address' => ['required', 'string', 'max:255'],
        ]);
        
        $facilities = Facility::create($request->all());
        
        return response()->json([
            'status' => true,
            'message' => 'Facility successfully created!',
         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::find($id);
        return view('facilities.edit', ['facility' => $facility]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip' => ['integer'],
            'address' => ['required', 'string', 'max:255'],
        ]);
        $facility = Facility::find($id);
        $facility->update($request->all());
        
        return response()->json([
            'status' => true,
            'message' => 'Facility successfully updated!',
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $facility = Facility::find($id);
        $facility->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Facility successfully deleted!',
         ]);
    }

}
