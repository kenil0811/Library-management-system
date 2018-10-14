<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Edmin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.php"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.php"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.php"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.php"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.php"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Message</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Inbox</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Inbox(11)</a></li>
                                                <li><a href="#">Sent</a></li>
                                                <li><a href="#">Draft(2)</a></li>
                                                <li><a href="#">Trash</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div>
                                </div>
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Sender
                                                </td>
                                                <td class="cell-title">
                                                    Subject
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    Date
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Sample Work
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Test Title
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:01
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Facebook
                                                </td>
                                                <td class="cell-title">
                                                    Dongi sents you a friend request!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    23:58
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Something
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    22:17
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Someone wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 21
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Doe
                                                </td>
                                                <td class="cell-title">
                                                    Doe wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Social Network
                                                </td>
                                                <td class="cell-title">
                                                    An example message from a social network
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Sample Work
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Test Title
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:01
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Facebook
                                                </td>
                                                <td class="cell-title">
                                                    Dongi sents you a friend request!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    23:58
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Something
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    22:17
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Someone wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 21
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Doe
                                                </td>
                                                <td class="cell-title">
                                                    Doe wants to talk to you!
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Social Network
                                                </td>
                                                <td class="cell-title">
                                                    An example message from a social network
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    May 15
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Greepit.com
                                                </td>
                                                <td class="cell-title">
                                                    An email from Greepit.com
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 12
                                                </td>
                                            </tr>
                                            <tr class="read starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    EGrappler.com
                                                </td>
                                                <td class="cell-title">
                                                    An email from EGrappler.com
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 11
                                                </td>
                                            </tr>
                                            <tr class="read">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    An unread message
                                                </td>
                                                <td class="cell-title">
                                                    This is how an unread message looks alike.
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip-no"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    Jan 10
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
