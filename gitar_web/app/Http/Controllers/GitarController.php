<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;
use App\Gitar;
use App\Sample;

class GitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gitar = Gitar::all();
        $sampel = Sample::where('file','!=','none')->get();
        return view('gitar.index', compact(['gitar','sampel'])); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gitar = Gitar::find($id)->toArray();
        // dd($gitar['nama']);
        return view('gitar.detail', ['gitar'=> $gitar]);
        //
    }

}
