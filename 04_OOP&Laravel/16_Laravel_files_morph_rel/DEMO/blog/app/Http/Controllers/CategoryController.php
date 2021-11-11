<?php

namespace App\Http\Controllers;

use DB;
use Carbon;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = DB::table('categories')
        //              ->select('name')
        //              ->where('name', 'like', '%1')
        //              ->get();

        $categories = DB::table('categories')->get();

        // $categories = Category::all();


        $now = Carbon::now()->toDayDateTimeString();


        // $categories = DB::raw("SELECT * FROM categories")->get();
        // $categories = DB::select( DB::raw("SELECT * FROM categories WHERE name = 
        // '$name'") );

        // $categories = DB::select( DB::raw("SELECT * FROM categories WHERE name = :name"),
        //     ['name' => $name]);

        return view('categories.index', compact('categories', 'now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->file('image_file')->store('public');
        $uploadedFileName = $request->file('image_file')->hashName();

        $request->merge(['image_name' => $uploadedFileName]);
        $data = $request->except('image_file');

        $category = new Category;

        // $category->name = $request->category_name;
        // $category->description = $request->category_description;

        // $category->save();

        // $category->create(['name' => $request->category_name, 'description' => $request->category_description]);
        $category = new Category;
        $category->name = $data['category_name'];
        $category->description = $data['category_description'];
        $category->save();


        $image = new Image;
        $image->image_name = $uploadedFileName;

        $image = $category->image()->save($image);


        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        // $category->name = $request->category_name;
        // $category->description = $request->category_description;

        // $category->save();

        Category::where('id', $category->id)
            // ->where('destination', 'San Diego')
            ->update([
                'name' => $request->category_name,
                'description' => $request->category_description
            ]);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        return redirect()->route('categories.index');
    }
}