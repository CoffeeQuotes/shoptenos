<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Product;
use App\Category;

class SearchController extends Controller
{
    //*
    //*Display a listing of the resource.
    //*
    //* @return \Illuminate\Http\Response
    //*

    public function index()
    {
      $products = Product::with('category')->get();
      return view('home', compact('products'));
    }

    /**
     * search records in database and display results
     * @param Request $request [description]
     * @return view [description]
     *
     */
    public function search(Request $request)
    {
      $searchterm = $request->input('query');
      // dd($searchterm);
      $searchResults = (new Search())
                  ->registerModel(Product::class, ['name','subject','board','class'])
                  ->registerModel(Category::class,['name'])
                  ->perform($searchterm);
                  // dd($searchResults);
      return view('search', compact('searchResults', '$searchterm'));

    }
}
