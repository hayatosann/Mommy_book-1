<?php

namespace App\Http\Controllers;

use App\Baby_checkup;
use App\Baby_tooth;

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
        $baby_tooths = Baby_tooth::all();
        // dd($baby_tooths);
        // $baby_checkups = Baby_checkup::find(1)->baby_tooth->teeth_decay;
        // $baby_tooths = Baby_tooth::find(1)->baby_checkup();
        
        
        return view('baby_checkups.index', ['baby_checkups'=> $baby_checkups, 'baby_tooths' => $baby_tooths]);
        
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
        $baby_checkup->baby_id = 1;
        $baby_tooth->baby_checkup_id = 1;
        $baby_checkup->save();
        $baby_tooth->save();

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
        $baby_checkup = Baby_checkup::find($id); 
        // dd($baby_checkup);

        return view('baby_checkups.edit', ['baby_checkups' => $baby_checkup->$id]);
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
        // $baby_checkup = Baby_checkup::find($id);

        

        return redirect('baby_checkups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baby_checkup = baby_checkup::find($id);
        // // dd($id);
        $baby_checkup->delete();

         return redirect('baby_checkups');
    }
}
