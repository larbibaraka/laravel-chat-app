<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/chat','ChatController@index')->name("chat.index")->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/messages',function (){

        $users_messages= App\Message::with('user')->get();

        $data = [];
        foreach ($users_messages as $value){
            $data[$value->id]=["message" => $value->message , "user" => $value->user->name];

        }
        return $data;

})->middleware('auth');

Route::post('/messages',function (){

    $user = Auth::user();
    $message = request()->get('message');
    $user->message()->create([
        'message'=>$message
    ]);
    return ['status'=>'ok'];

})->middleware('auth');