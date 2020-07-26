<?php include("../../path.php"); ?>
<?php 
    include(ROOT_PATH . "/app/controllers/topics.php");
    adminOnly();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Section - Edit Topic</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--amin page wrapper-->
    <div class="admin-wrapper">
        <!--admin content-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!--admin content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topic</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Topic</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-input">
                    <div>
                        <label>Name</label>
                        <input type="text" name="title" value="<?php echo $name; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="body" placeholder="<?php echo $description; ?>" id="body" cols="50"></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>