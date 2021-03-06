<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\SubInventory;
use App\SubInventoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subinventories.index');
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
        $subInventory = SubInventory::create($request->all());

        return redirect()->route('sub-inventories.index')
            ->with('info', 'Sub inventory created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Inventory::orderBy('id', 'DESC')->where('hotel_id', Auth::user()->hotel->id)->get();
        $subInventory = SubInventory::with('products')->findOrFail($id);
        return view('subinventories.show', compact('subInventory', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subInventory = SubInventory::findOrFail($id);
        $subInventory->delete();

        return redirect()->route('inventories.index')
            ->with('info', 'Sub inventory deleted succesfully');
    }

    public function save(Request $request){
        $product = SubInventoryProduct::create($request->all());
        return $product;
    }

    public function editAmount(Request $request, $id){
        $product = SubInventoryProduct::findOrFail($id);
        $product->amount = $request->amount;
        $product->save();

        $inventory = Inventory::findOrFail($product->inventory->id);
        $inventory->quantityInventory = $inventory->quantityInventory - $product->amount;
        $inventory->save();
    }
}
