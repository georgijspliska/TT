<?php

namespace App\Http\Controllers;

use App\Race;
use App\Track;
use App\Champ;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('races', array('races' => Race::all()->sortBy('name')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('race_create', array('tracks' => Track::all()->sortBy('name')->pluck('name', 'id'),
                                          'champs' => Champ::all()->sortBy('name')->pluck('name', 'id')));
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
          'track_id' => 'required|exists:tracks,id',
          'Nm' => 'required|numeric|min:0|max:100',
          'champ_id' => 'required|exists:champs,id',
      );

      $this->validate($request, $rules);

      $race = new Race();
      $race->name = $data['name'];
      $race->date = $data['date'];
      $race->track()->associate(Track::find($data['track_id']));
      $race->Nm = $data['Nm'];
      $race->champ()->associate(Champ::find($data['champ_id']));
      $race->save();

      return redirect()->action('RaceController@show', array($race->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('race_show', array('race' => Race::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
        Race::where('id', '=', $id)->delete();
        return redirect()->action('RaceController@index', array('races' => Race::all()->sortBy('name')));
    }
    // AJAX search
    public function postSearch(Request $request) {
        return Race::where('name', 'LIKE', '%'.$request->get('search').'%')->get();
    }
}
