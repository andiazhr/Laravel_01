<?php

namespace App\Http\Controllers;

use App\TransaksiPeminjaman;
use App\Film;

use Illuminate\Http\Request;

class TransaksiPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $transaksi = TransaksiPeminjaman::when($request->transaksi, function ($query) use ($request) {
            $query->where('nama_peminjam', 'like', "%{$request->transaksi}%");
        })->get();
        return view('Transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movie = Film::all();
        return view('Transaksi.create', compact('movie'));
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
            'id_film'=> 'required|integer',
            'nama_peminjam' => 'required',
            'no_ktp' => 'required',
            'foto_ktp'=> 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'harga_sewa'=> 'required',
            'status' => 'required',
            'tanggal_input_data_peminjaman' => 'required'
          ]);
          $transaksi = new TransaksiPeminjaman([
            'id_film' => $request->get('id_film'),
            'nama_peminjam'=> $request->get('nama_peminjam'),
            'no_ktp'=> $request->get('no_ktp'),
            'foto_ktp' => $request->get('foto_ktp'),
            'tanggal_pinjam'=> $request->get('tanggal_pinjam'),
            'tanggal_kembali'=> $request->get('tanggal_kembali'),
            'harga_sewa' => $request->get('harga_sewa'),
            'status'=> $request->get('status'),
            'tanggal_input_data_peminjaman'=> $request->get('tanggal_input_data_peminjaman')
          ]);
          $transaksi->save();
          return redirect('kategori')->with('success', 'Kategori Film Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi)
    {
        $transaksi = TransaksiPeminjaman::find($id_transaksi);
        $movie = Film::all();
        return view ('Transaksi.info', compact('transaksi','movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_transaksi)
    {
        $transaksi = TransaksiPeminjaman::find($id_transaksi);
        $movie = Film::all();
        $stat=$transaksi['status'];
        return view('Transaksi.edit', compact('transaksi', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        $request->validate([
            'id_film'=> 'required|integer',
            'nama_peminjam' => 'required',
            'no_ktp' => 'required',
            'foto_ktp'=> 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'harga_sewa'=> 'required',
            'status' => 'required',
            'tanggal_input_data_peminjaman' => 'required'
          ]);
    
          $transaksi = TransaksiPeminjaman::find($id_transaksi);
          $transaksi->id_film = $request->get('id_film');
          $transaksi->nama_peminjam = $request->get('nama_peminjam');
          $transaksi->no_ktp = $request->get('no_ktp');
          $transaksi->foto_ktp = $request->get('foto_ktp');
          $transaksi->tanggal_pinjam = $request->get('tanggal_pinjam');
          $transaksi->tanggal_kembali = $request->get('tanggal_kembali');
          $transaksi->harga_sewa = $request->get('harga_sewa');
          $transaksi->status = $request->get('status');
          $transaksi->tanggal_input_data_peminjaman = $request->get('tanggal_input_data_peminjaman');
          $transaksi->save();
    
          return redirect('transaksi_peminjaman')->with('success', 'Transaksi Peminjaman Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $transaksi = TransaksiPeminjaman::find($id_transaksi);
        $transaksi->delete();

        return redirect('transaksi_peminjaman')->with('succes', 'Transaksi Peminjaman Terhapus');
    }
}
