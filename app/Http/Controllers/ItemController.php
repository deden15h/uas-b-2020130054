<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id' => 'required|integer|min:16',
            'nama' => 'required|max:40',
            'harga' => 'required|integer|min:1',
            'stok' => 'required|integer|min:1'
        ];

        $validated = $request->validate($rules);

        $newItem = new Item();
        $newItem->id = $validated['id'];
        $newItem->nama = $validated['nama'];
        $newItem->harga = $validated['harga'];
        $newItem->stok = $validated['stok'];

        $newItem->save();

        $request->session()->flash('success', "Item {$validated['nama']} sudah disimpan");
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validateData = $request->validate(
            [
                'id' => 'required|integer|min:16',
                'nama' => 'required|max:40',
                'harga' => 'required|integer|min:1',
                'stok' => 'required|integer|min:1',
            ]
        );
        $item->update($validateData);
        $request->session()->flash('success', "Berhasil memperbaharui data {$validateData['nama']}!");
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', "Data {$item['nama']} sudah dihapus.");
    }
}
