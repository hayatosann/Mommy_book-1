<?php

namespace App\Http\Controllers;

use App\Baby_checkup;
use App\Baby_tooth;
use App\Baby;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Baby_checkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $baby_checkups = Baby::find($id)->baby_checkups;
        return view('baby_checkups.index', ['baby_checkups'=> $baby_checkups, 'id' => $id]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('baby_checkups.create', ['id'=> $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($id);
        $baby_checkup = new Baby_checkup();
        $baby_tooth = new Baby_tooth();

        $baby_checkup->date = $request->date;
        $baby_checkup->weight = $request->weight;
        $baby_checkup->height = $request->height;
        $baby_checkup->chest = $request->chest;
        $baby_checkup->head = $request->head;
        $baby_checkup->nutritional_status = $request->nutritional_status;
        $baby_checkup->food = '母乳';
        $baby_checkup->eyes_disease = $request->eyes_disease;
        $baby_checkup->ears_disease = $request->ears_disease;
        $baby_tooth->teeth_decay = $request->teeth_decay;
        $baby_tooth->clearness = $request->clearness;
        $baby_tooth->gingival_mucous = $request->gingival_mucous;
        $baby_tooth->teeth_allignment = $request->teeth_allignment;
        $baby_tooth->oral_disease = $request->oral_disease;
        $baby_tooth->replaced_teeth = $request->replaced_teeth;
        $baby_checkup->checkups = $request->checkups;
        $baby_checkup->guidance = $request->guidance;
        $baby_checkup->supervisor_name = $request->supervisor_name;
        $baby_checkup->baby_id = $id;
        $baby_checkup->save();
        $date = Baby_checkup::orderBy('id', 'desc')->take(1)->get();
        $baby_tooth->baby_checkup_id = $date[0]['id'];
        $baby_tooth->save();


        // return redirect('babies.baby_checkups');
        return redirect()->route('babies.baby_checkups.index', $id);
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
    public function edit($id, $baby_checkup_id)
    {
        $baby_checkup = Baby_checkup::find($baby_checkup_id);

        return view('baby_checkups.edit', ['baby_checkup' => $baby_checkup, 'id' => $id, 'baby_checkup_id' => $baby_checkup_id ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $baby_checkup_id)
    {

        $baby_checkup = Baby_checkup::find($baby_checkup_id);
        $baby_tooth = Baby_checkup::find($baby_checkup_id)->baby_tooth;
        $baby_checkup->date = $request->date;
        $baby_checkup->weight = $request->weight;
        $baby_checkup->height = $request->height;
        $baby_checkup->chest = $request->chest;
        $baby_checkup->head = $request->head;
        $baby_checkup->nutritional_status = $request->nutritional_status;
        $baby_checkup->food = '母乳';
        $baby_checkup->eyes_disease = $request->eyes_disease;
        $baby_checkup->ears_disease = $request->ears_disease;
        $baby_checkup->baby_tooth->teeth_decay = $request->teeth_decay;
        $baby_tooth->clearness = $request->clearness;
        $baby_tooth->gingival_mucous = $request->gingival_mucous;
        $baby_tooth->teeth_allignment = $request->teeth_allignment;
        $baby_tooth->oral_disease = $request->oral_disease;
        $baby_tooth->replaced_teeth = $request->replaced_teeth;
        $baby_checkup->checkups = $request->checkups;
        $baby_checkup->guidance = $request->guidance;
        $baby_checkup->supervisor_name = $request->supervisor_name;
        $baby_checkup->baby_id = $id;
        $baby_checkup->save();
        $date = Baby_checkup::orderBy('id', 'desc')->take(1)->get();
        $baby_tooth->baby_checkup_id = $baby_checkup_id;
        $baby_tooth->save();

        return redirect()->route('babies.baby_checkups.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $baby_checkup_id)
    {
        // dd($baby_checkup_id);
        $baby_checkup = Baby_checkup::find($baby_checkup_id);
        // dd($baby_checkup);
        $baby_tooth = Baby_checkup::find($baby_checkup_id)->baby_tooth;
        $baby_tooth->delete();
        $baby_checkup->delete();


         return redirect()->route('babies.baby_checkups.index', $id);
    }
}
