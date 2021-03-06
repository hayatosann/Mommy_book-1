<?php

namespace App\Http\Controllers;

use App\Maternity_checkup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Maternity_checkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        // dd($user_id);
        $maternity_checkups = Auth::user($user_id)->maternity_checkup;
        // dd($maternity_checkups);
        return view('maternity_checkups.index', ['user_id'=> $user_id, 'maternity_checkups'=> $maternity_checkups]);
        // return view('momcheckups');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view('maternity_checkups.create',['user_id'=>$user_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        // dd($user_id);
        $maternity_checkup = new Maternity_checkup();

        $maternity_checkup->date = $request->date;
        $maternity_checkup->pregnancy_week = $request->pregnancy_week;
        $maternity_checkup->fundal_height = $request->fundal_height;
        $maternity_checkup->weight = $request->weight;
        $maternity_checkup->abdominal_circumference = $request->abdominal_circumference;
        $maternity_checkup->blood_pressure = $request->blood_pressure;
        $maternity_checkup->edema = $request->edema;
        $maternity_checkup->urinal_protein = $request->urinal_protein;
        $maternity_checkup->urinal_sugar = $request->urinal_sugar;
        $maternity_checkup->note = $request->note;
        $maternity_checkup->user_id = $user_id;
        $maternity_checkup->save();

        return redirect()->route('mommies.maternity_checkups.index', $user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id, $id)
    {
        $maternity_checkup = Maternity_checkup::find($id);

        return view('maternity_checkups.edit', ['id'=>$id, 'user_id'=>$user_id, 'maternity_checkup'=>$maternity_checkup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $id)
    {
        //
        $maternity_checkup = Maternity_checkup::find($id);

        $maternity_checkup->date = $request->date;
        $maternity_checkup->pregnancy_week = $request->pregnancy_week;
        $maternity_checkup->fundal_height = $request->fundal_height;
        $maternity_checkup->weight = $request->weight;
        $maternity_checkup->abdominal_circumference = $request->abdominal_circumference;
        $maternity_checkup->blood_pressure = $request->blood_pressure;
        $maternity_checkup->edema = $request->edema;
        $maternity_checkup->urinal_protein = $request->urinal_protein;
        $maternity_checkup->urinal_sugar = $request->urinal_sugar;
        $maternity_checkup->note = $request->note;
        $maternity_checkup->user_id = $user_id;
        $maternity_checkup->save(); //DBに保存

    return redirect()->route('mommies.maternity_checkups.index', $user_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $id)
    {
        // // Maternity_checkupモデルを使用し、maternity_checkupsテーブルから$idと
        // // 一致するidを持つデータを取得
        $maternity_checkup = Maternity_checkup::find($id);
        // dd($maternity_checkup);
        $maternity_checkup->delete();

         return redirect()->route('mommies.maternity_checkups.index', $user_id);


    }
}
