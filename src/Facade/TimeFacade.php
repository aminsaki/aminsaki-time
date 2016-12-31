<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 31/12/2016
 * Time: 02:01 AM
 */

namespace Aminsaki\time\Facade;


use Illuminate\Support\Facades\Facade;

class TimeFacade extends Facade
{

    protected static function getFacadeAccessor()
     {
         return 'MyTime';
     }
}