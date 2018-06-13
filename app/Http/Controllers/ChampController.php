<?php

namespace App\Http\Controllers;

use App\Champ;
use Illuminate\Http\Request;

class ChampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('champs', array('champs' => Champ::all()->sortBy('name')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('champ_create');
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
          'standing' => 'required|min:3',

      );

      $this->validate($request, $rules);

      $champ = new Champ();
      $champ->name = $data['name'];
      $champ->type = $data['type'];
      $champ->standing = $data['standing'];      
      $champ->save();

      $images = $champ->images();
      if ($request->hasFile('image')) $file = $request->file('image')->move($images['server_path'], $images['image']);

      return redirect()->action('ChampController@show', array($champ->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('champ_show', array('champ' => Champ::findOrFail($id)));
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
      Champ::where('id', '=', $id)->delete();
      return redirect()->action('ChampController@index', array('races' => Champ::all()->sortBy('name')));
    }
}
