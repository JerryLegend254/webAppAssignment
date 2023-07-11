<?php
include_once "partials/header.php";

?>
<link type="text/css" rel="stylesheet" href="css/blog.css" />
<?php
include_once "partials/navBar.php";
if(isset($_GET['author'])){
    session_start();
    $_SESSION["currUser"] = $_GET['author'];
}else{
    $_SESSION["currUser"] = "null";
}

?>


<div class="main">
    <p><?=$_SESSION["currUser"];?></p>
    <div class="featured">
        <p class="titleText">The best JavaScript Frameworks of 2023 so far.</p>
        <div class="category">
            <img src="./images/line.svg" alt="line" />
            <p class="catText">Web Development</p>
        </div>
        <p class="article">JavaScript is one of the most popular programming languages in the world. It is widely
            used for building
            websites, apps and games. It is also the programming language behind many of the world’s most popular
            websites.</p>
        <div class="featuredInfos">
            <div class="featuredInfo">
                <img src="./images/eye.svg" alt="eye" />
                <p class="infoText">1245</p>
            </div>
            <div class="featuredInfo">
                <img src="./images/time.svg" alt="time" />
                <p class="infoText">2 mins</p>
            </div>
            <div class="featuredInfo">
                <img src="./images/calender.svg" alt="calendar" />
                <p class="infoText">May 23, 2023</p>
            </div>
        </div>
    </div>
</div>
<img class="featuredImage" src="./images/bestJsFrmwks.png" alt="best js frameworks" />
<img class="blogSvg" src="./images/blogSvg.svg" alt="blog" />
<img class="blogLogo" src="./images/BlogLogo.svg" alt="logo">

<div class="otherBlogs">
    
    <div class="blogs">
    <div class="recentBlog"><p class="recentTitle"><span class="bolded">Recent </span><span>Blogs</span></p></div>
        <div class="blog">
            <img class="blogImg" src="./images/DeepDive.png" alt="blog photo" />
            <div class="blogInfo">
                <p class="blogBody">By choosing to outsource app development to the right company, you stand to get your app built by people who know...</p>
                <div class="blogInfos">
                    <div class="blogOtherInfo">
                        <img src="./images/time.svg" alt="time" />
                        <p class="otherInfoText">2 mins</p>
                    </div>
                    <div class="blogOtherInfo">
                        <img src="./images/calender.svg" alt="calendar" />
                        <p class="otherInfoText">July 7, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog">
            <img class="blogImg" src="./images/BestApp.png" alt="blog photo" />
            <div class="blogInfo">
                <p class="blogBody">The best app development frameworks in 2023 are the ones that make app development faster and easier...</p>
                <div class="blogInfos">
                    <div class="blogOtherInfo">
                        <img src="./images/time.svg" alt="time" />
                        <p class="otherInfoText">23 mins</p>
                    </div>
                    <div class="blogOtherInfo">
                        <img src="./images/calender.svg" alt="calendar" />
                        <p class="otherInfoText">July 7, 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog">
            <img class="blogImg" src="./images/CloudComp.png" alt="blog photo" />
            <div class="blogInfo">
                <p class="blogBody">Cloud computing has revolutionized the way businesses develop and deploy applications. While all business small...</p>
                <div class="blogInfos">
                    <div class="blogOtherInfo">
                        <img src="./images/time.svg" alt="time" />
                        <p class="otherInfoText">2hrs 5mins</p>
                    </div>
                    <div class="blogOtherInfo">
                        <img src="./images/calender.svg" alt="calendar" />
                        <p class="otherInfoText">July 7, 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



</body>

</html>