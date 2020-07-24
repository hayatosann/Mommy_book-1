<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Contracts\Filesystem\Cloud;
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
    public function index()
    {
        $albums = Album::all();
        // dd($albums);
        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
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
        $album = new Album();
        $album->user_id = 1;
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

        return redirect()->route('albums.index');
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
    public function edit(int $id)
    {
        // dd($id);
        $album = Album::find($id);

        return view('albums.edit', ['album' => $album]);

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
        $album = Album::find($id);
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
        $album->save();

        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $album = Album::find($id);
        if(isset($album->public_id)){
            Cloudder::destroyImage($album->public_id);
        }
        $album->delete();
        return redirect()->route('albums.index');


    }
}
