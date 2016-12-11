<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/8/2016
 * Time: 9:15 AM
 */
echo '<script>
           var ajaxURL = "'. PluginURL(ACCOUNT_PLUGIN_PATH) .'" + "/functions.php";
      </script>';
?>
<script>
   $("#logout").click(function(e) {
       e.preventDefault();
       Logout();
   })
    $("#login_form_action").submit(function(e) {
        e.preventDefault();
        LoginForm();
    });
   function LoginForm() {
       $.ajax({
           url : ajaxURL,
           type: "POST",
           data : $("#login_fmorm_action").serialize(),
           beforeSend: function() {
             $("#login_error").hide();
             $("#login_cog").show();
           },
           success: function(data, textStatus, jqXHR)
           {
               $("#login_cog").hide();
               if(isNaN(data)) {
                   $("#login_error").show();
                   $("#login_error").html(data);
               } else {
                   location.reload();
               }
           },
           error: function (jqXHR, textStatus, errorThrown)
           {

           }
       });
   }
   function Logout() {
       $.ajax({
           url: ajaxURL,
           type: "POST",
           data: "process=logout",
           success: function(data) {
               location.reload();
           }
       });
   }
       function CallLogout() {
           var i = document.getElementById('counter');
           if (parseInt(i.innerHTML)<=0) {
               location.href = '/';
           }
           i.innerHTML = parseInt(i.innerHTML)-1;
       }
   setInterval(function(){ CallLogout(); },1000);
</script>
<!--TODO Change Logout Function to automatic on Page Visit. Remove Jquery req -->