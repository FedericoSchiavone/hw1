<?php
    /*******************************************************
        Inserisce nel database il post da pubblicare 
    ********************************************************/
    require_once 'auth.php';
    if (!$userid = checkAuth()) exit;

    save();

    function save() {
        global $dbconfig, $userid;

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        
        # Costruisco la query
        $userid = mysqli_real_escape_string($conn, $userid);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        $url = mysqli_real_escape_string($conn, $_POST['url']);
        # check if book is already present for user
        $query = "SELECT * FROM books WHERE user = '$userid' AND id = '$id'";
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
        # if book is already present, do nothing
        if(mysqli_num_rows($res) > 0) {
            echo json_encode(array('ok' => true));
            exit;
        }

        # Eseguo
        $query = "INSERT INTO books(id, user, content) VALUES('$id', '$userid', JSON_OBJECT('title', '$title', 'author', '$author', 'image', '$image', 'url', '$url'))";
        error_log($query);
        # Se corretta, ritorna un JSON con {ok: true}
        if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
            echo json_encode(array('ok' => true));
            exit;
        }

        mysqli_close($conn);
        echo json_encode(array('ok' => false));
    }
?>