<?php

namespace App\Http\Controllers\backend;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();
        return view('pages.comicsView.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsView.createComic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();


        $newComic = new Comic();
         $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $comic =  Comic::find($id);
        return view("pages.comicsView.showComic",compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
