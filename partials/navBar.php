<?php
require "config/dbConn.php";
?>
</head>

<body>
<div class="navBar">
    <div class="logoDiv">
        <a href="<?= ROOT_URL ?>">
            <img class="logo" src="./images/LogoItem.svg" alt="logo">
        </a>
    </div>
    <div class="links">
        <a href="<?= ROOT_URL ?>index.php">Home</a>
        <a href="<?= ROOT_URL ?>founder.php">Founder</a>
        <a href="<?= ROOT_URL ?>viewBlog.php">Blog</a>
        <a href="<?= ROOT_URL ?>about.php">About Us</a>
        <a href="<?= ROOT_URL ?>projects.php">Projects</a>
        <a id="contact" href="<?= ROOT_URL ?>contactUs.php">Contact Us</a>
        <a id="signUp" href="<?= ROOT_URL ?>signUp.php">Sign Up</a>
        <a id="post" href="<?= ROOT_URL ?>postBlog.php">Add Blog</a>
        <img class="avatar" src="./images/avatar.jpg" alt="avatar" />

    </div>
</div>