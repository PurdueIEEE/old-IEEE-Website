<?php 
    $page_title = 'Calendar';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    include 'header.php';
?>

    <style>
        .calendar-box {
            float: left;
            height: 20px;
            width: 140px;
            margin: 0 5px;
            background-color: #547AC4;
            color: white;
            text-align: center;
        }
    </style>

    <div class="well card-1">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div style="margin: 10px auto; width: 600px; height: 20px; font-weight: 600">
                    <div class="calendar-box" style="background-color: #547AC4;">IEEE Events</div>
                    <div class="calendar-box" style="background-color: #55D4C3;">Computer Society</div>
                    <div class="calendar-box" style="background-color: #891DDB;">EMBS</div>
                    <div class="calendar-box" style="background-color: #0D7813;">MTT-S</div>
                </div>
                <div style="margin: 10px auto; width: 600px; height: 20px; font-weight: 600">
                    <div class="calendar-box" style="background-color: #CF5D5D;">PARTIEEE</div>
                    <div class="calendar-box" style="background-color: #6B3304;">Racing</div>
                    <div class="calendar-box" style="background-color: #E8CB4F;">ROV</div>
                    <div class="calendar-box" style="background-color: #333333;">Software Saturdays</div>                    
                </div>
                <?php
                    $calendar_sources = array(
                        array('color' => '2952A3', 'src' => 'd5lo1ojucvmelsk9a54kndq1g8@group.calendar.google.com'), #IEEE Calendar
                        array('color' => '1B887A', 'src' => 'mmi9atsgvigdbhnsf783vtlcv8@group.calendar.google.com'), #Computer Society
                        array('color' => '5229A3', 'src' => 'embspurdue@gmail.com'), #EMBS
                        array('color' => '0D7813', 'src' => 'edv88gqt4b1v7fs6b6gi2bd8f8@group.calendar.google.com'), #MTT-S
                        array('color' => 'A32929', 'src' => 'h8nk778rgq4idlspuf4uevfs84@group.calendar.google.com'), #PARTIEEE
                        array('color' => '6B3304', 'src' => 'cptv9quqhvbder77uuq0n7nsi8@group.calendar.google.com'), #Racing
                        array('color' => 'AB8B00', 'src' => 'ce7l4e2pdhq23tqf3353pfmfp8@group.calendar.google.com'), #ROV 2015-2016
                        array('color' => 'AB8B00', 'src' => '87uv0bmrpiok3ghluf0v4fs5ag@group.calendar.google.com'), #ROV 2016-2017
                        array('color' => 'AB8B00', 'src' => 'iivv0f0bo0lvr1c42tn42g8cck@group.calendar.google.com'), #ROV 2017-2018
                        array('color' => 'AB8B00', 'src' => 'f8etvjugl5m9n2l9lfg134eahg@group.calendar.google.com'), #ROV 2018-2019
                        array('color' => 'AB8B00', 'src' => 'cctk3rdjjlqq56bqnksdb4t2lk@group.calendar.google.com'), #ROV 2019-2020
						array('color' => 'AB8B00', 'src' => 'f9a3kg942is76p8kaf90n643cc@group.calendar.google.com'), #ROV 2020-2021
                        array('color' => '333333', 'src' => 'd606i7l0ahpasvr7gl3abatfi0@group.calendar.google.com')  #Software Sat 2018
                    );
                    $list = "";
                    foreach ($calendar_sources as $cal) {
                        $src = $cal['src'];
                        $color = $cal['color'];
                        $url_encode = "src=".$src."&amp;color=%23".$color."&#10;&amp;";
                        $list .= $url_encode;
                    }

                    $iframe = "https://calendar.google.com/calendar/embed?mode=WEEK&showTitle=0&amp;showPrint=0&amp;height=750&amp;wkst=1&amp;bgcolor=%23F5F5F5&#10;&amp;".$list."ctz=America/New_York";
                    $link = "https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=650&amp;wkst=1&amp;bgcolor=%23ffffff&amp;".$list."ctz=America/New_York";

                ?>
                    <iframe src="<?php echo $iframe ?>" style=" border-width:0" width="1000" height="750" frameborder="0" scrolling="no"></iframe>
                <p>
                    <span style="font-weight: 600; padding-left: 10px;"><a href="<?php echo $link?>" target="_blank">Bigger View</a></span>
                </p>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
