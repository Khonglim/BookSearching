<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
class ShelfChangeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = DB::table('floor')->get();
        $count = DB::table('floor')->leftJoin('bookshelf', 'floor.floor_id', '=', 'bookshelf.floor')->get();




        $data = array('code'=> $code);
        return view('admin.home' ,$data);
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
        $count = DB::table('floor')->where('floor_id', '=',$request->floor)->count();
       if($count > 0){
        Session::flash('flash_message_error','ไม่สามารถบันทึกได้มีชั้นหมายเลขนี้แล้ว !! ');
        return redirect('home');
       }

        DB::insert('insert into floor (floor_id) values ("'.$request->floor.'")');

        Session::flash('flash_message','บันทึกข้อมูลสำเร็จ!! ');
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
        $count = DB::table('bookshelf')->where('floor', '=' ,$request->floor_id)->count();

        if($count > 0 ){

            Session::flash('flash_message_error','ไม่สามารถแก้ไขชั้นได้  เนี่องจากมีตู้หนังสืออยู้ในชั้น !! ');

            return redirect('home');

        }
        DB::table('floor')
        ->where('id', $id)
        ->update(['floor_id' => $request->floor]);
        Session::flash('flash_message','แก้ไขข้อมูลสำเร็จ!! ');
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

      $count = DB::table('bookshelf')->where('floor', '=',$id)->count();
if($count > 0 ){

    Session::flash('flash_message_error','ไม่สามารถลบได้มีตู้หนังสืออยู่ใั้นนี้ !! ');

    return redirect('home');

}else {
    DB::table('floor')->where('floor_id', '=',$id)->delete();
    Session::flash('flash_message','ลบข้อมูลชั้นสำเร็จ!! ');
    return redirect('home');
}


        // foreach ($floor as $p){
        //    DB::table('floor')
        //    ->where('floor', '=',$p->floor_id)
        //    ->update(['floor' =>$p->floor-1]);

       // }



    }







}
