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
    array($etime(1, 27, 18, 30), $etime(1, 27, 20, 0), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord</a>', GENERAL),
	array($etime(1, 28, 19), $etime(1, 28, 20), '<a href="https://discord.gg/cVsCYVma">Racing Discord [https://discord.gg/cVsCYVma]</a>', RACING),
	array($etime(1, 28, 20), $etime(1, 28, 21), '<a href="https://discord.gg/uTmbRQEKBf">PART Discord [https://discord.gg/uTmbRQEKBf]</a>', PARTIEEE),
	array($etime(1, 30, 15, 30), $etime(1, 30, 16, 30), '<a href="https://purdue-edu.zoom.us/j/94328817467?pwd=blA3Wk1BMW51QTlqNzltcjgwajJ2dz09">https://purdue-edu.zoom.us/j/94328817467?pwd=blA3Wk1BMW51QTlqNzltcjgwajJ2dz09</a>', SOFTWARE_SATURDAYS),
	array($etime(1, 31, 13),     $etime(1, 31, 14), '<a href="https://discord.gg/bh3ENZy">Learning Discord [https://discord.gg/bh3ENZy]</a>', LEARNING),
	array($etime(1, 31, 16, 30), $etime(1, 31, 17, 30), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Social]</a>', SOCIAL),
	array($etime(2, 1, 18), $etime(2, 1, 19), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Industrial Relations]</a>', INDUSTRIAL_RELATIONS),
	array($etime(2, 1, 19), $etime(2, 1, 20), '<a href="https://purdue-edu.zoom.us/j/3342060227">https://purdue-edu.zoom.us/j/3342060227</a>', MTTS),
	array($etime(2, 1, 20), $etime(2, 1, 21), '<a href="https://discord.gg/ygcMjpYJQx">Computer Society Discord [https://discord.gg/ygcMjpYJQx]</a>', COMPUTER_SOCIETY),
    array($etime(2, 3, 17, 30), $etime(2, 3, 18, 30), 'PHYS 238 & <a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [ROV]</a>', ROV),
	array($etime(2, 5, 18, 30), $etime(2, 5, 19, 30), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [G&E]</a>', GROWTH)
// 	array($etime(1, 10, 18, 30), $etime(9, 10, 19, 30), '<a href="https://hangouts.google.com/group/RvwNitZ22K8rCy137">https://hangouts.google.com/group/RvwNitZ22K8rCy137</a>', EMBS),

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
