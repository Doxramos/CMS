<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/8/2016
 * Time: 4:17 PM
 */
if(IsOnline() == true) {
    echo "You have Successfully Logged In";

    ?>

    <?php
} else {
?>
<style>
    .panel-heading {
        padding: 5px 15px;
    }

    .panel-footer {
        padding: 1px 15px;
        color: #A0A0A0;
    }

    .profile-img {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
</style>
<div class="col-sm-4 col-md-8 col-md-offset-0">

<div class="panel panel-default">
    <div class="panel-heading">
        <strong> Sign in to continue</strong>
    </div>
    <div class="panel-body">
        <form role="form" action="#" method="POST" id="login_form_action">
            <fieldset>
                <div class="row">
                    <div class="center-block">
                        <img class="profile-img"
                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                        <div class="form-group">
                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                        </div>
                        <div class="text-center" id="login_cog" style="display:none"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                        <div id="login_error" class="alert alert-danger text-center" style="display:none"><b>Test</b></div>
                    </div>
                </div>
            </fieldset>
            <input type="hidden" name="process" id="process" value="login">
        </form>
    </div>
    <div class="panel-footer ">
        Don't have an account! <a href="#" onClick=""> Sign Up Here </a>
    </div>
</div>
</div>
<?php }