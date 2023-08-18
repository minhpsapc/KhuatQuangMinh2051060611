<?php

namespace App\Http\Controllers;

use App\Models\Faketube;
use Illuminate\Http\Request;

class FaketubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Faketube::latest()->paginate(7);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'channelid'          =>  'required',
            'channelname'         =>  'required',
            'description'         =>  'required',
            'subscriberscount'         =>  'required',
            'url'         =>  'required',
            'createat'         =>  'required',
            'updatedat'         =>  'required'
        ]);

        $faketube = new Faketube;

        $faketube->channelid = $request->channelid;
        $faketube->channelname = $request->channelname;
        $faketube->description = $request->description;
        $faketube->subscriberscount = $request->subscriberscount;
        $faketube->url = $request->url;
        $faketube->createat = $request->createat;
        $faketube->updatedat = $request->updatedat;

        $faketube->save();

        return redirect()->route('faketubes.index')->with('success', 'Faketube Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faketube $faketube)
    {
        return view('show', compact('faketube'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faketube $faketube)
    {
        return view('edit', compact('faketube'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faketube $faketube)
    {
        $request->validate([
            'channelid'      =>  'required',
            'channelname'      =>  'required',
            'description'      =>  'required',
            'subscriberscount'      =>  'required',
            'url'      =>  'required',
            'createat'     =>  'required',
            'updatedat'     =>  'required',
        ]);

        $faketube = Faketube::find($request->hidden_id);

        $faketube->channelid = $request->channelid;
        $faketube->channelname = $request->channelname;
        $faketube->description = $request->description;
        $faketube->subscriberscount = $request->subscriberscount;
        $faketube->url = $request->url;
        $faketube->createat = $request->createat;
        $faketube->updatedat = $request->updatedat;


        

        $faketube->save();

        return redirect()->route('faketubes.index')->with('success', 'Channel Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faketube $faketube)
    {
        $faketube->delete();

        return redirect()->route('faketubes.index')->with('success', 'Channel Data deleted successfully');
    }
}
