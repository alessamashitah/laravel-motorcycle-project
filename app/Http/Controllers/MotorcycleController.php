<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorcycle = Motorcycle::all();

        return view('motorcycle.index',compact('motorcycle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motorcycle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //STORE GUNA RELATIONSHIP
        $motorcycle = new Motorcycle();
        $motorcycle->type = $request->type;
        $motorcycle->colour = $request->colour;
        $motorcycle->save();

        return redirect()->route('motorcycleindex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New motorcycle has been added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(motorcycle $motorcycle)
    {
        return view('motorcycle.edit',compact('motorcycle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, motorcycle $motorcycle)
    {
        $motorcycle->type = $request->type;
        $motorcycle->colour = $request->colour;
        $motorcycle->save();

        return redirect()->route('motorcycleindex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New motorcycle has been updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(motorcycle $motorcycle)
    {
        $motorcycle->delete();

        return redirect()->route('motorcycleindex')->with([
            'alert-type' => 'alert-danger',
            'alert-message'=> 'New motorcycle has been deleted'
        ]);
    }
}
