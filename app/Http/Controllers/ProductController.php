<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::All();
        foreach($products as $product){
            $product->images;
            $availables=$product->availables;

            /*foreach($availables as $available){
                $procurables=$available->procurable();
                foreach($procurables as $procurable){
                    $procurable->type;
                    
                }
            }*/
        }
        //TODO:availabilitystatus and hidden
        

        return json_encode($products);
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
        
        $this->validatedData()->{'availabilitystatus'}=TRUE;
        $this->validatedData()->{'hidden'}=FALSE;

        $product = Product::create($this->validatedData());

        return redirect('products/'.$product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //TODO:availabilitystatus and hidden, procurables
        $product->images;
        $availables=$product->availables;
        //$procurables=$availables->type;


        return json_encode($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //TODO: Patch isn't possible in "forms", needa change the forms
        $product->update($this->validatedData());

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    protected function validatedData(){
        return request()->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            'productprice' => 'required',
            'availabilitystatus' => 'optionnal',
            'availabilitystatus' => 'optionnal',
        ]);
    }

    
}
