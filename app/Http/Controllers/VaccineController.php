<?php

namespace App\Http\Controllers;

use App\Vaccine;
use App\Baby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vaccines = Baby::find($id)->vaccines;
        return view('vaccines.index', ['vaccines'=> $vaccines, 'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('vaccines.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $vaccine = new Vaccine();
        $vaccine->name = $request->name;
        $vaccine->shot_date = $request->shot_date;
        $vaccine->shot_place = 'abc';
        $vaccine->physician_sign = $request->physician_sign;
        $vaccine->react = $request->react;
        $vaccine->result = $request->result;
        $vaccine->hospital_name = $request->hospital_name;
        $vaccine->manufacture_lot = $request->manufacture_lot;
        $vaccine->remarks = $request->remarks;
        $vaccine->baby_id = $id;
        $vaccine->save();
        return redirect()->route('babies.vaccines.index', $id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $vaccine_id)
    {
        $vaccine = Vaccine::find($vaccine_id);

        return view('vaccines.edit', ['vaccine' => $vaccine, 'id' => $id, 'vaccine_id' => $vaccine_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $vaccine_id)
    {
        $vaccine = Vaccine::find($vaccine_id);
        $vaccine->name = $request->name;
        $vaccine->shot_date = $request->shot_date;
        $vaccine->shot_place = 'abc';
        $vaccine->physician_sign = $request->physician_sign;
        $vaccine->react = $request->react;
        $vaccine->result = $request->result;
        $vaccine->hospital_name = $request->hospital_name;
        $vaccine->manufacture_lot = $request->manufacture_lot;
        $vaccine->remarks = $request->remarks;
        $vaccine->baby_id = $id;
        $vaccine->save();

        return redirect()->route('babies.vaccines.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $vaccine_id)
    {
        $vaccine = Vaccine::find($vaccine_id);
        $vaccine->delete();

        return redirect()->route('babies.vaccines.index', $id);
    }
}
