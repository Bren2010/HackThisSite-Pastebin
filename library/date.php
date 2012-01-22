<?php
class Date {
	
	// Day-precision dates
	static public function dayFormat($date) {
		return date('j M, Y', (int) $date);
	}
	
	// Minute-precision dates
	static public function minuteFormat($date) {
		return date('j M, Y H:i T', (int) $date);
	}
    
    static public function computerFormat($date) {
        return date('r', (int) $date);
    }
    
    static public function durationFormat($duration, $short = false) {
        $granularity = 4;
        $difference = $duration;
        $retval = null;
        
        if (!$short) {
            $periods = array(
                'year' => 31536000,
                'month' => 2628000,
                'week' => 604800, 
                'day' => 86400,
                'hour' => 3600,
                'minute' => 60,
                'second' => 1);
        } else {
            $periods = array(
                'day' => 86400,
                'h' => 3600,
                'm' => 60,
                's' => 1);
        }

        foreach ($periods as $key => $value) {
            if ($difference >= $value) {
                $time = floor($difference/$value);
                $difference %= $value;
                $retval .= ($retval ? ' ' : '').$time.(!$short || ($short && $key == 'day') ? ' ' : '');
                $retval .= (($time > 1) && (!$short || ($short && $key == 'day')) ? $key.'s' : $key);
                $granularity--;
            }
            if ($granularity == '0') { break; }
        }
        return $retval;
    }
	
}
