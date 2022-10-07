<?php

namespace App\Controllers\Components;

trait CardEvent
{
    public static function startDateTime()
    {
        return get_field('date_time');
    }

    public static function endDateTime()
    {
        return get_field('date_time_end');
    }

    public static function registrationURL()
    {
        return get_field('registration_link');
    }

    public static function eventType()
    {
        return get_field('type');
    }

    public static function startDate()
    {
        $date_time = self::startDateTime();
        $date      = explode(' ', $date_time);

        return $date[0];
    }

    public static function endDate()
    {
        $date_time = self::endDateTime();
        $date      = explode(' ', $date_time);

        return $date[0];
    }

    public static function startTime()
    {
        $date_time = self::startDateTime();
        $date_time = explode(' ', $date_time);

        return $date_time[1] . ' ' . $date_time[2];
    }

    public static function endTime()
    {
        $date_time = self::endDateTime();
        $date_time = explode(' ', $date_time);

        return $date_time[1] . ' ' . $date_time[2];
    }

    public static function startDay()
    {
        $date = self::startDate();

        if (!$date) {
            return false;
        }

        $day = date('d', strtotime($date));

        return $day;
    }

    public static function endDay()
    {
        $date = self::endDate();

        if (!$date) {
            return false;
        }

        $day = date('d', strtotime($date));

        return $day;
    }

    public static function startMonth()
    {
        $date = self::startDate();

        if (!$date) {
            return 'TBC';
        }

        $month = date('M', strtotime($date));

        return $month;
    }

    public static function endMonth()
    {
        $date = self::endDate();

        if (!$date) {
            return null;
        }

        $month = date('M', strtotime($date));

        return $month;
    }

    public static function eventDay()
    {
        $date  = 'TBC';
        $start = self::startDay();
        $end   = self::endDay();

        if ($start && $end) {

            if ($start === $end || !$end) {
                return $start;
            } else {
                return sprintf('%s - %s', $start, $end);
            }

        } elseif ($start || $end) {
            $date = isset($start) ? $start : $end;
        }

        return $date;
    }

    public static function eventMonth()
    {
        $month = 'TBC';
        $start = self::startMonth();
        $end   = self::endMonth();

        if ($start && $end) {
            if ($end !== $start) {
                return sprintf('%s - %s', $start, $end);
            } elseif ($start) {
                $month = $start;
            }
        } elseif ($start) {
            $month = $start;
        }

        return $month;
    }

    public static function eventDuration()
    {
        $duration  = 'TBC';
        $start     = self::startTime();
        $end       = self::endTime();
        $time_zone = __('Pacific Time', 'codefresh');

        if ($start && $end) {
            if (strtotime($start) === strtotime($end)) {
                return sprintf('%1$s <span class="text-oxford-blue-400">%2$s</span>', $start, $time_zone);
            } else {
                return sprintf('%1$s - %2$s <span class="text-oxford-blue-400">%3$s</span>', $start, $end, $time_zone);
            }
        }

        if ($start) {
            $duration = sprintf('%1$s <span class="text-oxford-blue-400">%2$s</span>', $start, $time_zone);
        }

        return $duration;
    }

    public function isMultiDays()
    {
        $start = self::startDay();
        $end   = self::endDay();

        if ($start === $end || !$end) {
            return false;
        } else {
            return true;
        }
    }

    public static function className()
    {
        $class = null;

        switch (self::eventType()) {
            case 'hybrid_event':
                $class = 'upcoming-event--hybrid';
                break;
            case 'live_event':
                $class = 'upcoming-event--live';
                break;
            case 'meetup':
                $class = 'upcoming-event--meetup';
                break;
            case 'webinar':
                $class = 'upcoming-event--webinar';
                break;
            default:
                $class = 'upcoming-event';
        };

        return $class;
    }
}
