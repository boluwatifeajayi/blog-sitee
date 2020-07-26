<?php include("path.php"); ?>
<?php 
    include(ROOT_PATH . "/app/controllers/users.php");
    
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
    <title>Register</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>"  class="text-input">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" <?php echo $email; ?> class="text-input">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" <?php echo $password; ?> class="text-input">
            </div>
            <div>
                <label for="">Comfirm Password</label>
                <input type="password" name="passwordConf" <?php echo $passwordConf; ?> class="text-input">
            </div>
            <div>
                <button type="submit" class="btn btn-big" name="register-btn">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></a></p>
        </form>
    </div>
    

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