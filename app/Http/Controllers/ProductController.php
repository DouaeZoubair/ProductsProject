<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [];

    public function index()
    {
        return view('products.index' , ['products' => $this->products]);
    }
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = [
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
        ];
        $this->products[] = $products;
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $products = $this->products[$id];
       return view('products.show' , ['product' =>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = $this->products[$id];
        return view('products.edit' , ['product' =>$products , 'id' => $id]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->products=[$id] = [
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
        ];
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        unset($this->products[$id]);
        return redirect()->route('products.index');
    }
}
