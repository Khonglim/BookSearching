<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book_SEC;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $codewold = DB::table('floor')->get();
        $data = array('codewold'=> $codewold);
        return view('home' ,$data);


    }

    public function destroy()
    {

      return "ok";


    }




}
