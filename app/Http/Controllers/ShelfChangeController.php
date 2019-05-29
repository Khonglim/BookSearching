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
        $count = DB::table('floor')->leftJoin('bookshelf', 'floor.floor_id', '=', 'bookshelf.floor')->get();




        $data = array('code'=> $code



    );
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
        ->update(['floor_id' => $request->floor]);
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
       // $floor = DB::table('floor') ->where('floor', '>', $id)->get();

         DB::table('floor')->where('floor_id', '=',$id)->delete();
        // foreach ($floor as $p){
        //    DB::table('floor')
        //    ->where('floor', '=',$p->floor_id)
        //    ->update(['floor' =>$p->floor-1]);

       // }


         Session::flash('flash_message','ลบข้อมูลชั้นสำเร็จ!! ');

         return redirect('home');
    }



    public function destroyfloor(Request $request)
    {
        $bookshelf = DB::table('bookshelf') ->where('id_shelf', '>', $request->shelf)->where('floor', '=', $request->floor) ->get();
        DB::table('bookshelf')->where('id_shelf', '=',$request->shelf)->where('floor', '=', $request->floor)->delete();
        foreach ($bookshelf as $p){
           DB::table('bookshelf') ->where('id_shelf', '=',$p->id_shelf)
           ->where('floor', '=', $request->floor)
           ->update(['id_shelf' =>$p->id_shelf-1]);

       }


       $count= DB::table('bookshelf')->where('floor', '=',$request->floor)->count();
       DB::table('floor')->where('floor_id', $request->floor)->update(['shelf_all' => $count]);

       Session::flash('flash_message','ลบข้อมูลตู้สำเร็จ!! ');

         return redirect('home');
    }



}
