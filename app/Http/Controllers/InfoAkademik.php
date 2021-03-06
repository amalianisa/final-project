<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfoAkademik extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $info = DB::table('info_akademik')->get();
        $info = Info::all();
        return view('infoAkademik.info', ['judul' => 'Info Akademik', 'info' => $info]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infoAkademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Info::create($request->all());
        return redirect('/info');
        // $info = new info;
        // $info->judul_info = $request->judul_info;
        // $info->isi_info = $request->isi_info;
    
        // $info->save();

        // return redirect('/info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        return view('infoAkademik.detail', ['detail' => 'Detail Info','info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        return view('infoAkademik.edit', ['info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $info::where('id', $info->id)
        ->update([
            'judul_info' => $request->judul_info,
            'isi_info' => $request->isi_info
        ]);
        return redirect('/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        Info::destroy($info->id);
        return redirect('/info');
    }
}
