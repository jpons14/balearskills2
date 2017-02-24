<?php

namespace App\Http\Controllers\Backend;

use App\Models\Establishment;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        if (count($photos) == 0){
            Session::flash('errorMessage', trans('messages.errors.photos.no.photo'));
        }
        return view('backend.photos.index', [
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establishments = Establishment::all();
        if (count($establishments) == 0){
            Session::flash('errorMessage', trans('messages.errors.establishments.no.establishment'));
        }
        return view('backend.photos.create', [
            'establishments' => $establishments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = false;
        if (!isset($request->establishment) || $request->establishment == ''){
            $error = true;
            $errorMessage = trans('messages.errors.photos.needed.establishment');
        }
        if (!isset($request->name) || $request->name == ''){
            $error = true;
            $errorMessage = trans('messages.errors.photos.needed.name');
        }
        if (!isset($request->route) || $request->route == ''){
            $error = true;
            $errorMessage = trans('messages.errors.photos.needed.route');
        }
        if (!isset($request->alt_text) || $request->alt_text == ''){
            $error = true;
            $errorMessage = trans('messages.errors.photos.needed.altText');
        }
        if ($error){
            return redirect()->route('photos.create')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }
        $photo = new Photo();
        $photo->establishment_id = $request->establishment;
        $photo->name = $request->name;
        $photo->route = $request->route;
        $photo->alt_text = $request->alt_text;
        if (!$photo->save()){
            $errorMessage = trans('messages.errors.photos.couldnt.created');
            return redirect()->route('photos.create')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }
        request()->file('img')->store('restaurants');


        $successMessage = trans('messages.success.photos.created');
        return redirect()->route('photos.show', $photo->id)->with('data',[
            'successMessage' => $successMessage
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        return view('backend.photos.show', [
            'photo' => $photo
        ]);
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
