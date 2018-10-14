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
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Typography</h3>
                            </div>
                            <div class="module-body">
                                <section class="docs">
                                    <h2>
                                        Headings</h2>
                                    <p>
                                        All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>
                                    <div class="docs-example">
                                        <h1>
                                            h1. Heading 1</h1>
                                        <h2>
                                            h2. Heading 2</h2>
                                        <h3>
                                            h3. Heading 3</h3>
                                        <h4>
                                            h4. Heading 4</h4>
                                        <h5>
                                            h5. Heading 5</h5>
                                        <h6>
                                            h6. Heading 6</h6>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Body copy</h2>
                                    <p>
                                        This theme's global default <code>font-size</code> is <strong>13px</strong>, <code>font-family</code>
                                        is <strong>'Open Sans', Arial, sans-serif</strong>, with a <code>line-height</code>
                                        of <strong>20px</strong>. This is applied to the <code>&lt;body&gt;</code> and all
                                        paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin
                                        of half their line-height (10px by default).</p>
                                    <div class="docs-example">
                                        <p>
                                            Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh
                                            ultricies vehicula.</p>
                                        <p>
                                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                            mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo
                                            luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper
                                            nulla non metus auctor fringilla.</p>
                                        <p>
                                            Maecenas sed diam eget risus varius blandit sit et non magna. Donec id elit non
                                            mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor
                                            ligula, eget lacinia odio sem nec elit.</p>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Lead Body copy</h2>
                                    <p>
                                        Make a paragraph stand out by adding <code>.lead</code>.</p>
                                    <div class="docs-example">
                                        <p class="lead">
                                            Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh
                                            ultricies vehicula.</p>
                                        <p>
                                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                            mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo
                                            luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper
                                            nulla non metus auctor fringilla.</p>
                                        <p>
                                            Maecenas sed diam eget risus varius blandit sit et non magna. Donec id elit non
                                            mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor
                                            ligula, eget lacinia odio sem nec elit.</p>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Emphasis</h2>
                                    <p>
                                        Make use of HTML's default emphasis tags with lightweight styles. For de-emphasizing
                                        inline or blocks of text, use the <code>&lt;small&gt;</code> tag.</p>
                                    <div class="docs-example">
                                        <p>
                                            Standard text size.</p>
                                        <p>
                                            <small>This line of text is meant to be treated as fine print.</small></p>
                                        <pre class="pre"><span class="tag">&lt;p&gt;</span><span class="pln"> </span><span
                                            class="tag">&lt;small&gt;</span><span class="pln">This line of text is meant to be treated
                                                as fine print.</span><span class="tag">&lt;/small&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Bold</h2>
                                    <p>
                                        For emphasizing a snippet of text with a heavier font-weight.</p>
                                    <div class="docs-example">
                                        <p>
                                            The following snippet of text is <strong>rendered as bold text</strong>.</p>
                                        <pre class="pre"><span class="tag">&lt;p&gt;</span><span class="pln"> </span>The following snippet of text is
<span class="tag">&lt;strong&gt;</span><span class="pln">rendered as bold text</span><span
    class="tag">&lt;/strong&gt;</span>.<span class="pln"> </span><span class="tag">&lt;/p&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Italics</h2>
                                    <p>
                                        For emphasizing a snippet of text with italics.</p>
                                    <div class="docs-example">
                                        <p>
                                            The following snippet of text is <em>rendered as italicized text</em>.</p>
                                        <pre class="pre"><span class="tag">&lt;p&gt;</span><span class="pln"> </span>The following snippet of text is
