<?php

namespace App\Http\Controllers;

// use App\Baby;
use App\Baby;
use App\Baby_checkup;
use App\Vaccine;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBaby;
use Illuminate\Support\Facades\Auth;
class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // ログインしているユーザーの赤ちゃんのデータを取ってくる
          $kids = Auth::user()->baby;
          foreach ($kids as $kid){
              $baby = Baby::find($kid['id']);
              $baby_id = $baby->id;
              $birthdate = $baby->birthdate;
              // dd($birthdate);
              $today = strtotime(date("Y/m/d"))/ (60 * 60 * 24);
              // dd($today);
              $birthday = strtotime($birthdate)/ (60 * 60 * 24);
                // 出産後の場合
                  if($today >= $birthday){
                      $age = ($today - $birthday);
                      // dd($age);
                      if($age > 364){
                          $age = '生後:'.floor($age/30/12).'年'.floor($age%30/12).'ヶ月';
                      }elseif($age > 29){
                          $age = '生後:'.floor($age/30).'ヶ月'.($age%30).'日';
                      }else{
                          $age = '生後:'.$age.'日';
                      };
                  // 出産前の場合
                  }else{
                        $age = ($birthday - $today);
                        if($age > 29){
                            $age = 'ご誕生まで:'.floor($age/30).'ヶ月'.($age%30).'日';
                        }else{
                            $age = 'ご誕生まで:'. $age.'日';
                        }
                  }

          }
        //   dd($kid[0]['id']);
          // baby_idを取得（赤ちゃんを一人ずつ設定する前提）
        //   $baby = Baby::find($kid[0]['id']);
        //   dd($baby);
        // ログインしている赤ちゃんの親のid
        //   $user = $baby['user_id'];
        // dd($baby);
        // 生まれる前後での条件分岐


        // ログインしている子どものbaby_id


        $kid = $kid['id'];
        // dd($kid);
        // $vaccines = Baby::find($baby_id)->vaccine->sortByDesc("id")->take(1);
        // $baby_checkups = Baby::find($baby_id)->baby_checkup;
        // dd($baby_checkups);

         return view('babies.index',['kids' => $kids,'age'=>$age,'baby_id'=>$baby_id]);
         // 'vaccines'=>$vaccines, 'baby_checkups'=>$baby_checkups
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
        $baby->user_id = Auth::user()->id;
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
          $baby->user_id = Auth::user()->id;
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

         $baby = Baby::find($id);
         // dd($babies);
         $kids = Auth::user()->baby;
         // dd($kids);
         foreach ($kids as $kid){
             // $baby = Baby::find($id);
             // $baby_id = $baby->id;
             $birthdate = $baby->birthdate;
             // dd($birthdate);
             $today = strtotime(date("Y/m/d"))/ (60 * 60 * 24);
             // dd($today);
             $birthday = strtotime($birthdate)/ (60 * 60 * 24);
               // 出産後の場合
                 if($today >= $birthday){
                     $age = ($today - $birthday);
                     // dd($age);
                     if($age > 364){
                         $age = '生後:'.floor($age/30/12).'年'.floor($age%30/12).'ヶ月';
                     }elseif($age > 29){
                         $age = '生後:'.floor($age/30).'ヶ月'.($age%30).'日';
                     }else{
                         $age = '生後:'.$age.'日';
                     };
                 // 出産前の場合
                 }else{
                       $age = ($birthday - $today);
                       if($age > 29){
                           $age = 'ご誕生まで:'.floor($age/30).'ヶ月'.($age%30).'日';
                       }else{
                           $age = 'ご誕生まで:'. $age.'日';
                       }
                 }
        }

        $vaccines = Baby::find($id)->vaccine->sortByDesc("id")->take(1);
        // $baby_checkups = Baby::find($id)->baby_checkup;
        // dd($baby_checkups);
        return view('babies.show', ['id'=> $id, 'kids' => $kids, 'age' => $age]);
        // 'vaccines' => $vaccines, 'baby_checkups' => $baby_checkups
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
        $baby = Baby::find($id);
        // dd($babies);
        $kids = Auth::user()->baby;
        // dd($kids);
        foreach ($kids as $kid){
            // $baby = Baby::find($id);
            // $baby_id = $baby->id;
            $birthdate = $baby->birthdate;
            // dd($birthdate);
            $today = strtotime(date("Y/m/d"))/ (60 * 60 * 24);
            // dd($today);
            $birthday = strtotime($birthdate)/ (60 * 60 * 24);
              // 出産後の場合
                if($today >= $birthday){
                    $age = ($today - $birthday);
                    // dd($age);
                    if($age > 364){
                        $age = '生後:'.floor($age/30/12).'年'.floor($age%30/12).'ヶ月';
                    }elseif($age > 29){
                        $age = '生後:'.floor($age/30).'ヶ月'.($age%30).'日';
                    }else{
                        $age = '生後:'.$age.'日';
                    };
                // 出産前の場合
                }else{
                      $age = ($birthday - $today);
                      if($age > 29){
                          $age = 'ご誕生まで:'.floor($age/30).'ヶ月'.($age%30).'日';
                      }else{
                          $age = 'ご誕生まで:'. $age.'日';
                      }
                }

        }
        // dd($id);
        // echo dd($babies);

        $vaccines = Baby::find($id)->vaccine->sortByDesc("id")->take(1);
        $baby_checkups = Baby::find($id)->baby_checkup->sortByDesc("id")->take(1);
        return view('babies.index', ['id'=> $id, 'kids' => $kids, 'age' => $age, 'vaccines' => $vaccines, 'baby_checkups' => $baby_checkups]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

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
