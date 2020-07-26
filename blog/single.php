<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');


if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');

$posts = selectAll('posts', ['published' => 1]);


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
    <title><?php echo $post['title']; ?> | BoluInspires</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="page-wrapper">
       
        <!--content-->
        <div class="content clearfix">
            <div class="main-content-wrapper">

            
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <div>
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-img" style="width: 100%; height: 300px;">
                    
                </div>
                
                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
            </div>
            </div>
            <!--sidebar-->

            <div class="sidebar single">
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
                            <h4><?php echo $p['title']; ?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>
                    
                    

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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>