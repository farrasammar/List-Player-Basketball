<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPlayer = Player::all();
        return view('Player.Data-player', compact('dtPlayer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Player.Create-player');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Player::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'posisi' => $request->posisi,
            'alamat' => $request->alamat,
            'asalsekolah' => $request->asalsekolah,
        ]);

        return redirect('data-player');
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
    public function edit($id)
    {
        $play = Player::findorfail($id);
        return view('Player.Edit-player', compact('play'));
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
        $play = Player::findorfail($id);
        $play->update($request->all());
        return redirect('data-player');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $play = Player::findorfail($id);
        $play->delete();
        return back();
    }
}