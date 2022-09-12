<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('dashboard.tag.index', compact('tags'));
    }


    public function select(Request $request)
    {
        $tags = [];
        if ($request->has('q')){
            $tags = Tag::select('id','name')->search($request->q)->get();
        } else {
            $tags = Tag::select('id','name')->limit(5)->get();
        }
        return response()->json($tags);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = Tag::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tags, $id)
    {
        $tags = Tag::find($id);
        return view('dashboard.tag.edit', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        return redirect('/dashboard/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        Alert::success('Success', 'Tag Berhasil Dihapus!');
        return redirect('/dashboard/tag');
    }
}
