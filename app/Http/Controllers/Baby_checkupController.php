<?php

namespace App\Http\Controllers;

use App\Baby_checkup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Baby_checkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baby_checkups = Baby_checkup::all();
        // dd($maternity_checkups);
        return view('baby_checkups.index', ['baby_checkups'=> $baby_checkups]);
        // return view('momcheckups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baby_checkups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $baby_checkup = new Baby_checkup();

        $baby_checkup->date = $request->date;
        $baby_checkup->weight = $request->weight;
        $baby_checkup->height = $request->height;
        $baby_checkup->chest = $request->chest;
        $baby_checkup->head = $request->head;
        $baby_checkup->nutritional_status = $request->nutritional_status;
        $baby_checkup->food = $request->food;
        $baby_checkup->eyes_disease = $request->eyes_disease;
        $baby_checkup->ears_disease = $request->ears_disease;
        $baby_checkup->baby_id = 1;
        $baby_checkup->save();

        return redirect('baby_checkups');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
