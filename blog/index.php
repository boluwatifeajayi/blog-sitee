<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");


$posts = array();
$postTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostByTopicId($_GET['t_id']);
    $postTitle = "You searched for posts under '" . $_GET['name'] . "'";

}

else if(isset($_POST['search-term'])){
    $postTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
}
else{
    $posts = getPublishedPosts();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/message.php"); ?>
    <div class="page-wrapper">
        <!--post slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">


            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4>
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                            <i class="fa fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        </h4>
                    </div>
                </div>
            <?php endforeach; ?>

                
                
            </div>
        </div>
        <!--content-->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postTitle ?></h1>

                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                        <i class="fa fa-user"> <?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="fa fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
                
            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">

                    </form>
                </div>
                <div class="section topic">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <!-- footer-->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
</body>
</html>