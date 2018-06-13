<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Race;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photos', array('photos' => Photo::all()->sortBy('name')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('photo_create', array('races' => Race::all()->sortBy('name')->pluck('name', 'id')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      $rules = $rules = array(
          'name' => 'required|min:3|max:191',
          'date' => 'required|date|after_or_equal:today',
          'description' => 'required|min:3|max:191',
          'race_id' => 'required|exists:races,id',
      );

      $this->validate($request, $rules);

      $photo = new Photo();
      $photo->name = $data['name'];
      $photo->date = $data['date'];
      $photo->description = $data['description'];
      $photo->race()->associate(Race::find($data['race_id']));
      $photo->save();

      $images = $photo->images();
      if ($request->hasFile('image')) $file = $request->file('image')->move($images['server_path'], $images['image']);

      return redirect()->action('PhotoController@index', array($photo->id));
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
         Photo::where('id', '=', $id)->delete();
         return redirect()->action('PhotoController@index', array('photos' => Photo::all()->sortBy('name')));
     }
}
