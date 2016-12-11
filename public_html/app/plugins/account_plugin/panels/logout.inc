<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/9/2016
 * Time: 8:45 AM
 */
?>
Hello
<script>
</script>
<?php
if(IsOnline() == true) {
    echo "Logging Out";

    ?>
    <p>You will be redirected in <span id="counter">10</span> second(s).</p>
<script>
    CallLogout();
</script>
    <?php
}