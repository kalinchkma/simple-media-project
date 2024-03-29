<?php 
include_once("./functions/utils.php");
// show 404 if not login
notLogin404();
?>

<?php
    include_once("./functions/views.php");
?>
<!-- '''''''''''''''''''''''''''''''''''profile page''''''''''''''''''''''''''''''''''''' -->

<!-- page header -->
<?php getHeader(); ?>
<!-- set page title -->
<script>
    document.title = "Profile";
</script>
<!-- main body -->
<div class="container-fluid">
    <!-- content row start -->
    <div class="row">
       <!-- side nav -->
        <?php getSiderNav(); ?>
        
        <!-- main content -->
        <div class="offset-3 col-md-8 mid-content">
            <div class="mid-content-box profile-content">
                <!-- profile box -->
                <div class="profile-info">
                    <div class="profile-image">
                        <div class="avatar">
                            <?php 
                                if($_SESSION['avatar']) {
                                    echo '<img src="'.$_SESSION['avatar'].'" alt="">';
                                } else {
                                    echo ' <img src="./public/images/default-avatar.png" alt="">';
                                }
                            ?>
                           
                        </div>
                    </div>
                    <div class="profile-details">
                        <h3><?php echo $_SESSION['name'] ?> <a href="edit-profile.php">Edit profile</a> </h3>
                        <span class="post-count">
                        <?php
                            echo count($_SESSION['posts']);
                        ?> posts</span>

                        <!-- create post form box-->
                        <div class="create-post">
                            <!-- create post box -->
                            <div class="content-box">
                                <div class="create-post-box">
                                        <button id="create-post" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                                            create post
                                        </button>
                                        <!-- create post model -->
                                      <?php include_once("./includes/body-part/create-post-modal.php") ?>
                                    <!-- create post model end -->   
                                </div>
                                <!-- create post box end -->
                            </div>
                            <!-- create post form box end -->
                        </div>
                     <!-- create post box end -->
                    </div>
                </div>
               <!-- create post form system -->
            <!-- all post that belongs to current user -->
            <div class="current-user-post-only">
                <!-- all posts -->
                <?php getPostBox();  ?>

                <?php
               
                // all posts for particular user
                $all_post = NULL;
              
                $all_post = $post->findAllByCondition("WHERE user_id=".$_SESSION['id']);
                arsort($all_post);
                foreach($all_post as $post) {
                    new_post($post, $user, $comment, "profile");
                }

                if($all_post == NULL) {
                    echo "<center style='padding: 50px 0px'>You don't have any activity on this app!!</center>";
                }
               
               ?>


            </div>
         
               
              
        <!-- main box container end -->
            </div>
        </div>

      
    </div>
    <!-- content row end -->
</div>


<!-- page footer -->
<?php getFooter(); ?>
