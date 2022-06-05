<?php 
    include 'connection.php';
?>
<?php 
    $id = $_REQUEST['id'];
    $str = "DELETE FROM batch where id=$id";
    if(mysqli_query($conn,$str)){
        header('location:batch.php');
    }
?>