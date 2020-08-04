<?php

namespace App\Http\Controllers;

use App\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        // $vaccines = Vaccine::all();

        // dd($vaccines);
        return view('vaccines.index', ['users', $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $vaccine->baby_id = 1;
        $vaccine->save();

        return redirect('vaccines');

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
    public function edit($id)
    {
        // dd($id);
        $vaccine = Vaccine::find($id);

        return view('vaccines.edit', ['vaccine' => $vaccine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vaccine = Vaccine::find($id);

        $vaccine->name = $request->name;
        $vaccine->shot_date = $request->shot_date;
        $vaccine->shot_place = 'abc';
        $vaccine->physician_sign = $request->physician_sign;
        $vaccine->react = $request->react;
        $vaccine->result = $request->result;
        $vaccine->hospital_name = $request->hospital_name;
        $vaccine->manufacture_lot = $request->manufacture_lot;
        $vaccine->remarks = $request->remarks;
        $vaccine->baby_id = 1;
        $vaccine->save();
        // dd($vaccine);

        return redirect('vaccines');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = Vaccine::find($id);
        // dd($vaccine);
        $vaccine->delete();

        return redirect('vaccines');
    }
}
