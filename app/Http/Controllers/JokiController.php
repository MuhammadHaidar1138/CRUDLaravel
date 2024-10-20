<?php

namespace App\Http\Controllers;

use App\Models\joki;
use Illuminate\Http\Request;

class JokiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joki= joki::all();
        return view('Data_joki',compact('joki'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $joki= joki::all();
        return view('Joki.create', compact('joki'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'type' => 'required',
            'email' => 'required',
            'contact' => 'required'
        ],
        [
            'name.required' => 'Nama wajib diisi',
            'type.required' => 'Type wajib diisi',
            'email.required' => 'Email wajib diisi',
            'contact.required' => 'Contact wajib diisi'
        ]);

        joki::create([
            'name' => $request->name,
            'type' => $request->type,
            'email' => $request->email,
            'contact' => $request->contact
        ]);

        return redirect()->back()->with('success','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(joki $joki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $joki = joki::find($id);
        return view('Joki.edit',compact('joki'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'type' => 'required',
            'email' => 'required',
            'contact' => 'required' 
        ]);

        joki::where('id', $id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'email' => $request->email,
            'contact' => $request->contact
        ]);

        return redirect()->route('product.index')->with('success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        joki::where('id', $id)->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus!');
    }
}
