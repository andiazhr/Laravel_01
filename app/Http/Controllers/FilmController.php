<?php

namespace App\Http\Controllers;

use App\Film;
use App\KategoriFilm;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        // $film = App\Film::all();

        // foreach ($film as $movie){
        //     echo $movie->name;
        // }
        $movie = Film::when($request->film, function ($query) use ($request) {
            $query->where('judul_film', 'like', "%{$request->film}%");
        })->get();
        return view('Film.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_film = KategoriFilm::all();
        return view('Film.create', compact('kategori_film'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori_film'=> 'required|integer',
            'judul_film' => 'required',
            'sutradara' => 'required',
            'tahun_rilis'=> 'required',
            'sinopsis' => 'required',
            'tanggal_input_data_film' => 'required'
          ]);
          $movie = new Film([
            'id_kategori_film' => $request->get('id_kategori_film'),
            'judul_film'=> $request->get('judul_film'),
            'sutradara'=> $request->get('sutradara'),
            'tahun_rilis' => $request->get('tahun_rilis'),
            'sinopsis'=> $request->get('sinopsis'),
            'tanggal_input_data_film'=> $request->get('tanggal_input_data_film')
          ]);
          $movie->save();
          return redirect('film')->with('success', 'Kategori Film Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_film)
    {
        $movie = Film::find($id_film);
        $kategori_film = KategoriFilm::all();
        return view ('Film.info', compact('movie', 'kategori_film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_film)
    {
        $movie = Film::find($id_film);
        $kategori_film = KategoriFilm::all();
        return view('Film.edit', compact('movie','kategori_film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_film)
    {
        $request->validate([
            'id_kategori_film'=> 'required',
            'judul_film' => 'required',
            'sutradara' => 'required',
            'tahun_rilis'=> 'required',
            'sinopsis' => 'required',
            'tanggal_input_data_film' => 'required'
          ]);
    
          $movie = Film::find($id_film);
          $movie->id_kategori_film = $request->get('id_kategori_film');
          $movie->judul_film = $request->get('judul_film');
          $movie->sutradara = $request->get('sutradara');
          $movie->tahun_rilis = $request->get('tahun_rilis');
          $movie->sinopsis = $request->get('sinopsis');
          $movie->tanggal_input_data_film = $request->get('tanggal_input_data_film');
          $movie->save();
    
          return redirect('film')->with('success', 'Film Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_film)
    {
        $movie = Film::find($id_film);
        $movie->delete();

        return redirect('film')->with('succes', 'Film Terhapus');
    }
}
