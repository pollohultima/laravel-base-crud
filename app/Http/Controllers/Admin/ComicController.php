<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated_data = $request->validate([
            'title'=> 'required | unique:comics',
            'description'=> 'required',
            'thumb'=> 'nullable',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'required',
            'type'=> 'required',
        ]);

        Comic::create($validated_data);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated_data = $request->validate([
            'title'=> 'required |unique:comics',
            'description'=> 'required',
            'thumb'=> 'nullable',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'required',
            'type'=> 'required',
        ]);

        $comic->update($validated_data);

        return redirect()->route('admin.comics.index')->with('message', "You've modified a comic!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comics.index')->with('message', "You've deleted a comic");
    }
}