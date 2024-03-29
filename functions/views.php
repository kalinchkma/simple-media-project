<?php

// get header
function getHeader() {
    include_once("./includes/common/header.php");
}

// get footer
function getFooter() {
    include_once("./includes/common/footer.php");
}

// get sidenav
function getSiderNav() {
    include_once("./includes/body-part/side-nav.php");
}

// get create post from
function getCreatePostForm() {
    include_once("./includes/body-part/create-post.php");
}

// render all posts
function getPostBox() {
    include_once("./includes/body-part/posts.php");
}

// get right nav
function getRightNav($user, $message) {
    include_once("./includes/body-part/right-nav.php");
}