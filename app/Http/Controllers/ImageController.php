<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        array_map(function ($f) {
            return \Storage::disk('public/images')->url($f);
        }, \Storage::disk('public')->files());
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

        return(dd($request));
        if (request()->hasFile('image')){
            request()->validate([
                'image' => 'file|image|max:5000',

            ]);
            $image = request()->image;
            $newImage = Image::create([
                'product_id' => $request->product_id,
                'name'=>'a',
                'path' => '/images',
                'extension' => $image->getClientOriginalExtension(),
                'position' => '1',
            ]);
            $newid = $newImage->id;

            $newImage->name=$newid;
            $path='/images'.'/'.$newImage->name.'.'.$newImage->extension;
            Storage::disk('public')->putFileAs($newImage->path, $image, $newImage->name.'.'.$newImage->extension);
            return Storage::disk('public')->download($path);

        }else{
            return response()->json([
                "error"=> "Le fichier que vous avez envoyé n'est pas une image ou est trop gros."
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        $path= $image->path.$image->name.'.'.$image->extension;
        return Storage::disk('public')->download($path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
