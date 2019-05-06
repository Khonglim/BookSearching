<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book_SEC;
class BookSECController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome');
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
        $ch = curl_init();

        // set url
      $url = "http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaQA/%7CaQZ9/bcm";
    // echo $url;
        curl_setopt($ch, CURLOPT_URL,$url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = json_decode(curl_exec($ch));
        curl_close($ch);
     //print_r($output);
       // echo $output;
        // close curl resource to free up system resources

        $k =  $request->book;
        $arrayName = array('output' => $output->ListOfItemsFromCallNoRange,
                            'k' => $k

                            );






        //print_r($count);

        return view('showese', $arrayName);;
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
