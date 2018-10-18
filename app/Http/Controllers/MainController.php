<?php
namespace App\Http\Controllers;

class MainController extends Controller
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
        return view('frontend.body');
    }

}