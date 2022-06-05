<?php 
    include 'connection.php';
?>
<?php 
    $id = $_REQUEST['id'];
    $strr = "select * from subject where id=$id";
    $strrr = mysqli_query($conn,$strr);
    $row = mysqli_fetch_assoc($strrr);
?>
<?php 
    
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Username & cleanup
            $sname=($_POST['sname']);

            $check="SELECT * FROM subject where sname='".$sname."'";
            $result=mysqli_query($conn,$check);

            $pattern = "/^[a-zA-z]*$/";
            if(empty($sname) || preg_match($pattern,$sname) === 0) {
                $msg = "Only alphabets allowed.";
            }
            else{
                if(ISSET($_POST['status']))
                    $active = 1;
                else
                    $active = 0;   
                $st = "UPDATE subject SET
                sname='".$sname."',status='$active' where id='$id'";
                mysqli_query($conn,$st);
                header('location:subject.php');
            }
        }  
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Batch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
        body{
    margin-top:20px;
    background:#f8f8f8;
    }
    .error{
        color:#ff0000;
    }
  </style>
</head>
<body>
    <?php 
        include 'a_navbar.php';
    ?>   
        <div class="container-xl px-4">
        <hr class="mt-0 mb-5">
        <hr class="mt-0 mb-5">
        <div class="row">
            <div class="col-xl-3">

            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header text-center"><h3><b>Edit Subject(<p class="badge text-danger"><?php echo $row["sname"]?></p>)</b></h3></div>
                    <div class="card-body">
                    <form method="post">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Batch Name</label>
                                    <input class="form-control" name="sname" type="text" value="<?php echo (isset($_POST['sname']))?$_POST['sname']:$row["sname"];?>">
                                    
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" name="status" class="form-check-input ml-3 mt-3" <?php echo ($row["status"]==1)? 'checked':''?>>
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <span class="error"><?php if(isset($_POST['submit']))echo $msg;?></span>
                                            <a type="button" href="subject.php" class="btn btn-lg btn-secondary mr-5">Close</a>
                                            <button type="submit" name="submit" class="btn btn-lg btn-primary mr-5">Save</button>
                                        </div>
                                    </div>
                            </div>                      
                    </div>
            </div>
        </div>
    </div>   
</body>
</html>