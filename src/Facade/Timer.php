<?php

namespace Aminsaki\time\Facade;
use Carbon\Carbon;

/**
 * Class Timer
 * @package Aminsaki\time\Facade
 */
class Timer
{

    /**
     * @var static
     */
    public $time;

    /**
     * Timer constructor.
     */
    public function __construct()
	{
      $this->time=Carbon::now()->setTimezone('asia/tehran');
	}

    /**
     * @return string
     */
    public function OneHourAgo()
	{
        return $this->time->subHour(1)->toTimeString();
	}

    /**
     * @return string
     */
    public function AminuteAgo()
	{
        return $this->time->subMinute(1)->toTimeString();
	}

    /**
     * @return string
     */
    public function AquarterAgo()
	{
            return $this->time->subMinute(15)->toTimeString();

	}
}