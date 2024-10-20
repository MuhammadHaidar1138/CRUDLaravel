<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event= event::all();
        return view('event',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event= event::all();
        return view('event.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'memberName' => 'required'
        ],
        [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'type.required' => 'Type wajib diisi',
            'memberName.required' => 'Nama Member wajib diisi'
        ]);

        event::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'memberName' => $request->memberName
        ]);

        return redirect()->route('event.index')->with('success','Data Berhasil Ditambahkan!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = event::find($id);
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'memberName' => 'required'
        ]);

        event::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'memberName' => $request->memberName
        ]);

        return redirect()->route('event.index')->with('success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        event::where('id', $id)->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus!');
    }
}
