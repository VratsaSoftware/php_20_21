<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTagRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
    public function store(StoreTagRequest $request)
    {

        //Way 1
        // $validated = $request->validate(
        //     [
        //         'tag' => 'required|min:3|max:30|unique:tags',
        //         'description' => 'required|min:5',
        //         'url' => 'nullable|min:5|max:100|url',
        //         'email' => 'required|email',
        //     ]
        // );g

        //Way 2 using Request
        $validated = $request->validated();

        // $name = $request->file('image_name')->getClientOriginalName();
        // $extension = $request->file('image_name')->extension();
        // specify file name:
        // $path = $request->file('image_name')->storeAs('images', '1.png');
        // Use Storage Fasade 
        // $path = Storage::putFile('public', $request->file('image_name'));

        $request->file('image_file')->store('public');
        $uploadedFileName = $request->file('image_file')->hashName();

        $request->merge(['image_name' => $uploadedFileName]);

        // $data = $request->all();

        $data = $request->except('image_file');
        // Tag::create($data);

        $tag = new Tag;
        $tag->tag = $data['tag'];
        $tag->description = $data['description'];
        $tag->url = $data['url'];
        $tag->email = $data['email'];
        // $tag->image_name = $uploadedFileName;
        $tag->save();

        $image = new Image;
        $image->image_name = $uploadedFileName;

        $image = $tag->image()->save($image);

        // $request->session()->flash('additional_message', $data);
        Session::flash('additional_message', $data);

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