<span class="tag">&lt;em&gt;</span><span class="pln">rendered as italicized text</span><span
    class="tag">&lt;/em&gt;</span>.<span class="pln"> </span><span class="tag">&lt;/p&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Emphasis classes</h2>
                                    <p>
                                        Convey meaning through color with a handful of emphasis utility classes.</p>
                                    <div class="docs-example">
                                        <p class="muted">
                                            Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        <p class="text-warning">
                                            Etiam porta sem malesuada magna mollis euismod.</p>
                                        <p class="text-error">
                                            Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p class="text-info">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
                                        <p class="text-success">
                                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        <pre class="pre"><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">
                                            class</span><span class="pun">=</span><span class="atv">"muted"</span><span class="tag">&gt;</span><span
                                                class="pln">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</span><span
                                                    class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span
    class="pun">=</span><span class="atv">"text-warning"</span><span class="tag">&gt;</span><span
        class="pln">Etiam porta sem malesuada magna mollis euismod.</span><span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span
    class="pun">=</span><span class="atv">"text-error"</span><span class="tag">&gt;</span><span
        class="pln">Donec ullamcorper nulla non metus auctor fringilla.</span><span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span
    class="pun">=</span><span class="atv">"text-info"</span><span class="tag">&gt;</span><span
        class="pln">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</span><span
            class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span
    class="pun">=</span><span class="atv">"text-success"</span><span class="tag">&gt;</span><span
        class="pln">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</span><span
            class="tag">&lt;/p&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Blockquotes</h2>
                                    <p>
                                        For quoting blocks of content from another source within your document.</p>
                                    <h3>
                                        Default</h3>
                                    <p>
                                        Wrap <code>&lt;blockquote&gt;</code> around any
                                        <abbr title="HyperText Markup Language">
                                            HTML</abbr>
                                        as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
                                    <div class="docs-example">
                                        <blockquote>
                                            <p>
                                                Lorem ipsum dolor sit et, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        </blockquote>
                                        <pre class="pre"><span class="tag">&lt;blockquote&gt;</span><span class="pln"> </span>
<span class="tag">&lt;p&gt;</span><span class="pln">Lorem ipsum dolor sit et, consectetur
    adipiscing elit. Integer posuere erat a ante.</span><span class="tag">&lt;/p&gt;</span>.<span
        class="pln"> </span><span class="tag">&lt;/blockquote&gt;</span></pre>
                                    </div>
                                    <br />
                                    <h3>
                                        Naming a source</h3>
                                    <p>
                                        Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of
                                        the source work in <code>&lt;cite&gt;</code>.</p>
                                    <div class="docs-example">
                                        <blockquote>
                                            <p>
                                                Lorem ipsum dolor sit et, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <small>Someone famous</small>
                                        </blockquote>
                                        <pre class="pre"><span class="tag">&lt;blockquote&gt;</span><span class="pln"> </span>
<span class="tag">&lt;p&gt;</span><span class="pln">Lorem ipsum dolor sit et, consectetur
    adipiscing elit. Integer posuere erat a ante.</span><span class="tag">&lt;/p&gt;</span>.<span
        class="pln"> </span><span class="tag">&lt;small&gt;</span><span class="pln">Someone
            famous</span><span class="tag">&lt;/small&gt;</span>.<span class="pln"> </span><span
                class="tag">&lt;/blockquote&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Lists</h2>
                                    <h3>
                                        Unordered</h3>
                                    <p>
                                        A list of items in which the order does <em>not</em> explicitly matter.</p>
                                    <div class="docs-example">
                                        <ul>
                                            <li>Lorem ipsum dolor sit et</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                            <li>Nulla volutpat aliquam velit
                                                <ul>
                                                    <li>Phasellus iaculis neque</li>
                                                    <li>Purus sodales ultricies</li>
                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                    <li>Ac tristique libero volutpat at</li>
                                                </ul>
                                            </li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                            <li>Aenean sit et erat nunc</li>
                                            <li>Eget porttitor lorem</li>
                                        </ul>
                                        <pre class="pre"><span class="tag">&lt;ul&gt;</span>
