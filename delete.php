<?php 
    include "includes/conn_db.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM `crude` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: index.php?msg=Record deleted successfully");
        }
        else{
            echo "failed:" . mysqli_error($conn);
        } ?>