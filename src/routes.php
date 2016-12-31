<?php 

Route::get('time','Aminsaki\time\Controllers\TimeController@showTime')
 ->middleware('checkTime');
Route::get('data','Aminsaki\time\Controllers\TimeController@showData');
Route::get('timstamps','Aminsaki\time\Controllers\TimeController@timstamps');



Route::get('test',function (){
       // $time=new \Aminsaki\time\Facade\Timer();

       //return app('MyTime')->OneHourAgo();
      return MyTimeFacade::OneHourAgo();
    });

