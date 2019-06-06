<?php
use App\Bookapi;
use Illuminate\Support\Facades\Input;
use Ixudra\Curl\Facades\Curl;

    // Send a GET request to: http://www.foo.com/bar

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {


 //$data = DB::table('bookshelf')
 //->leftJoin('location_book', 'bookshelf.id_shelf', '=', 'location_book.shelf')->where('floor','=', 5)
 //->get();



//dd($data);

//$response = Curl::to('http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaA/%7CaZ/bcm/tha')->asJson()->get();

//$book = $response->ListOfItemsFromCallNoRange;
//Bookapi::truncate();
  //foreach ($book as $r) {
     //   $bookapi = new Bookapi();
    //    $bookapi->barcode = $r->barcode;
   //     $bookapi->location_code = $r->location_code ;
  //      $bookapi->bib_record_id = $r->bib_record_id ;
   //     $bookapi->item_record_id = $r->item_record_id ;
  //      $bookapi->best_title = $r->best_title ;
  //      $bookapi->best_author = $r->best_author ;
   //     $bookapi->item_status_code = $r->item_status_code ;
  //      $bookapi->use3_count = $r->use3_count ;
  //      $bookapi->copy_use_count = $r->copy_use_count ;
  //      $bookapi->due_gmt = $r->due_gmt ;
   //     $bookapi->language_code = $r->language_code ;

    //    $e=explode("|",$r->callno);
    //    $cut1=substr($e[1],1);
//
   //     $bookapi->callno =  $cut1;
   //     $bookapi->group_code = $r->group_code ;
   //     $bookapi->class = $r->class ;
    //    $bookapi->class_x = $r->class_x ;
    //   $bookapi->save();
//}


$pagination = Bookapi::simplePaginate(16);
$data  = array('pagination' =>$pagination , );


   return view('welcome',$data);
});



Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
    $pagination = Bookapi::where ( 'best_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'best_author', 'LIKE', '%' . $q . '%' )->simplePaginate(16)->setPath ( '' )


    ;
  $pagination->appends( array (
        'q' => Input::get ( 'q' )
      ) );


    if (count ( $pagination ) > 0){
    return view ( 'welcome', )->withDetails( $pagination )->withQuery ( $q );
   }

}



return view ( 'welcome' )->withMessage ( 'ไม่พบหนังสือที่คุณค้นหา...' )->withQuery ( $q );
   });











Auth::routes();
Route::resource('shelfchange', 'ShelfChangeController');



Route::resource('category', 'CategoryController');
Route::get('update/{id}','CategoryController@update');
Route::get('destroy/{id}','CategoryController@destroy');
Route::post('categorych','CategoryController@destroych');

Route::get('home','ShelfChangeController@index')->name('home');

Route::get('addAndRemove', 'HomeController@ajaxRequest');
Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');
Route::get('addXY', 'HomeController@update');


Route::post('codexworld','CodewoldController@ajaxRequestPost');
Route::get('index', 'CodewoldController@index');


Route::post('bookshelf','BookcshelfController@ajaxRequestPost');
Route::get('editBook/{id}', 'BookcshelfController@index');


Route::post('allposts', 'PostController@postdata' )->name('dataProcessing');


Route::get('locationShow/{id}/{namebook}/{language}','BookcshelfController@locationshow');

Route::post('bookap', 'HomeController@postdata' )->name('bookapi');

Route::post('bookdelete', 'PostController@bookdeletes' );


Route::get('/updatedata', function () {
    return view('admin.updatebook');
 });

 Route::get('/updatedataapi', 'HomeController@updatebookapi');









