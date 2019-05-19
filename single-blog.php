<?php include 'inc/header.php';?>

<!-- Title -->
<title>Single Blog | Leading University Computer Club</title>

<?php
    if (!isset($_GET['id']) || $_GET['id'] == NULL ) {
        header("Location: 404.php");
    } else{
        $id = $_GET['id'];
    }

?>

<!--BREADCRUMP START-->
<section class="breadcrumbSec bg_ash">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumbInner">
                    <h2 class="color_white">Blog</h2>
                    <div class="breadcrumbNav">
                        <a href="index.php">Home</a><span>/</span>
                        <a href="blog.php">Blog</a><span>/</span>
                        <span class="active">Single Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BREADCRUMP END-->

<!--BLOG SINGLE START-->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="singleBlogPage bg_ash">
                    <?php 
                            $query = "select * from tbl_blog where id=$id";
                            $post = $db->select($query);
                            if ($post) {
                                while ($result = $post->fetch_assoc()) {
                        ?>
                    <div class="postThum">
                        <img src="admin/upload/<?php echo $result['image'];?>" alt="">
                    </div>
                    <div class="blogSingleDec">

                        

                        <div class="bsDecTop">
                            <h3 class="blogTitle"><?php echo $result['title'];?></h3>
                            <p class="bDate"><?php echo $fm->formatDate($result['date']); ?></p>
                        </div>
                        <div class="likeView clearfix">
                            <a class="repl" href="#"><i class="fa fa-reply"></i></a>
                            <a href="#"><i class="far fa-heart"></i></a>
                            <h6>152 likes</h6>
                            <h6 class="pull-right">1450 views</h6>
                        </div>
                        <?php echo $result['body'];?>
                    </div>
                <?php } } else { header("Location: 404.php");} ?>
                </div>
                <div class="singleBauthor bg_ash">
                    <img src="images/author/author-01.jpg" alt="">
                    <h3><a class="color_black" href="#">Fahad Ahmed</a></h3>
                    <p>
                        Andouille ground round strip steak, filet mignon pig bacon cow. Spare ribs 
                        porchetta tongue andouille beef ribs. Capicola beef biltong landjaeger.
                    </p>
                    <div class="sicialIcon">
                        <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="gp" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="commentBox bg_ash">
                    <div class="commForm">
                        <form action="#" method="post">
                            <input type="text" placeholder="Full name">
                            <input class="comfEmail" type="email" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <textarea placeholder="Message"></textarea>
                            <input type="submit" value="Send comment">
                        </form>
                    </div>
                    <ol class="commentList">
                        <li>
                            <div class="singleCom">
                                <img src="images/author/comment-01.jpg" alt="">
                                <div class="comHead">
                                    <a class="reply" href="#"><i class="fa fa-reply"></i></a>
                                    <h3 class="comName"><a class="color_black" href="#">Nadia</a></h3>
                                    <p class="comDate"><a href="#">June 23, 2019 AT 15:00</a></p>
                                </div>
                                <p>
                                    Salami corned beef picanha as bacon swine tail kevin andouille
                                    pork belly frankfurter sirloin jerky flank t-bone.
                                </p>
                            </div>
                            <ul class="childCom">
                                <li>
                                    <div class="singleCom">
                                        <img src="images/author/comment-02.jpg" alt="">
                                        <div class="comHead">
                                            <a class="reply" href="#"><i class="fa fa-reply"></i></a>
                                            <h3 class="comName"><a class="color_black" href="#">Farha</a></h3>
                                            <p class="comDate"><a href="#">June 23, 2019 AT 15:00</a></p>
                                        </div>
                                        <p>
                                            Andouille jerky t-bone tenderloin, biltong pork loin chicken short
                                            loin meatloaf salami meatball cow bresaola.
                                        </p>
                                    </div>
                                    <ul class="childCom">
                                        <li>
                                            <div class="singleCom">
                                                <img src="images/author/comment-03.jpg" alt="">
                                                <div class="comHead">
                                                    <a class="reply" href="#"><i class="fa fa-reply"></i></a>
                                                    <h3 class="comName"><a class="color_black" href="#">Nafi</a></h3>
                                                    <p class="comDate"><a href="#">June 23, 2019 AT 15:00</a></p>
                                                </div>
                                                <p>
                                                    Shank capicola pork chop landjaeger pancett swine.
                                                    Cupim pork brela pastrami, jowl bacon beef ribs.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="singleCom">
                                <img src="images/author/comment-04.jpg" alt="">
                                <div class="comHead">
                                    <a class="reply" href="#"><i class="fa fa-reply"></i></a>
                                    <h3 class="comName"><a class="color_black" href="#">Tanvir</a></h3>
                                    <p class="comDate"><a href="#">June 23, 2019 AT 15:00</a></p>
                                </div>
                                <p>
                                    Tenderloin porchetta short ribs, tri-tip sausage swin fatback. 
                                    Bresaola jowl frankfurter, t-bone ham hock leberkas.
                                </p>
                            </div>
                            <ul class="childCom">
                                <li>
                                    <div class="singleCom">
                                        <img src="images/author/comment-05.jpg" alt="">
                                        <div class="comHead">
                                            <a class="reply" href="#"><i class="fa fa-reply"></i></a>
                                            <h3 class="comName"><a class="color_black" href="#">Riya</a></h3>
                                            <p class="comDate"><a href="#">June 23, 2019 AT 15:00</a></p>
                                        </div>
                                        <p>
                                            Biltong pig pork belly, picanha venison brisket frankfurter.
                                            Leberkas brisket beef, ham short ribs biltong.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</section>
<!--BLOG SINGLE END-->

<!-- Footer Start -->
<?php include 'inc/footer.php';?>