<?php

namespace App\Http\Controllers;

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
        return view('comics.index', compact('comics'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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

        $_comic = new Comic();
        $_comic -> title = $validated_data['title'];
        $_comic -> description = $validated_data['description'];
        $_comic -> thumb = $validated_data ['thumb'];
        $_comic -> price = $validated_data ['price'];
        $_comic -> series = $validated_data ['series'];
        $_comic -> sale_date = $validated_data['sale_date'];
        $_comic -> type = $validated_data ['type'];
        $_comic -> save();

        Comic::create($validated_data);

        return redirect()->route('comics');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
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

        return redirect()->route('comics');
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

        return redirect()->route('comics');
    }
}