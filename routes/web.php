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
$pagination = Bookapi::orderBy('best_title', 'asc')->simplePaginate(16);
$data  = array('pagination' =>$pagination , );
   return view('welcome',$data);
});



Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
    $pagination = Bookapi::orderBy('best_title', 'asc')->orwhere( 'best_title', 'LIKE', '%'.$q.'%' )
    ->orWhere('best_author', 'LIKE', '%'.$q.'%' )
    ->simplePaginate(16)
    ->setPath ( '' );
  $pagination->appends( array (
        'q' => Input::get ( 'q' )
      ) );


    if (count ( $pagination ) > 0){
    return view ( 'welcome' )->withDetails( $pagination )->withQuery($q);
   }

}


return view ( 'welcome' )->withMessage ( 'ไม่พบหนังสือที่คุณค้นหา...' )->withQuery ( $q );
   });











Auth::routes();
Route::resource('shelfchange', 'ShelfChangeController');



Route::resource('category', 'CategoryController');
Route::get('categorych2','CategoryController@store2');
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
Route::get('editBook/{id}', 'BookcshelfController@index')->middleware('auth');


Route::post('allposts', 'PostController@postdata' )->name('dataProcessing');
Route::post('allposts2', 'PostController@postdata2' )->name('dataProcessing2');


Route::get('locationShow','BookcshelfController@locationshow');

Route::post('bookap', 'HomeController@postdata' )->name('bookapi');

Route::post('bookdelete', 'PostController@bookdeletes' );


Route::get('/updatedata', function () {
    return view('admin.updatebook');
 })->middleware('auth');

 Route::get('/updatedataapi', 'HomeController@updatebookapi');









