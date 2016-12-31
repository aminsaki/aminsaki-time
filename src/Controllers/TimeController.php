<?php

namespace Aminsaki\time\Controllers;
use Aminsaki\time\Timestamps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class TimeController extends Controller
{
    public function showTime()
    {
         $timezoconne=config('Myfig'.'madrid');
         $time= Carbon::now()->setTimezone($timezone)->toAtomString();
         return view('Myviews::time')->with('time',$time);
    }
    public function showData()
    {
          $data= Carbon::now()->toDateString();
          return view('Myviews::date')->with('date',$data);
    }

    public function timstamps()
    {
       //Timestamps
        $T=Timestamps::all();

        return $T;
    }
}