<span class="pln"> </span><span class="tag">&lt;li&gt;</span><span class="pln">...</span><span
    class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span></pre>
                                    </div>
                                    <br />
                                    <h3>
                                        Ordered</h3>
                                    <p>
                                        A list of items in which the order <em>does</em> explicitly matter.</p>
                                    <div class="docs-example">
                                        <ol>
                                            <li>Lorem ipsum dolor sit et</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                            <li>Aenean sit et erat nunc</li>
                                            <li>Eget porttitor lorem</li>
                                        </ol>
                                        <pre class="pre"><span class="tag">&lt;ol&gt;</span>
<span class="pln"> </span><span class="tag">&lt;li&gt;</span><span class="pln">...</span><span
    class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ol&gt;</span></pre>
                                    </div>
                                    <br />
                                    <h3>
                                        Unstyled</h3>
                                    <p>
                                        Remove the default <code>list-style</code> and left padding on list items (immediate
                                        children only).</p>
                                    <div class="docs-example">
                                        <ul class="unstyled">
                                            <li>Lorem ipsum dolor sit et</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                            <li>Aenean sit et erat nunc</li>
                                            <li>Eget porttitor lorem</li>
                                        </ul>
                                        <pre class="pre"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">
                                            class</span><span class="pun">=</span><span class="atv">"unstyled"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;li&gt;</span><span class="pln">...</span><span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ol&gt;</span></pre>
                                    </div>
                                    <br />
                                    <h3>
                                        Inline</h3>
                                    <p>
                                        Place all list items on a single line with <code>inline-block</code> and some light
                                        padding.</p>
                                    <div class="docs-example">
                                        <ul class="inline">
                                            <li>Lorem ipsum dolor sit et</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                        </ul>
                                        <pre class="pre"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">
                                            class</span><span class="pun">=</span><span class="atv">"inline"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;li&gt;</span><span class="pln">...</span><span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ol&gt;</span></pre>
                                    </div>
                                </section>
                                <section class="docs">
                                    <h2>
                                        Description</h2>
                                    <p>
                                        A list of terms with their associated descriptions.</p>
                                    <div class="docs-example">
                                        <dl>
                                            <dt>Description lists</dt>
                                            <dd>
                                                A description list is perfect for defining terms.</dd>
                                            <dt>Euismod</dt>
                                            <dd>
                                                Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            <dd>
                                                Donec id elit non mi porta gravida at eget metus.</dd>
                                            <dt>Malesuada porta</dt>
                                            <dd>
                                                Etiam porta sem malesuada magna mollis euismod.</dd>
                                        </dl>
                                        <pre class="pre"><span class="tag">&lt;dl&gt;</span>
  <span class="tag">&lt;dt&gt;</span><span class="pln">...</span><span class="tag">&lt;/dt&gt;</span>
  <span class="tag">&lt;dd&gt;</span><span class="pln">...</span><span class="tag">&lt;/dd&gt;</span>
<span class="tag">&lt;/dl&gt;</span></pre>
                                    </div>
                                    <br />
                                    <h3>
                                        Horizontal description</h3>
                                    <p>
                                        A list of terms with their associated descriptions.</p>
                                    <div class="docs-example">
                                        <dl class="dl-horizontal">
                                            <dt>Description lists</dt>
                                            <dd>
                                                A description list is perfect for defining terms.</dd>
                                            <dt>Euismod</dt>
                                            <dd>
                                                Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            <dd>
                                                Donec id elit non mi porta gravida at eget metus.</dd>
                                            <dt>Malesuada porta</dt>
                                            <dd>
                                                Etiam porta sem malesuada magna mollis euismod.</dd>
                                        </dl>
                                        <pre class="pre"><span class="tag">&lt;dl</span><span class="pln"> </span><span class="atn">
                                            class</span><span class="pun">=</span><span class="atv">"dl-horizontal"</span><span
                                                class="tag">&gt;</span>
  <span class="tag">&lt;dt&gt;</span><span class="pln">...</span><span class="tag">&lt;/dt&gt;</span>
  <span class="tag">&lt;dd&gt;</span><span class="pln">...</span><span class="tag">&lt;/dd&gt;</span>
<span class="tag">&lt;/dl&gt;</span></pre>
                                    </div>
                                </section>
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
