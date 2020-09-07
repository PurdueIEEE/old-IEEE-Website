<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik (God Tier) [Updated by Swagat]
 * Date: 8/16/2018
 * Time: 2:44 PM
 */

$year = 2020;
$tz = new DateTimeZone("America/Indiana/Indianapolis");
$etime = function ($month, $day, $hour, $minute = 0) use ($year, $tz) {
    return new DateTime("$year-$month-$day $hour:$minute:00", $tz);
};

$info_sessions = array(
    array($etime(9, 2, 18, 30), $etime(9, 2, 20, 0), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord</a>', GENERAL),
	array($etime(9, 3, 18, 30), $etime(9, 3, 20, 0), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord</a>', GENERAL),
	array($etime(9, 3, 19), $etime(9, 3, 20), '<a href="https://discord.gg/TKdPrCG">Racing Discord [https://discord.gg/TKdPrCG</a>]', RACING),
	array($etime(9, 4, 18, 30), $etime(9, 4, 19, 30), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Industrial Relations]</a>', INDUSTRIAL_RELATIONS),
	array($etime(9, 6, 17), $etime(9, 6, 18), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Social]</a>', SOCIAL),
    array($etime(9, 9, 18, 30), $etime(9, 9, 20), 'ME 1130 & <a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [ROV]</a>', ROV),
	array($etime(9, 10, 18), $etime(9, 10, 19), '<a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [Computer Society]</a>', COMPUTER_SOCIETY),
	array($etime(9, 10, 18), $etime(9, 10, 19), 'EE 226 and <a href="https://zoom.us/j/5076657337?pwd=QUczWDBmdjZoUHA1RXZrZWQ0U3h0Zz09">https://zoom.us/j/5076657337?pwd=QUczWDBmdjZoUHA1RXZrZWQ0U3h0Zz09</a>', MTTS),
    array($etime(9, 10, 18, 30), $etime(9, 10, 19, 30), 'EE 157 & <a href="https://discord.gg/kZNkKXM">IEEE Q&A Discord [G&E]</a>', GROWTH),
	array($etime(9, 10, 18, 30), $etime(9, 10, 19, 30), '<a href="https://hangouts.google.com/group/RvwNitZ22K8rCy137">https://hangouts.google.com/group/RvwNitZ22K8rCy137</a>', EMBS),
    array($etime(9, 12, 15, 30), $etime(9, 12, 16, 30), '<a href="https://purdue-student.webex.com/purdue-student/j.php?MTID=mfcf4bd9ef43aa88f4d846d4707509d86">https://purdue-student.webex.com/purdue-student/j.php?MTID=mfcf4bd9ef43aa88f4d846d4707509d86</a>', SOFTWARE_SATURDAYS),
	array($etime(9, 14, 18),     $etime(9, 14, 18, 30), '<a href="https://discord.gg/bh3ENZy">Learning Discord [https://discord.gg/bh3ENZy]</a>', LEARNING)
//    array($etime(1, 17, 18, 30), $etime(1, 17, 19, 30), 'ARMS 1010', PARTIEEE),
//    
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
