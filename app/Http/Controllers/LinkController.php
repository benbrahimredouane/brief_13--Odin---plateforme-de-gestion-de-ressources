<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Models\Category;
use App\Models\Link;
// use Illuminate\Container\Attributes\Auth;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;



class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $this->authorize('viewAny',Link::class);

        $links = Link::with(['category','tags'])->get();
        
        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $this->authorize('create',Link::class);
        $tags = Tag::all();
        $categories = Category::all();
        return view('links.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create',Link::class);
        $data = $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',
            'category_id' =>'nullable|exists:categories,id',
            'tags'=> 'array',
            'tags.*' => 'exists:tags,id',
           

        ]);
        $data['user_id'] = Auth::id();

        $link=Link::create($data);

        $link->tags()->sync($data['tags']??[]);

        

        return redirect()->route('links.index')->with('succss', 'added with succssfully!');
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
        $link = Link::findOrFail($id);
        $this->authorize('update',$link);
        
        $categories = Category::all();
        $tags=Tag::all();
        return view('links.edit', compact('link','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $link = Link::findOrFail($id);
        $this->authorize('update',$link);
        $data = $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',  
            'category_id' =>'nullable|exists:categories,id',
            'tags'=>'nullable|array',
            'tags.*'=>'exists:tags,id',

        ]);

        // $data['user_id']=Auth::id();
        
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
        $link=Link::findOrFail($id);
        $this->authorize('delete',$link);
        
        $link->delete();
        

        return redirect()->route('links.index')->with('succss','delted with succss!');
    }
}
