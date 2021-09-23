<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        $categorys = Category::all();

        return view('backOffice.pages.pictures', compact('photos', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('backOffice.partials.pictures.create', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'src' => ['required'],
            'category_id' => ['required'],
        ]);

        $store = new Photo;
        Storage::put('public/img/photos', $request->file('src'));
        $store->src = $request->file('src')->hashName();
        $store->category_id = $request->category_id;
        $store->save();

        return redirect('back-office/photos')->with('Validate', 'photo ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $categorys = Category::all();
        return view('backOffice.partials.pictures.edit', compact('categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'src' => ['required'],
            'category_id' => ['required'],
        ]);

        $update = Photo::find($id);
        $update->category_id = $request->category_id;
        if ($request->src != null) {
            Storage::delete('public/img/photos' . $update->src);
            Storage::put('public/img/photos', $request->file('src'));
            $photo = new Photo;
            $photo->src = $request->file('src')->hashName();
            $photo->save();
            $update->photo_id = $photo->id;
        }
        $update->save();

        return redirect('back-office/photos')->with('Validate', 'photo modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Photo::find($id);
        Storage::delete('public/storage/img/photos' . $destroy->src);
        $destroy->delete();

        return redirect('/back-office/photos');
    }
}
