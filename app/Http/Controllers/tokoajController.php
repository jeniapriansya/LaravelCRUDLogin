<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tokoaj;

class tokoajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tokoaj = tokoaj::all();
        return view('web/home', compact('tokoaj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('web/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $namapic = request()->file('foto')->getClientOriginalName();
        request()->foto->move(public_path('image'),$namapic);
        tokoaj::create([
            'namaProduk' => $request->namaProduk,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'foto' => $namapic,
            'ongkos' => $request->ongkos,
        ]);
        return redirect()->route('tokoaj.index')->with('success', 'Seccess added data');
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
        $tokoaj = tokoaj::find($id);
        return view('web/view', ['tokoaj' => $tokoaj]);
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
        $tokoaj = tokoaj::find($id);
        return view('web/edit',['tokoaj' => $tokoaj]);
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
        if (request()->hasFile('foto')) {
              $namapic = request()->file('foto')->getClientOriginalName();
              request()->file('foto')->move(public_path('image'),$namapic);
              $tokoaj = tokoaj::find($id)->update([
                'namaProduk' =>$request->namaProduk,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'deskripsi' => $request->deskripsi,
                'foto' => $namapic,
                'ongkos' => $request->ongkos,
              ]);
        }else{
                $tokoaj = tokoaj::find($id)->update([
                'namaProduk' =>$request->namaProduk,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'deskripsi' => $request->deskripsi,
                'ongkos' => $request->ongkos,
        ]);  
         }
        
        return redirect()->route('tokoaj.index')->with('success', 'Seccess editted data');

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
        tokoaj::find($id)->delete();
        return redirect()->route('tokoaj.index')->with('success', 'Seccess delete data');
    }

}
