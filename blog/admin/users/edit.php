<?php include("../../path.php");
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
    <title>Admin Section - Edit User</title>
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
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <form action="create.html" method="post">
                    <div>
                        <label for="">Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label for="">Comfirm Password</label>
                        <input type="password" name="passwordConf" class="text-input">
                    </div>
                    <div>
                        <label for="topic">Role</label>
                        <select name="role" class="text-input">
                            <option value="author">Poetry</option>
                            <option value="admin">Life examples</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-big">Edit User</button>
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