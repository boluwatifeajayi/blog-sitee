<?php 

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    include(ROOT_PATH . "/app/helpers/validateUser.php");
    

    $table = 'users';
    $admin_users = selectAll($table, ['admin' => 1]);

    $errors = array();
    $username = '';
    $email = '';
    $password = '';
    $passwordConf = '';
    

    function loginUser($user){
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['admin'] = $user['admin'];
                $_SESSION['message'] = 'You are now logged in';
                $_SESSION['type'] = 'success';
                header('location: ' . BASE_URL . '/index.php');

                if($_SESSION['admin']){
                    header('location: ' . BASE_URL . '/admin/dashboard.php');
                }else{
                    header('location: ' . BASE_URL . '/index.php');
                }
                exit();
                
    }

        if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){
            $errors = validateUser($_POST);

            if(count($errors) === 0){
                unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                if(isset($_POST['admin'])){
                    $_POST['admin'] = 1;
                    $user_id = create($table, $_POST);
                    $_SESSION['message'] = "Admin user created successfully";
                    $_SESSION['type'] = "success";
                    header('location: ' . BASE_URL . '/admin/users/index.php');
                    exit();
                }
                else{
                    $_POST['admin'] = 0;
                    $user_id = create($table, $_POST);
                    $user = selectOne($table, ['id' => $user_id]);
                    loginUser($user);
                }
            }
        
            
        
        else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }        
    }

    if(isset($_POST['login-btn'])){
        $errors = validateLogin($_POST);

        if(count($errors) === 0){
            $user = selectOne($table, ['username' => $_POST['username']]);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                //log user in
                loginUser($user);
            }
            else{
                array_push($errors, 'Wrong Credentials');
            }
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    if(isset($_GET['delete_id'])){
        adminOnly();
        $count = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = "Admin user deleted successfully";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . '/admin/users/index.php');
        exit();
    }
?>