<!DOCTYPE html>
<html lang="en">
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
                        <div class="module">
                            <div class="module-body">
                                <div class="profile-head media">
                                    <a href="#" class="media-avatar pull-left">
                                        <img src="images/user.png">
                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            John Donga <small>Offline</small>
                                        </h4>
                                        <p class="profile-brief">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type.
                                        </p>
                                        <div class="profile-details muted">
                                            <a href="#" class="btn"><i class="icon-plus shaded"></i>Send Friend Request </a>
                                            <a href="#" class="btn"><i class="icon-envelope-alt shaded"></i>Send message </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="profile-tab nav nav-tabs">
                                    <li class="active"><a href="#activity" data-toggle="tab">Feed</a></li>
                                    <li><a href="#friends" data-toggle="tab">Friends</a></li>
                                </ul>
                                <div class="profile-tab-content tab-content">
                                    <div class="tab-pane fade active in" id="activity">
                                        <div class="stream-list">
                                            <div class="media stream">
                                                <a href="#" class="media-avatar medium pull-left">
                                                    <img src="images/user.png">
                                                </a>
                                                <div class="media-body">
                                                    <div class="stream-headline">
                                                        <h5 class="stream-author">
                                                            John Donga <small>08 July, 2014</small>
                                                        </h5>
                                                        <div class="stream-text">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type.
                                                        </div>
                                                        <div class="stream-attachment photo">
                                                            <div class="responsive-photo">
                                                                <img src="images/img.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/.stream-headline-->
                                                    <div class="stream-options">
                                                        <a href="#" class="btn btn-small"><i class="icon-thumbs-up shaded"></i>Like </a>
                                                        <a href="#" class="btn btn-small"><i class="icon-reply shaded"></i>Reply </a><a href="#"
                                                            class="btn btn-small"><i class="icon-retweet shaded"></i>Repost </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.media .stream-->
                                            <div class="media stream">
                                                <a href="#" class="media-avatar medium pull-left">
                                                    <img src="images/user.png">
                                                </a>
                                                <div class="media-body">
                                                    <div class="stream-headline">
                                                        <h5 class="stream-author">
                                                            John Donga <small>08 July, 2014</small>
                                                        </h5>
                                                        <div class="stream-text">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type.
                                                        </div>
                                                        <div class="stream-attachment video">
                                                            <div class="responsive-video">
                                                                <iframe src="//player.vimeo.com/video/20630217" width="560" height="315" frameborder="0"
                                                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                                <p>
                                                                    <a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">
                                                                        Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/.stream-headline-->
                                                    <div class="stream-options">
                                                        <a href="#" class="btn btn-small"><i class="icon-thumbs-up shaded"></i>Like </a>
                                                        <a href="#" class="btn btn-small"><i class="icon-reply shaded"></i>Reply </a><a href="#"
                                                            class="btn btn-small"><i class="icon-retweet shaded"></i>Repost </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.media .stream-->
                                            <div class="media stream">
                                                <a href="#" class="media-avatar medium pull-left">
                                                    <img src="images/user.png">
                                                </a>
                                                <div class="media-body">
                                                    <div class="stream-headline">
                                                        <h5 class="stream-author">
                                                            John Donga <small>08 July, 2014</small>
                                                        </h5>
                                                        <div class="stream-text">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type.
                                                        </div>
                                                    </div>
                                                    <!--/.stream-headline-->
                                                    <div class="stream-options">
                                                        <a href="#" class="btn btn-small"><i class="icon-thumbs-up shaded"></i>Like </a>
                                                        <a href="#" class="btn btn-small"><i class="icon-reply shaded"></i>Reply </a><a href="#"
                                                            class="btn btn-small"><i class="icon-retweet shaded"></i>Repost </a>
                                                    </div>
                                                    <div class="stream-respond">
                                                        <div class="media stream">
                                                            <a href="#" class="media-avatar small pull-left">
                                                                <img src="images/user.png">
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="stream-headline">
                                                                    <h5 class="stream-author">
                                                                        John Donga <small>10 July 14</small>
                                                                    </h5>
                                                                    <div class="stream-text">
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                    </div>
                                                                </div>
                                                                <!--/.stream-headline-->
                                                            </div>
                                                        </div>
                                                        <!--/.media .stream-->
                                                        <div class="media stream">
                                                            <a href="#" class="media-avatar small pull-left">
                                                                <img src="images/user.png">
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="stream-headline">
                                                                    <h5 class="stream-author">
                                                                        John Donga <small>12 July 14</small>
                                                                    </h5>
                                                                    <div class="stream-text">
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                                        Ipsum is simply dummy text.
                                                                    </div>
                                                                </div>
                                                                <!--/.stream-headline-->
                                                            </div>
                                                        </div>
                                                        <!--/.media .stream-->
                                                    </div>
                                                    <!--/.stream-respond-->
                                                </div>
                                            </div>
                                            <!--/.media .stream-->
                                            <div class="media stream">
                                                <a href="#" class="media-avatar medium pull-left">
                                                    <img src="images/user.png">
                                                </a>
                                                <div class="media-body">
                                                    <div class="stream-headline">
                                                        <h5 class="stream-author">
                                                            John Donga <small>08 July, 2014</small>
                                                        </h5>
                                                        <div class="stream-text">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type.
                                                        </div>
                                                    </div>
                                                    <!--/.stream-headline-->
                                                    <div class="stream-options">
                                                        <a href="#" class="btn btn-small"><i class="icon-thumbs-up shaded"></i>Like </a>
                                                        <a href="#" class="btn btn-small"><i class="icon-reply shaded"></i>Reply </a><a href="#"
                                                            class="btn btn-small"><i class="icon-retweet shaded"></i>Repost </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.media .stream-->
                                            <div class="media stream load-more">
                                                <a href="#"><i class="icon-refresh shaded"></i>Load more... </a>
                                            </div>
                                        </div>
                                        <!--/.stream-list-->
                                    </div>
                                    <div class="tab-pane fade" id="friends">
                                        <div class="module-option clearfix">
                                            <form>
                                            <div class="input-append pull-left">
                                                <input type="text" class="span3" placeholder="Filter by name...">
                                                <button type="submit" class="btn">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </div>
                                            </form>
                                            <div class="btn-group pull-right" data-toggle="buttons-radio">
                                                <button type="button" class="btn">
                                                    All</button>
                                                <button type="button" class="btn">
                                                    Male</button>
                                                <button type="button" class="btn">
                                                    Female</button>
                                            </div>
                                        </div>
                                        <div class="module-body">
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga
                                                            </h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="pagination pagination-centered">
                                                <ul>
                                                    <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.module-body-->
                        </div>
                        <!--/.module-->
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
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
