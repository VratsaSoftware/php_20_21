<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $tag = new Tag;
        $tag->tag = $data['tag'];
        $tag->description = $data['description'];
        $tag->save();

        return redirect()->route('tags.index')->with('message', 'New tag created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tags.edit', compact('tag'));
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

        $data = $request->all();

        // $tag = Tag::findOrFail($id);
        // $tag->tag = $data['tag'];
        // $tag->description = $data['description'];
        // $tag->save();

        // mass update
        // dd(Tag::whereNotNull('tag')->update(['tag' => 'name']));


        Tag::findOrFail($id)->update($data);


        return redirect()->route('tags.index')->with('message', 'Tag updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Tag::destroy($id);

        $tag = Tag::findOrFail($id);

        if ($tag->delete()) {
            return redirect()->route('tags.index')->with('message', 'Tag "' . $tag->tag . '"Deleted!');
        };

        return redirect()->route('tags.index')->with('error', 'Error!!!');
    }
}
