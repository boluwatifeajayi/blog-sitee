<?php 
    function validateTopic($topic)
    {

        $errors = array();

        if(empty($topic['name'])){
            array_push($errors, 'name is reqired');
        }
        
        $existingTopic = selectOne('topic', ['name' => $topic['name']]);
        if(isset($existingTopic)){
            array_push($errors, 'Topic already Exists');
        }

        return $errors;
    }

    
?>