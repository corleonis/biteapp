<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <base href="http://alex-box/bite/"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div class="container-narrow">

    <div class="masthead">
        <ul class="nav nav-pills pull-right">
            <li class="active"><a href=".">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Admin
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="admin.html">New lunch</a></li>
                    <li><a href="list-all.html">List all</a></li>
                </ul>
            </li>
        </ul>
        <h3 class="muted"><i class="icon-food"></i> BiteApp</h3>
    </div>

    <hr>

    <div class="jumbotron">
        <?php $quote = json_decode(file_get_contents('http://alex-box/bite/quotes.php')); ?>
        <h1><?php echo $quote->author; ?></h1>
        <p class="lead"><?php echo $quote->quote; ?></p>
        <a class="btn btn-large btn-success" href="."><i class="icon-refresh"></i></a>
    </div>

    <hr>

    <div class="row-fluid lunch-box">
        <div class="span12">
            <h2><a href=""#">Best Friday lunch ever!</a></h2>

            <strong>Date:</strong> <span class="lunch-date">20 Aug 2013</span>

            <div class="row-fluid">
                <div class="span6">
                    <h3>Pick food</h3>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios1" value="1" checked>
                      Pizza
                    </label>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios2" value="2">
                        Burrito
                    </label>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios3" value="3">
                        Thai
                    </label>
                </div>

                <div class="span6">
                    <h3>Extras</h3>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios1" value="1" checked>
                      Salad
                    </label>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios2" value="2">
                        Wrap
                    </label>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios3" value="3">
                        Rice
                    </label>
                </div>

                <div class="row-fluid ">
                    <div class="span12">
                        <input type="text" name="name" id="name" class="pull-left" placeholder="Name" />
                        <input type="email" name="email" id="email" class="pull-left" placeholder="Email" />
                        <button type="submit" class="btn pull-right">
                            <i class="icon-food"></i> Munch it!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="footer">
        <p><i class="icon-tint"></i> MOO.COM 2013</p>
    </div>

</div>
<!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/jquery.hotkeys.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-wysiwyg.js"></script>
<script src="js/underscore-min.js"></script>
<script src="js/backbone-min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
