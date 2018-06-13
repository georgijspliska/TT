<?php

namespace App\Http\Controllers;

use App\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tracks', array('tracks' => Track::all()->sortBy('name')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track_create');
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
          'type' => 'required|min:3|max:191',
          'location' => 'required|min:3|max:191',
          'lenght' => 'required|numeric|min:0|max:100',
          'turns' => 'required|numeric|min:0|max:100',
          'record' => 'required|min:3|max:191',
      );

      $this->validate($request, $rules);

      $track = new Track();
      $track->name = $data['name'];
      $track->type = $data['type'];
      $track->location = $data['location'];
      $track->lenght = $data['lenght'];
      $track->turns = $data['turns'];
      $track->record = $data['record'];
      $track->save();

      $images = $track->images();
      if ($request->hasFile('image')) $file = $request->file('image')->move($images['server_path'], $images['image']);

      return redirect()->action('TrackController@show', array($track->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('track_show', array('track' => Track::findOrFail($id)));
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
      Track::where('id', '=', $id)->delete();
      return redirect()->action('TrackController@index', array('races' => Track::all()->sortBy('name')));
    }
}
