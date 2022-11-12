<!-- '''''''''''''''''''''''''''''''''''index page''''''''''''''''''''''''''''''''''''' -->
<?php
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    // models
    include_once("./models/User.php");
    include_once("./models/Message.php");
    include_once("./models/Session.php");
    include_once("./functions/views.php");
    include_once("./functions/utils.php");

    // redirect to register page if user not login
    indexRedirect();

?>

<!-- page header -->
<?php getHeader(); ?>

<!-- main body -->
<div class="container-fluid">
    <!-- content row start -->
    <div class="row">
       <!-- side nav -->
        <?php getSiderNav(); ?>

        <!-- main content -->
        <div class="offset-3 col-md-5 mid-content">
            <div class="mid-content-box">
               <!-- create post form system -->
               <?php getCreatePostForm(); ?>
               
                <!-- all posts -->
               <?php getRenderAllPosts(); ?>

            </div>
        </div>

        <!-- right content  start-->
        <?php getRightNav(); ?>
        <!-- right content end -->
    </div>
    <!-- content row end -->
</div>


<!-- page footer -->
<?php getFooter(); ?>
