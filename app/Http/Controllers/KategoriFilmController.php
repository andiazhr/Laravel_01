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
        return view('Kategori.create');
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
            'nama_kategori'=> 'required',
            'slug' => 'required',
            'tanggal_input_data_kategori' => 'required'
          ]);
          $kategori_film = new KategoriFilm([
            'nama_kategori' => $request->get('nama_kategori'),
            'slug'=> $request->get('slug'),
            'tanggal_input_data_kategori'=> $request->get('tanggal_input_data_kategori')
          ]);
          $kategori_film->save();
          return redirect('kategori')->with('success', 'Kategori Film Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori_film)
    {
        $kategori_film = KategoriFilm::find($id_kategori_film);
        return view('Kategori.info', compact('kategori_film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori_film)
    {
        $kategori_film = KategoriFilm::find($id_kategori_film);

        return view('Kategori.edit', compact('kategori_film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori_film)
    {
        $request->validate([
            'nama_kategori'=> 'required',
            'slug' => 'required',
            'tanggal_input_data_kategori' => 'required'
          ]);
    
          $kategori_film = KategoriFilm::find($id_kategori_film);
          $kategori_film->nama_kategori = $request->get('nama_kategori');
          $kategori_film->slug = $request->get('slug');
          $kategori_film->tanggal_input_data_kategori = $request->get('tanggal_input_data_kategori');
          $kategori_film->save();
    
          return redirect('kategori')->with('success', 'Kategori Film Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori_film)
    {
        $kategori_film = KategoriFilm::find($id_kategori_film);
        $kategori_film->delete();

        return redirect('kategori')->with('succes', 'Kategori Film Terhapus');
    }
}
