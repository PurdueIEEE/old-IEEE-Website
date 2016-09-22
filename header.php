<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?> — Purdue IEEE</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/bootstrap.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="/assets/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!--favicon link-->
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.ieee.org/ucm/groups/webassets/@ieee/@web/@org/documents/images/ieee_apple_touch_icon.png">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if ($display_back_button) { ?>
                <a href="/"><button type="button" class="navbar-left btn btn-link btn-dark" style="height: 50px; padding: 0px 15px; font-size: 18px; line-height: 20px; float: left;" aria-label="Back">
                    <i class="material-icons" style="color:white; font-size: 32px; margin-top: 4px;">arrow_back</i>
                </button></a>
                <?php } ?>
                <!--<img alt="Brand" src="...">-->
                <a class="navbar-brand" href="#">
                    <b><?php echo $title;?></b>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/index.php">Home</a>
                    </li>
                    <li>
                        <a href="/about.php">About</a>
                    </li>
                    <li>
                        <a href="/calendar.php">Calendar</a>
                    </li>
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown">Committees<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/learning/">Learning</a>
                            </li>
                            <li>
                                <a href="/professional/">Professional</a>
                            </li>
                            <li>
                                <a href="/social/">Social</a>
                            </li>
                            <li>
                                <a href="/technical/">Technical</a>
                            </li>
                            <hr />
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
                        </ul>
                    </li>
                    <li>
                        <a href="/dues.php">Dues</a>
                    </li>
                    <li>
                        <a href="/signup.php">Join Mailing Lists</a>
                    </li>
                    <li>
                        <a href="/officers/">Officers</a>
                    </li>
                    <li>
                        <a href="/constitution.php">Constitution</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Page Content -->
<div class="container">
