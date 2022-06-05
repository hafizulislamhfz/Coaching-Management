<?php include 'connection.php'; ?>
<?php 
    $str="SELECT * FROM batch";
    $data=mysqli_query($conn,$str);
?>
<?php 
    if(isset($_POST['b_submit'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Username & cleanup
            $bname=$_POST['bname'];
            $started=$_POST['started'];
            $bstatus=$_POST['bstatus'];
            if($bstatus!=1){
                $bstatus=0;
            }
            $checkuser="SELECT * FROM batch where bname='".$bname."'";
            $result=mysqli_query($conn,$checkuser);

            $pattern = "/^[a-z0-9 .\-]+$/i";
            if(empty($started) || preg_match($pattern,$started,) === 0) {
                $msg = "*Invalid.Only alphanumeric.";
            }
            else if(empty($bname) || preg_match($pattern,$bname) === 0) {
                $msg = "*Invalid.Only alphanumeric.";
            }
            else if(mysqli_num_rows($result)>0){
                    echo '<script>alert("Batch name already Exist.");</script>';
            }  
            else{
                $string="INSERT INTO batch(bname,started,status) VALUES ('".$bname."','".$started."','".$bstatus."')";
                if($data=mysqli_query($conn,$string)){
                    header('location: batch.php');
                }
            }
        }  
    }
?>
<!-- new bacth add -->
<?php 
//   if(ISSET($_POST['b_submit'])){
//     $bname=$_POST['bname'];
//     $started=$_POST['started'];
//     $bstatus=$_POST['bstatus'];
//     if($bstatus!=1){
//         $bstatus=0;
//     }
    
//     $str="INSERT INTO batch(bname,started,status) VALUES ('".$bname."','".$started."','".$bstatus."')";
//     if($data=mysqli_query($conn,$str)){
//         header('location: batch.php');
//     }
//   }
?>
<!-- edit bacth -->



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batch list</title>
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
  </style>
</head>
<body>
    <?php include 'a_navbar.php'?>
    <div class="container">
        <div class="col">
            <div class="e-tabs mb-3 px-3">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#"><b>Batch</b></a></li>
            </ul>
            </div>

            <div class="row flex-lg-nowrap">
            <div class="col mb-3">
                <div class="e-panel card">
                <div class="card-body">
                    <div class="e-table">
                    <div class="table-responsive table-lg mt-3">
                        <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Batch Name</th>
                                <th class="max-width align-middle text-center">Starting Time</th>
                                <th class="align-middle text-center">Status</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php if(mysqli_num_rows($data)>0){
                                        while($row = mysqli_fetch_assoc($data)){ ?>
                                        <tr>
                                            <td class="align-middle"><?php echo $row["bname"]?></td>
                                            <td class="align-middle text-center"><?php echo $row["started"]?></td>
                                            <td class="text-nowrap align-middle text-center">
                                                <?php 
                                                    if($row["status"]==1){
                                                         echo '<span class="badge badge-primary">Active</span>';
                                                    }
                                                    else{
                                                         echo '<span class="badge badge-danger">Inctive</span>';
                                                    }?>
                                                
                                            </td>  
                                            <td class="text-center align-middle">
                                                <div class="btn-group align-top">
                                                    <a class="btn btn-sm btn-secondary badge" href="batch_edit.php?id=<?php echo $row['id'] ?>" type="button">Edit</a>
                                                    <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete<?php echo $row['id']?>"><i class="fa fa-trash"></i></button>
                                                    <!-- delate modal start -->
                                                    <div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" style="color: #FF0000;"><b>Delete Confirmation</b></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body text-left">
                                                                                Are you sure you want to delete <b><?php echo $row['bname'] ?></b>?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <a button type="button" class="btn btn-danger" href="batch_delete.php?id=<?php echo $row['id']?>">DELETE</a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                 </div>
                                                     <!-- delate modal end-->
                                                </div>
                                            </td>  
                                        </tr><?php
                                        }
                                    }
                                ?>
                        </tbody>
                        <!-- edit batch Modal -->
                        <!-- <div class="modal" tabindex="-1" id="edit">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Edit Batch</b></h4>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Batch Name</label>
                                            <input type="text" class="form-control" id="" name="bname" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Starting time(dd/mm/yyyy)</label>
                                            <input type="text" class="form-control" id="" name="started" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" class="form-check-input ml-3 mt-3" value="1">
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary mr-5">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                            <!-- edit batch Modal end -->
                            
                        </table>
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        <ul class="pagination mt-3 mb-0">
                            <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                            <li class="active page-item"><a href="#" class="page-link">1</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">2</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">3</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">4</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">5</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">›</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">»</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="text-center px-xl-3">
                        <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#batch">Add new Batch</button>
                        <span class="error"><?php if(isset($_POST['submit']))echo $msg;?></span>
                    </div>
                    <!--add batch Modal -->
                        <div class="modal" id="batch">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Add new Batch</b></h4>
                                </div>        
                                    <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Batch Name</label>
                                            <input type="text" class="form-control" id="" name="bname" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Starting time(dd/mm/yyyy)</label>
                                            <input type="text" class="form-control" id="" name="started" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" class="form-check-input ml-3 mt-3" value="1" name="bstatus" checked>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="submit" class="btn btn-primary mr-5" name="b_submit">Add</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-3">
                    <div class="e-navlist e-navlist--active-bold">
                    <ul class="nav">
                    <li class="nav-item active mr-5"><a href="" class="nav-link"><span>All</span>&nbsp;<small>/&nbsp;
                        <?php 
                            $q="SELECT ID FROM batch ORDER BY id";
                            $qrun=mysqli_query($conn,$q);
                            $ro=mysqli_num_rows($qrun);
                            echo $ro;

                        ?>
                        </small></a></li>
                        <li class="nav-item ml-5"><a href="" class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;
                        <?php 
                            $qn="SELECT status FROM batch id where status='1'";
                            $qrunn=mysqli_query($conn,$qn);
                            $ron=mysqli_num_rows($qrunn);
                            echo $ron;

                        ?>
                        </small></a></li>
                    </ul>
                    </div>
                    <hr class="my-3">
                    <div>
                    <div class="form-group">
                        <label>Search by Name:</label>
                        <div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

                
        </div>
        </div>
    </div>
</body>
</html>


