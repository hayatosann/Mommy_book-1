<?php

namespace App\Http\Controllers;

use App\Album;
use App\Baby;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// cloudinaryにアップロードするために必要
use JD\Cloudder\Facades\Cloudder;

// update機能
// use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Input;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $user_id)
    {
        // dd($id);
        $user_id = Baby::find($id)->user_id;
        // $user_id = $baby_id->user_id;
        // ($babies);
        $albums = Auth::user($user_id)->album;
        // dd($albums);
        return view('albums.index', ['id'=>$id, 'user_id'=>$user_id, 'albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $user_id)
    {
        return view('albums.create', ['id'=>$id, 'user_id'=>$user_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $user_id)
    {
        // dd($request);

        // dd($request);
        $album = new Album();
        // $album = Auth::user($user_id)->album;
        // dd($album);
        // $user_id = Baby::find($id)->user_id;
        // dd($album);
        $album->user_id = $user_id;
        // dd($album->user_id);
        // $album->img = $request->img;
        if($image = $request->file('image')){
            // dd($image);
            $img = $image->getRealPath();
            Cloudder::upload($img, null);
            // 直前にアップロードされた画像のpubicIdを取得
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId,[
                'width' => 400,
                'height' => 300,
            ]);
            $album->img = $logoUrl;
            $album->public_id = $publicId;
        }
        $album->record = $request->record;
        $album->date = $request->date;
        $album->save();
        // $id = Auth::user($user_id);
        return redirect()->route('babies.mommies.albums.index', ['id'=>$id, 'user_id'=>$user_id]);
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
    public function edit(int $id, $user_id, $album_id)
    {
        $album = Album::find($album_id);
        // dd($album);
        return view('albums.edit', ['album' => $album, 'album_id' => $album_id, 'id'=>$id, 'user_id'=>$user_id]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $user_id, $album_id)
    {
        // dd($album_id);
        $album = Album::find($album_id);
        // 保存
        if($image = $request->file('image')){
            $img = $image->getRealPath();
            // ??
            Cloudder::upload($img, null);
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::show($publicId, [
                'width' => 400,
                'height' => 300,
            ]);
            $album->img = $logoUrl;
            $album->public_id = $publicId;
        }
        $album->date = $request->date;
        $album->record = $request->record;
        $album->user_id = $user_id;
        $album->save();
        return redirect()->route('babies.mommies.albums.index', ['id'=>$id, 'user_id'=>$user_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id, $user_id, $album_id)
    {
        $album = Album::find($album_id);
        if(isset($album->public_id)){
            Cloudder::destroyImage($album->public_id);
        }
        $album->delete();
        return redirect()->route('babies.mommies.albums.index', ['id'=>$id, 'user_id'=>$user_id]);


    }
}
