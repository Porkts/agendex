<?php

namespace Modules\Call\Entities;

use Carbon\Carbon;
use Modules\Call\Entities\CallConfig;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $fillable = ["user_id","date_hour","status","processing_time","finished_time","window_id"];



    public function availableTimes($day)
    {
    	$day = explode('/', $day);
    	$day = Carbon::create($day[2],$day[1], $day[0]);

		$start = Carbon::createFromTime(CallConfig::getValue('start_hour', 'start_minute', 00));
		$end = Carbon::createFromTime(CallConfig::getValue('end_hour', 'end_minute', 00));

		$times_array = $this->generateTimesArray($start, $end, CallConfig::getValue('block_time'));

		if ($day->isToday())
		{
			$times_array = array_filter($times_array, function($hour) {
				$time = Carbon::now()->addMinutes(CallConfig::getValue('minimum_minutes'));

		    	return  Carbon::createFromTimeString($hour)->diffInMinutes($time, false) < 0;
			});
		}

		return $times_array;
    }

    public function generateTimesArray(Carbon $start_date, Carbon $end_date, $step)
    {
		$dates = [];
		$slots = $start_date->diffInMinutes($end_date)/$step;

	    for($s = 1;$s <=$slots;$s++)
	    {
	        $dates[$s]=$start_date->addMinute($step)->toTimeString();
	    }

	    return $dates;
    }
}
