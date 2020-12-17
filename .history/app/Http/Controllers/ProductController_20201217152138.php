<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = Product::filter($request)->get();
        // $products = Product::all();
        return view('products.index', compact('products'));
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

    public function cart()
    {
        return view('products.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.product', compact('product'));
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
    public function update(Request $request)
    {
        //
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Add the product into the cart
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
     public function addToCart($id, $buy = null)
     {
       $product = Product::find($id);

       if(!$product) {
         abort(404);
       }

       $cart = session()->get('cart');

       if(!$cart) {
          $cart = [
            $id => [
              "name" => $product->name,
              "quantity" => 1,
              "price" => $product->price,
              "image" => $product->image_main,
              "slug" => $product->slug,
              "subject" => $product->subject,
              "board" => $product->board,
              "class" => $product->class,
              "description" => $product->description,
            ]
          ];
          session()->put('cart', $cart);
          if($buy = null) {
            return redirect()->back()->with('success', 'Product added to cart successfully!');
          }
          return redirect('/checkout');
       }

       if(isset($cart[$id])) {
         $cart[$id]['quantity']++;
         session()->put('cart', $cart);
         if($buy = null) {
            return redirect()->back()->with('success','Product added to cart successfully!');
         }
         return redirect('/checkout');
       }

       $cart[$id] = [
         "name" => $product->name,
         "quantity" => 1,
         "price" => $product->price,
         "image" => $product->image_main,
         "slug" => $product->slug,
         "subject" => $product->subject,
         "board" => $product->board,
         "class" => $product->class,
         "description" => $product->description,
       ];

       session()->put('cart', $cart);

       if($buy = null) {
            return redirect()->back()->with('success','Product added to cart successfully');
       }
       return redirect('/checkout');
    }
}
