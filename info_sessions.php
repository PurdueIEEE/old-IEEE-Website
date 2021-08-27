<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik (God Tier) [Updated by Swagat]
 * Date: 8/16/2018
 * Time: 2:44 PM
 */

$year = 2021;
$tz = new DateTimeZone("America/Indiana/Indianapolis");
$etime = function ($month, $day, $hour, $minute = 0) use ($year, $tz) {
    return new DateTime("$year-$month-$day $hour:$minute:00", $tz);
};

$info_sessions = array(
    array($etime(9, 1, 18, 30), $etime(9, 1, 20, 0), 'PHYS 112', GENERAL),
    array($etime(9, 2, 18, 30), $etime(9, 2, 20, 0), 'PHYS 112', GENERAL),
    array($etime(9, 5, 16, 0), $etime(9, 5, 17, 0), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Learning]</a>', LEARNING),
    array($etime(9, 8, 18, 0), $etime(9, 8, 20, 0), 'POTR 234', ROV),
    array($etime(9, 8, 18, 30), $etime(9, 8, 19, 30), 'ARMS 1010', PARTIEEE),
    array($etime(9, 9, 18, 0), $etime(9, 9, 18, 30), 'TBA', SOCIAL),
    array($etime(9, 9, 18, 0), $etime(9, 9, 18, 30), 'TBA', INDUSTRIAL_RELATIONS),
    array($etime(9, 9, 18, 0), $etime(9, 9, 18, 30), 'TBA', GROWTH),
    array($etime(9, 9, 18, 0), $etime(9, 9, 19, 0), 'EE 117', COMPUTER_SOCIETY),
    array($etime(9, 9, 18, 0), $etime(9, 9, 19, 30), 'EE 222', EMBS),
    array($etime(9, 9, 19, 0), $etime(9, 9, 20, 0), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [MTT-S]</a>', MTTS),
    array($etime(9, 11, 15, 30), $etime(9, 11, 16, 30), '<a href="https://purdue-edu.zoom.us/j/99675779158?pwd=Vklib29nS1BCYVpXaG5wMkRlUnpTQT09">WALC 1087 and Zoom</a>', SOFTWARE_SATURDAYS),
	/*array($etime(1, 28, 19), $etime(1, 28, 20), '<a href="https://discord.gg/cVsCYVma">Racing Discord [https://discord.gg/cVsCYVma]</a>', RACING),
	*/
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
<div class="col-sm-4">
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
