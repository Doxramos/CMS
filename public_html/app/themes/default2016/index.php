<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php LoadActivePlugins("pre"); ?>
    <?php load_asset("font-awesome"); ?>
    <title><?php echo GetPageTitle(); ?></title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <?php LoadThemeCSS(); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php ThemeNav("nav", "default.inc"); ?>

<!-- Image Background Page Header -->
<!-- Note: The background image is set within the business-casual.css file. -->
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tagline"><?php echo SLOGAN; ?></h1>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <hr>
<div class="col-xs-10">
    <div class="panel panel-default">
        <div class="panel-heading"><h2><?php LoadContent("title"); ?></h2>
        </div>
        <div class="panel-body"> <?php LoadContent("body"); ?>
        </div>
    </div>
</div>
    <div class="col-xs-2">
        <!--TODO Create Module Loader, this location = sidebar_right-->
    </div>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p><?php
                    if(TWITTER != "") {
                        echo "<i class='fa fa-twitter fa-3x'></i>";
                    }
                    if(FACEBOOK != "") {
                        echo "<i class='fa fa-facebook fa-3x'></i>";
                    }
                    ?></p>
                <p><?php echo ParseCopyrightYear(CopyRight); ?></p>

            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<?php load_asset("jquery"); ?>
<!-- Bootstrap Core JavaScript -->
<?php LoadThemeJS("js/bootstrap.js", "single"); ?>
<?php LoadActivePlugins("post"); ?>

</body>

</html>
<!--TODO Push footer to bottom of page-->