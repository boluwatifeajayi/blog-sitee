<?php 
    function validateUser($user)
    {

        $errors = array();

        if(empty($user['username'])){
            array_push($errors, 'Username is reqired');
        }
        if(empty($user['email'])){
            array_push($errors, 'Email is reqired');
        }
        if(empty($user['password'])){
            array_push($errors, 'Password is reqired');
        }
        if($user['passwordConf'] !== $user['password']){
            array_push($errors, 'Passwords do not match');
        }
        $existingUser = selectOne('users', ['email' => $user['email']]);
        if($existingUser){
            array_push($errors, 'Email already Exists');
        }

        return $errors;
    }

     function validateLogin($user)
    {

        $errors = array();

        if(empty($user['username'])){
            array_push($errors, 'Username is reqired');
        }
        
        if(empty($user['password'])){
            array_push($errors, 'Password is reqired');
        }
        
        

        return $errors;
    }



?>