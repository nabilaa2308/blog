<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use LDAP\Result;
use illuminate\Support\Str;

class DashboardKategoriController extends Controller
{

    private $path = 'thumbnails';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $kategoris = kategori::all();
        return view('dashboard.kategori.index', [
            'title' => 'Kategori',
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori.create', [
            'title' => 'Kategori - Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = Kategori::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'thumbnail' => parse_url($request->thumbnail)['path'],
        ]);
        Alert::success('Success', 'Kategori Berhasil Ditambahkan!');
        return redirect()->route('kategori.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        return view('dashboard.kategori.detail', [
            'title' => 'Kategori - Detail',
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategoris, $id)
    {
        $kategoris = kategori::find($id);
        return view('dashboard.kategori.edit', [
            'title' => 'Kategori - Edit',
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $kategori)
    {
        $kategori->update([
            'name' => $request->name,
            'slug' => str::slug($request->name, '-'),
            'thumbnail' => parse_url($request->thumbnail)['path'],
        ]);
        Alert::success('Success', 'Kategori Berhasil Diupdate!');
        return redirect('/dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori)
    {
        $kategori->delete();
        Alert::success('Success', 'Kategori Berhasil Dihapus!');
        return redirect('/dashboard/kategori');
    }

    public function kategorihome(kategori $kategoris)
    {
        $kategoris = kategori::all();
        return view('kategori', compact('kategoris'));
    }
}
