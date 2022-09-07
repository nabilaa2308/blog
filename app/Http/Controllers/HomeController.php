<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function listKategori()
    {
        $kategoris = Kategori::all();
        return view('kategori', compact('kategoris'));
    }
}
