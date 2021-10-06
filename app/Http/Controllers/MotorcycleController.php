<?php

namespace App\Http\Controllers;

use App\Models\Motor_type;
use App\Models\Motorcycle;
use App\Models\Motor_colour;
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
        $type = Motor_type::all();
        $colour = Motor_colour::all();
        return view('motorcycle.create',compact('type','colour'));




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
        $motorcycle->motor_type_id = $request->type;
        $motorcycle->motor_colour_id = $request->colour;
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
        $type = Motor_type::all();
        $colour = Motor_colour::all();
        return view('motorcycle.edit',compact('type','colour','motorcycle'));

        //return view('motorcycle.edit',compact('motorcycle'));
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
        $motorcycle->motor_type_id = $request->type;
        $motorcycle->motor_colour_id = $request->colour;
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
