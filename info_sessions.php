<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik
 * Date: 8/16/2018
 * Time: 2:44 PM
 */

include '_committees.php';

$year = 2018;
$tz = new DateTimeZone("America/Indiana/Indianapolis");
$etime = function ($month, $day, $hour, $minute=0) use ($year, $tz) {
    return new DateTime("$year-$month-$day $hour:$minute:00", $tz);
};

$info_sessions = array(
    array($etime(8, 28, 18, 30), $etime(8, 28, 20, 0), 'EE 129', GENERAL),
    array($etime(8, 29, 18, 30), $etime(8, 29, 20, 0), 'EE 129', GENERAL),
    array($etime(8, 30, 18), $etime(8, 30, 19), 'EE 115', RACING),
    array($etime(8, 30, 18, 30), $etime(8, 30, 19, 30), 'ME 2061', LEARNING),
    array($etime(8, 30, 19), $etime(8, 30, 20), 'ARMS 3109', SOCIAL),
    array($etime(8, 30, 20), $etime(8, 30, 21), 'EE 115', INDUSTRIAL_RELATIONS),
    array($etime(8, 31, 18), $etime(8, 31, 19), 'HEAV 206', EMBS),
    array($etime(9, 1, 11), $etime(9, 1, 12, 30), 'ME 1130', SOFTWARE_SATURDAYS),
    array($etime(9, 4, 18, 30), $etime(9, 4, 19, 30), 'ARMS 1010', PARTIEEE),
    array($etime(9, 5, 18, 30), $etime(9, 5, 20), 'ME 1061', ROV),
    array($etime(9, 6, 18), $etime(9, 6, 19), 'EE 222', GROWTH),
    array($etime(9, 6, 18), $etime(9, 6, 19), 'EE 224', MTTS),
    array($etime(9, 6, 19), $etime(9, 6, 20), 'EE 222', COMPUTER_SOCIETY),
    array($etime(9, 8, 11), $etime(9, 8, 12, 30), 'ME 1130', SOFTWARE_SATURDAYS)
);

$info_session_text = '';
$previous_day = null;

foreach ($info_sessions as $session) {
    $start = $session[0]; $end = $session[1]; $place = $session[2]; $committee = $session[3];
    if (isset($start)) {
        $day = '<b>' . $start->format('l') . '</b> - ' . $start->format('n/j');
        $time = $start->format('g:i a') . ' - ' . $end->format('g:i a');
        $today = new DateTime('now midnight', $tz);
        if ($today > $end) {
            $day = '<s>'.$day.'</s>';
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
    <h4>'.$day.'</h4>
</div>
<div class="col-sm-9">
    <div class="col-xs-4"><h4>'.$committee.'</h4></div>
    <div class="col-xs-4"><h4>'.$time.'</h4></div>
    <div class="col-xs-4"><h4>'.$place.'</h4></div>
</div>
</div>';
}

?>
<div class="well card-1 text-dark">
    <div class="row">
        <div class="col-md-12">
        <h1 style="margin-top: 0; text-align: center"><a href="https://docs.google.com/presentation/d/1v9gJERh6Cpj3SQ7jt9nZCBmDKg6vA7V_4CRNHPdIqhE/edit?usp=sharing" target="_blank">Callout Slides Link</a></h1>

            <h2><b>2018 Info Sessions</b></h2>
        </div>
    </div>
    <hr />
    <?php echo $info_session_text ?>
</div>