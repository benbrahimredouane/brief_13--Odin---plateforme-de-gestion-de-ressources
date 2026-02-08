<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
use App\Models\category;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $links = link::all();
        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('links.create', compact('categories'));
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

        ]);

        link::create($data);

        return redirect()->route('links.index')->with('succss', 'added with succes!');
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
        $link = link::find($id);
        $categories = category::all();
        return view('links.edit', compact('link','categories'));
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

        ]);

        $link = link::find($id);
        $link->update($data);

        return redirect()->route('links.index')->with('succss', 'updated succesufly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        link::find($id)->delete();
        

        return redirect()->route('links.index')->with('succss','delted with succss!');
    }
}
