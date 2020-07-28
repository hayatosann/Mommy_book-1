<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBaby;
class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babies = Baby::all();

        return view('babies.index',['babies' => $babies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('babies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 入力完了
    public function confirm(Request $request)
    {
        $nickname = $request->nickname;
        // dd($nickname);
        $gender = $request->gender;
        $birthdate = $request->birthdate;
        // dd($data);
        return view('babies.check', compact('nickname', 'gender', 'birthdate'));
        // dd($request);
        // $data = $request->session()->all();
        // dd($data);
        // $nickname = $request->session()->get('nickname');
        // dd($nickname);
        // $baby = new Baby($request->all());
        // 入力フォームの内容をセッションへ保存
        // (name属性, $request->input('name属性の値','値がない時に出力するもの')
        // $request->session()->('name', $request->get('nickname', ''));
        // $request->session()->('name', $request->get('gender', ''));
        // $request->session()->('name', $request->get('birthdate'));
       
    }
    // 確認完了・一人目の子どもの保存処理
    public function store(CreateBaby $request)
    {
        // dd($request);
        $baby = new Baby();
        // $baby = $request->session()->get('name');
        $baby->nickname = $request->nickname;
        $baby->gender = $request->gender;
        $baby->birthdate = $request->birthdate;
        $baby->status = '出産前';
        $baby->user_id = 1;
        $baby->save();

        return redirect()->route('mommies.index');
    }
      //確認完了・ 続けて子どもを登録する際の保存処理
      public function sinbling(Request $request)
      {
          $baby = new Baby();

        //セッションの値を保持
        //   $baby = session()->all();
          $baby->nickname = $request->nickname;
          $baby->gender = $request->gender;
          $baby->birthdate = $request->birthdate;
          $baby->status = '出産前';
          $baby->user_id = 1;
          $baby->save();

          return redirect()->route('babies.create');
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
