<?php



use App\User;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('users',function(){
    return "jdfksdfh";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    Route::post('schedule', function(Request $request){
        $request->validate([
            'from'=> 'bail|required|date',
            'to' => 'bail|required|date',
        ]);
       $schedule= Schedule::create([
            'from'=>$request->from,
            'to'=>$request->to,
            'user_id'=> Auth::user()->id
        ]);
        if($schedule){
            return back()->with('message','Your schedule Successfully send to the parent');
        }

    })->name('schedule');
    Route::middleware(['auth', 'can:isParent'])->get('/parent', 'ParentsController@index');
});
