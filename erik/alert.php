<?php
if (isset($_SESSION["alert"])){ ?>
<div class="alert alert-Perhatian">
    <?php echo $_SESSION["alert"] ?>
</div>
<?php
unset($_SESSION["alert"]);
}
?>