<?php
namespace App\Http\Controllers;

class DealController extends Controller
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
        return view('deal.index');
    }

    public function detail($slug  = null)
    {
        return view('deal.detail');
    }

    public function viewcart(){
        return view ('deal.viewcart');
    }

    public function checkout(){
        return view('deal.checkout');
    }

}