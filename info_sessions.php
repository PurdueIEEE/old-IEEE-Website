<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik
 * Date: 8/16/2018
 * Time: 2:44 PM
 */

$year = 2019;
$tz = new DateTimeZone("America/Indiana/Indianapolis");
$etime = function ($month, $day, $hour, $minute = 0) use ($year, $tz) {
    return new DateTime("$year-$month-$day $hour:$minute:00", $tz);
};

$info_sessions = array(
    array($etime(1, 15, 18, 30), $etime(1, 15, 20, 0), 'EE 129', GENERAL),
    array($etime(1, 16, 18, 30), $etime(1, 16, 20), 'POTR 234', ROV),
    array($etime(1, 17, 18),     $etime(1, 17, 19), 'ME 2063', LEARNING),
    array($etime(1, 17, 18, 30), $etime(1, 17, 19, 30), 'ARMS 1010', PARTIEEE),
    array($etime(1, 17, 19), $etime(1, 17, 20), 'ME 1006', RACING),
    array($etime(1, 17, 19, 30), $etime(1, 17, 20, 30), 'ARMS 3109', SOCIAL),
//    array($etime(8, 30, 20), $etime(8, 30, 21), 'EE 115', INDUSTRIAL_RELATIONS),
    array($etime(1, 18, 18), $etime(1, 18, 19), 'ME 1006', EMBS),
    array($etime(1, 19, 15, 30), $etime(1, 19, 17, 30), 'ARMS B061', SOFTWARE_SATURDAYS),
    array($etime(1, 22, 18), $etime(1, 22, 19), 'EE 115', GROWTH),
    array($etime(1, 23, 18), $etime(1, 23, 19), 'EE 222', COMPUTER_SOCIETY),
    array($etime(1, 24, 18), $etime(1, 24, 19), 'EE 226', MTTS)
);

$info_session_text = '<h2><b>' . $year . ' Info Sessions</b></h2>';
$previous_day = null;

foreach ($info_sessions as $session) {
    $start = $session[0];
    $end = $session[1];
    $place = $session[2];
    $committee = $session[3];
    if (isset($start)) {
        $day = '<b>' . $start->format('l') . '</b> - ' . $start->format('n/j');
        $time = $start->format('g:i a') . ' - ' . $end->format('g:i a');
        $today = new DateTime('now midnight', $tz);
        if ($today > $end) {
            $day = '<s>' . $day . '</s>';
        }
    } else {
        $day = '<b>Undetermined</b>';
        $time = '';
    }
    if ($day == $previous_day) {
        $day = '';
    } else {
        $previous_day = $day;
    }
    $info_session_text .= '<div class="row">
<div class="col-sm-3">
    <h4>' . $day . '</h4>
</div>
<div class="col-sm-9">
    <div class="col-xs-4"><h4>' . $committee . '</h4></div>
    <div class="col-xs-4"><h4>' . $time . '</h4></div>
    <div class="col-xs-4"><h4>' . $place . '</h4></div>
</div>
</div>';
}
echo $info_session_text;
