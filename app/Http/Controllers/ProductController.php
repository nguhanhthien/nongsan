<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Show the home page to the user.*
     * @return Response
     */
    public function index()
    {
        return view('frontend.product');
    }

    public function detail($slug)
    {
        return view('products.detail');
    }

    public function viewcart(){
        return view ('frontend.viewcart');
    }

    public function checkout(){
        return view('frontend.checkout');
    }

}