<?php 

    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");
    
    $table = 'topics';

    $id = '';
    $name = '';
    $description = '';

    $topics = selectAll($table);
    //dd($topics);
    
    if(isset($_POST['add-topic'])){
        adminOnly();
        unset($_POST['add-topic']);
         $topic_id = create($table, $_POST);
        
  
         $_SESSION['message'] = 'Topic created successfully';
         $_SESSION['type'] = 'success';
         header('location: ' . BASE_URL . '/admin/topics/index.php');
         
         exit();

    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $topic = selectOne($table, ['id' => $id]);
        $id = $topic['id'];
        $name = $topic['name'];
        $description = $topic['description'];
        }
        if(isset($_GET['del_id'])){
            adminOnly();
            $id = $_GET['del_id'];
            $count = delete($table, $id);
            $_SESSION['message'] = 'Topic deleted successfully';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/topics/index.php');
            exit();

        }

    if(isset($_POST['update-topic'])){
        adminOnly();
        //dd($_POST);
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
         $_SESSION['type'] = 'success';
         header('location: ' . BASE_URL . '/admin/topics/index.php');
    }

?>