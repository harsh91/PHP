<?php

    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    if(array_key_exists('id', $_GET) && !empty($_GET['id'])) {
        //Instantiate DB & connect
        $database = new Database();
        $db = $database->connect();

        //Instantiate blog post object
        $post = new Post($db);
        $post->id = $_GET['id'];

        // Blog post query
        $result = $post->read_single();
        if($post->title != null) {
            echo json_encode(array('data'=>$post));
        } else {
            echo json_encode(array('message'=> 'No post'));
        }
    } else {
        echo "ID parameter missing!";
    }