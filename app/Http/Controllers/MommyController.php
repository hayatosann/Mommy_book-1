<?php

namespace App\Http\Controllers;
use App\Maternity_checkup;
use App\Baby;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
        // $babies = Baby::all();
        // dd($babies);
        $btn = '生まれたよ';

        // ログインしているユーザーの妊婦健診のデータを取ってくる
        $maternity_checkups = Auth::user()->maternity_checkup;
        // 上で取っきたデータを降順にして、最新の１件を表示
        $maternity_checkups = $maternity_checkups->sortByDesc("id")->take(1);

        // ログインしているユーザーの赤ちゃんのデータを取ってくる
        $baby = Auth::user()->baby;
        // dd($baby);
        // baby_idを取得（赤ちゃんを一人ずつ設定する前提）
        // $baby = Baby::find($baby[0]['id']);
        // dd($baby);
        // $newbaby = array_pop($baby);
        $baby = $baby->sortByDesc('id')->first();
        $birthdate = $baby['birthdate'];
        // dd($birthdate);
        
        // 今日の日付
        $today = Carbon::today();
        // 予定日
        $birthday = Carbon::parse($birthdate);
        // 妊娠日(予定日-280日)
        $expected = $birthday->subDay(280);
        // 妊娠○日目
        $day = $today->diffInDays($expected);
        // 妊娠○週目
        $week = floor($day/30*4);
        if($day < 30){
            $month = '妊娠 0ヶ月';
            $week = '妊娠 '.floor($week).'週目';
        }elseif($baby->status == "生後"){
            $btn = "元に戻す";
            $month ='出産おめでとう';
                $birthdate = $baby->birthdate;
                $today = strtotime(date("Y/m/d"))/ (60 * 60 * 24);
                $birthday = strtotime($birthdate)/ (60 * 60 * 24);
                if($today >= $birthday){
                    $age = ($today - $birthday);
                    if($age > 364){
                        $week = '赤ちゃん生後:'.floor($age/30/12).'年'.floor($age%30/12).'ヶ月';
                    }elseif($age > 29){
                        $week = '赤ちゃん生後:'.floor($age/30).'ヶ月'.($age%30).'日';
                    }else{
                        $week ='赤ちゃん生後:'.$age.'日';
                    };
                };
        }elseif($day >= 30){
            $month = '妊娠 '.floor($day/30).'ヶ月';
            $week  = '妊娠 '.floor($week).'週目';
        };

        $id = Auth::user()->baby->sortByDesc("id")->take(1)->first()['id'];

        // dd($maternity_checkups);
        return view('babies.mommy', ['maternity_checkups'=> $maternity_checkups, 'month' => $month, 'week' => $week, 'btn' => $btn, 'baby'=>$baby, 'id'=> $id]);

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
        if($baby->status == '生後'){
            $baby->status = '出産前';
        }else{
            $baby->status = '生後';
        }
        $baby->save();

        return redirect()->route('mommies.index', compact('baby'));
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
