<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione
        $request->validate([
            'title' => 'required|max:80',
            'type' => 'required|max:50',
            'cooking_time' => 'required|integer|max:255',
            'weight' => 'required|integer|max:10000',
            'description' => 'required',
            'image' => 'nullable|max:255',
            'price' => 'required|numeric|max:99.99',
        ]);
        // recuperiamo tutti i dati del form
        $data = $request->all();

        // creiamo un oggetto Product
        $newProduct = new Product();
        // compiliamo tutte le proprietà con i dati del form
        // $newProduct->title = $data['title'];
        // $newProduct->type = $data['type'];
        // $newProduct->cooking_time = $data['cooking_time'];
        // $newProduct->weight = $data['weight'];
        // $newProduct->description = $data['description'];
        // $newProduct->image = $data['image'];
        // $newProduct->price = $data['price'];
        $newProduct->fill($data);
        // inseriamo il nuovo record a DB
        $newProduct->save();
        // rindirizziamo alla pagina del prodotto appena creato
        return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $product->update($data);

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
