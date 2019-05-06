<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
class ShelfChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $code = DB::table('floor')->get();
        $bookshelf = DB::table('bookshelf')->get();
        $data = array('code'=> $code,'bookshelf' =>  $bookshelf);
        return view('home' ,$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floor.addFloor');

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

        DB::insert('insert into floor (floor) values ("'.$request->floor.'")');
        Session::flash('flash_message','บันทึกข้อมูลจังหวัดสำเร็จ!! ');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



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
        DB::table('floor')
        ->where('id', $id)
        ->update(['floor' => $request->floor]);
        Session::flash('flash_message','แก้ไขข้อมูลจังหวัดสำเร็จ!! ');
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('floor')->where('id', '=',$id)->delete();
         Session::flash('flash_message','ลบข้อมูลจังหวัดสำเร็จ!! ');
         return redirect('home');
    }
}
