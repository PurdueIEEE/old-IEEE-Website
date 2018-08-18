<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik
 * Date: 8/16/2018
 * Time: 2:44 PM
 */

include '_committees.php';

$year = 2018;
$etime = function ($month, $day, $hour, $minute=0) use ($year) {
    return mktime($hour, $minute, 0, $month, $day, $year);
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
    array($etime(9, 8, 11), $etime(9, 8, 12, 30), 'ME 1130', SOFTWARE_SATURDAYS),
    array(null, null, null, COMPUTER_SOCIETY),
);

$info_session_text = '';
$previous_day = null;

foreach ($info_sessions as $session) {
    $start = $session[0]; $end = $session[1]; $place = $session[2]; $committee = $session[3];
    if (isset($start)) {
        $day = '<b>' . date('l', $start) . '</b> - ' . date('n/j', $start);
        $time = date('g:i a', $start) . ' - ' . date('g:i a', $end);
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
            <h2><b>2018 Info Sessions</b></h2>
        </div>
    </div>
    <hr />
    <?php echo $info_session_text ?>
</div>