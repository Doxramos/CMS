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
                <h1 class="tagline">Business Name or Tagline</h1>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <hr>

    <div class="row">
        <div class="col-sm-8">
            <h2><?php LoadContent("title"); ?></h2>
            <?php LoadContent("body"); ?>
        </div>
        <div class="col-sm-4">
            <h2>Contact Us</h2>
            <address>
                <strong>Start Bootstrap</strong>
                <br>3481 Melrose Place
                <br>Beverly Hills, CA 90210
                <br>
            </address>
            <address>
                <abbr title="Phone">P:</abbr><?php echo ContactNO; ?>
                <br>
                <abbr title="Email">E:</abbr> <a href="mailto:<?php echo Webmaster; ?>"><?php echo Webmaster; ?></a>
            </address>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <div class="row">
        <div class="col-sm-4">
            <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
            <h2>Marketing Box #1</h2>
            <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
        </div>
        <div class="col-sm-4">
            <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
            <h2>Marketing Box #2</h2>
            <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <div class="col-sm-4">
            <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
            <h2>Marketing Box #3</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
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
