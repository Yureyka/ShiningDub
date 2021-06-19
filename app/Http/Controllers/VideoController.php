<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::orderBy('created_at', 'desc')->paginate(5);
        return view('serieslist', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $item = (new Video()) -> fill($data);

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . request()->poster->getClientOriginalExtension();
            request()->poster->move(public_path('img/uploads'), $imageName);

            $item->poster = 'img/uploads/' . $imageName;
        }

        $item->save();

        return redirect()->route("series");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Video::with(['comments' => function ($q) {
            $q->orderBy('created_at', 'desc');
        }])->get()->find($id);

        return view('video', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Video::find($id);

        return view('editvideo', compact('data'));
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
        $data = $request->input();
        $item = Video::findOrFail($id);

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . request()->poster->getClientOriginalExtension();
            request()->poster->move(public_path('img/uploads'), $imageName);

            $item->poster = 'img/uploads/' . $imageName;
        }

        $item->update($data);



        // $item = Video::findOrFail($id);

        // $item->update($data);

        return redirect('series');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::findOrFail($id)->delete(); 
        return redirect('/series'); 
    }

    public function search(Request $request){
        $search = $request->input('search');
    
        $data = Video::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->get();
    
        return view('search', compact(['data', 'search']));
    }
}
