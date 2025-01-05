<?php

function timeElapsed($timestamp)
{
    // Calculate the difference between the current time and the given timestamp
    $timeDifference = time() - $timestamp;

    // Define time units
    $seconds = $timeDifference;
    $minutes = round($timeDifference / 60);
    $hours = round($timeDifference / 3600);
    $days = round($timeDifference / 86400);
    $weeks = round($timeDifference / 604800);
    $months = round($timeDifference / 2419200);
    $years = round($timeDifference / 29030400);

    // Determine the appropriate time unit
    if ($seconds <= 59) {
        return $seconds . " seconds ago";
    } elseif ($minutes <= 59) {
        return $minutes . " minutes ago";
    } elseif ($hours <= 23) {
        return $hours . " hours ago";
    } elseif ($days <= 6) {
        return $days . " days ago";
    } elseif ($weeks <= 3) {
        return $weeks . " weeks ago";
    } elseif ($months <= 11) {
        return $months . " months ago";
    } else {
        return $years . " years ago";
    }
}
?>
