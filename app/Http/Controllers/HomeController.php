<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book_SEC;
use Yajra\Datatables\Datatables;
use App\Bookapi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {



        $data = array('codewold'=> $codewold);
        return view('home' ,$data);


    }

    public function postdata(Request $request){


        $book= Bookapi::all();
        return datatables()->collection($book)->addColumn('action', function ($book) {
            return '<a href="/locationShow/'.$book->callno.'" class="btn btn-danger btn-xs"><i class="fa  fa-map"></i></a>
                ';})->toJson();

    }







}
