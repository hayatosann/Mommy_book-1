<?php

namespace App\Http\Controllers;
use App\Maternity_checkup;
use Illuminate\Http\Request;

class MommyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maternity_checkups = Maternity_checkup::orderBy('id', 'DESC')->take(1)->get();
        // dd($maternity_checkups);
        return view('babies.mommy', ['maternity_checkups'=> $maternity_checkups]);     
        
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
        //
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
        // $baby = Baby::find($id);
        // return view('mommies.index', ['baby'=>$baby]);
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
        $baby = Baby::find($id);
        // dd($baby)
        $baby->status = '生後';
        $baby->save();
        return redirect()->route('momies.index');
    }
    public function status(){
        $baby = Baby::find($id);
        // dd($baby)
        $baby->status = '生後';
        $baby->save();
        return redirect()->route('momies.index');
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
