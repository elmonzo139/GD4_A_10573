<?php

if (isset($_POST['editmovie'])) {

    include('../db.php');
    $id=$_REQUEST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
    if(empty($name) OR empty($genre) OR empty($realease) OR empty($season) OR empty($synopsis)){
        echo
            '<script>
        alert("Edit Movie Failed --> EMPTY INPUT");
        window.location = "../page/listMoviesPage.php"
        </script>';
    }else{ 
        
        $query = mysqli_query(
            $con,
            "UPDATE movies SET name = '".$name."', genre = '".$genre."', realease = '".$realease."', synopsis = '".$synopsis."' WHERE id  = ".$id.""
        )
            or die(mysqli_error($con));
        if ($query) {
            echo
            '<script>
    alert("Edit Movie Success");
    window.location = "../page/listMoviesPage.php"
    </script>';
        } else {
            echo
            '<script>
    alert("Edit Movie Failed");
    </script>';
        }
    }
    
} else {
    echo
    '<script>
window.history.back()
</script>';
}
?>