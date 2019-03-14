<?php

namespace App\Http\Controllers;

use App\KategoriFilm;

use Illuminate\Http\Request;

class KategoriFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $kategori_film = KategoriFilm::when($request->kategori, function ($query) use ($request) {
            $query->where('nama_kategori', 'like', "%{$request->kategori}%");
        })->get();
        return view('Kategori.index', compact('kategori_film'));
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
        //
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

    public function paginate(\Illuminate\Http\Request $request)
    {
        $kategori_film = KategoriFilm::when($request->keyword, function ($query) use ($request) {
            $query->where('nama_kategori', 'like', "%{$request->keyword}%");
        })->get();
        return view('Kategori.index', compact('kategori_film'));
    }
}
