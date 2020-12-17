<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $user = session()->get('user');
        if(!$user) {
            $user = [
                "email" => $request->input('email'),
                "firstname" => $request->input('firstname'),
                "lastname" => $request->input('lastname'),
                "company" => $request->input('company'),
                "address" => $request->input('address'),
                "appartment" => $request->input('city'),
                "country" => $request->input('country'),
                "state" => $request->input('state'),
                "pincode" => $request->input('pincode'),
                "phone" => $request->input('phone'),
            ];
         }
         session()->put('user', $user);

        $checkout = new Checkout;
        $checkout->email = $request->input('email');
        $checkout->firstname = $request->input('firstname');
        $checkout->lastname = $request->input('lastname');
        $checkout->company = $request->input('company');
        $checkout->address = $request->input('address');
        $checkout->apartment = $request->input('apartment');
        $checkout->city = $request->input('city');
        $checkout->country = $request->input('country');
        $checkout->state = $request->input('state');
        $checkout->pincode = $request->input('pincode');
        $checkout->phone = $request->input('phone');
        $checkout->products = $request->input('products');
        $checkout->save();
        return redirect('/shipping');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
