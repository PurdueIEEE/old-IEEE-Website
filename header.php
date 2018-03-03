<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--
    Page title is set dynamically. Do not modify.
    window_title = (page_title ? page_title + ' - ') + site_title + -->
    <title><?php echo (isset($page_title) ? ($page_title.' — ') : '') . $site_title; ?></title>

    <link href="/assets/bootstrap.css" rel="stylesheet">
    <script src="/assets/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.ieee.org/ucm/groups/webassets/@ieee/@web/@org/documents/images/ieee_apple_touch_icon.png">
    <link href="gradient.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header" style="margin-left: 0">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/" title="Purdue IEEE">
                <div type="button" class="navbar-left btn btn-link btn-dark" style="height: 50px; padding: 0px 15px; font-size: 18px; line-height: 20px; float: left; min-width: 0; padding-left: 0;" aria-label="Back">
                    <img src="/images/IEEE-Kite.svg" style="height: 32px; margin-top: 8px">
                </div>
                </a>
                <a class="navbar-brand" href="<?php echo $site_index;?>">
                    <?php /*
                     * Site title is set dynamically. Do not modify.
                     * The site title indicates the current navigational scope.
                     */ ?>
                    <b><?php echo $site_title;?></b>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <!-- BEGIN TABS -->
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/about.php">About IEEE</a>
                            </li>
                            <li>
                                <a href="/officers/">Officers</a>
                            </li>
                            <li>
                                <a href="/awardees/">Award Winners</a>
                            </li>
                            <li>
                                <a href="/constitution-ieee.pdf">Constitution</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/calendar.php">Calendar</a>
                    </li>
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown">Committees<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">
                                General
                            </li>
                            <li>
                                <a href="/learning/">Learning</a>
                            </li>
                            <li>
                                <a href="/IR/">Industrial Relations</a>
                            </li>
                            <li>
                                <a href="/social/">Social</a>
                            </li>
                            <li>
                                <a href="/growth/">Growth &amp Engagement</a>
                            </li>
                            <hr />
                            <li class="dropdown-header">
                                Technical
                            </li>
                            <li>
                                <a href="/partieee/">Aerial Robotics</a>
                            </li>
                            <li>
                                <a href="/csociety/">Computer Society</a>
                            </li>
                            <li>
                                <a href="/embs/">EMBS</a>
                            </li>
                            <li>
                                <a href="/mtts/">MTT-S</a>
                            </li>
                            <li>
                                <a href="/racing/">Racing</a>
                            </li>
                            <li>
                                <a href="/rov/">ROV</a>
                            </li>
                            <hr/>
                            <li class="dropdown-header">
                                Events
                            </li>
                            <li>
                                <a href="/software/">Software Saturdays</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/join.php">Join</a>
                    </li>
                    <!-- END TABS -->

                </ul>
            </div>
        </div>
    </nav>
<div class="container" style="padding-top: 10px;">
