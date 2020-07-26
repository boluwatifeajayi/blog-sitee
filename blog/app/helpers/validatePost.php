<?php 
    function validatePost($post)
    {

        $errors = array();

        if(empty($post['title'])){
            array_push($errors, 'Username is reqired');
        }
        if(empty($post['email'])){
            array_push($errors, 'Title is reqired');
        }
        if(empty($post['topic_id'])){
            array_push($errors, 'Topic is reqired');
        }
        $existingPost = selectOne('title', ['title' => $post['title']]);
        if($existingPost){
            array_push($errors, 'Post already Exists With That Title');
        }

        return $errors;
    }

     


?>
