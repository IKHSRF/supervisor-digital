<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = Laporan::latest()->paginate(5);

        return view('laporans.index', compact('laporans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::pluck('nama_guru', 'id');
        return view('laporans.create', compact('guru'));
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
            'id_guru' => 'required',
            'rpp' => 'required',
            'tanggal' => 'required',
        ]);

        Laporan::create($request->all());

        return redirect()->route('laporans.index')
            ->with('success', 'Laporan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        $guru = Guru::pluck('nama_guru', 'id');
        return view('laporans.show', compact('laporan', 'guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        return view('laporans.edit', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'id_guru' => 'required',
            'rpp' => 'required',
            'tanggal' => 'required',
        ]);

        $laporan->update($request->all());

        return redirect()->route('laporans.index')
            ->with('success', 'Laporan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('laporans.index')
            ->with('success', 'Laporan deleted successfully');
    }
}
