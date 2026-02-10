<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\category;
use App\Models\Tag;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        $links = Link::with(['category','tags'])->get();
        
        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tags = Tag::all();
        $categories = category::all();
        return view('links.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',
            'category_id' =>'nullable|exists:categories,id',
            'tags'=> 'array',
            'tags.*' => 'exists:tags,id',

        ]);

        $link=Link::create($data);

        $link->tags()->sync($data['tags']??[]);

        

        return redirect()->route('links.index')->with('succss', 'added with succss!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $link = Link::find($id);
        $categories = category::all();
        $tags=Tag::all();
        return view('links.edit', compact('link','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',  
            'category_id' =>'nullable|exists:categories,id',
            'tags'=>'nullable|array',
            'tags.*'=>'exists:tags,id',

        ]);

        $link = Link::findOrFail($id);
        $link->update($data);
        

        $link->tags()->sync($data['tags']??[]);

        return redirect()->route('links.index')->with('succss', 'updated succssufly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Link::find($id)->delete();
        

        return redirect()->route('links.index')->with('succss','delted with succss!');
    }
}
