<?php include 'connection.php'; ?>
<?php 
    $str="SELECT * FROM subject";
    $data=mysqli_query($conn,$str);
?>
<?php 
    if(isset($_POST['b_submit'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $sname=$_POST['sname'];
            $status=$_POST['status'];
            if($status!=1){
                $status=0;
            }
            $check="SELECT * FROM subject where sname='".$sname."'";
            $result=mysqli_query($conn,$check);

            $pattern = "/^[a-zA-z]*$/";
            if(empty($sname) || preg_match($pattern,$sname) === 0) {
                echo '<script>alert("Only alphabets allowed.");</script>';
            }
            else if(mysqli_num_rows($result)>0){
                    echo '<script>alert("Subject name already exist.");</script>';
            }  
            else{
                $string="INSERT INTO subject(sname,status) VALUES ('".$sname."','".$status."')";
                if($data=mysqli_query($conn,$string)){
                    header('location:subject.php');
                }
            }
        }  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subject List</title>
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
                <li class="nav-item"><a class="nav-link active" href="#"><b>Subject list</b></a></li>
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
                                <th>Subject Name</th>
                                <!-- <th class="max-width align-middle text-center">Starting Time</th> -->
                                <th class="align-middle text-center">Status</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(mysqli_num_rows($data)>0){
                             while($row = mysqli_fetch_assoc($data)){ ?>
                            <tr>
                                <td class="align-middle"><?php echo $row["sname"]?></td>
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
                                        <a class="btn btn-sm btn-secondary badge" type="button" href="subject_edit.php?id=<?php echo $row['id']?>">Edit</a>
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
                                                        Are you sure you want to delete <b><?php echo $row['sname']?></b>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a button type="button" href="subject_delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">DELETE</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                        <!-- delate modal start-->
                                    </div>
                                </td>
                            </tr><?php
                                        }
                                    }
                                ?>
                        </tbody>
                            <!-- edit sub Modal
                            <div class="modal" tabindex="-1" id="edit">
                                <div class="modal modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>Edit subject</b></h4>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Subject Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" required>
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
                        <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#sub">Add new Subject</button>
                    </div>
                    <!--add sub Modal -->
                        <div class="modal" id="sub">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Add New Subject</b></h4>
                                </div>        
                                    <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Subject Name</label>
                                            <input type="text" class="form-control" id="sname" name="sname" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" class="form-check-input ml-3 mt-3" value="1" name="status" checked>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="b_submit" class="btn btn-primary mr-5">Add</button>
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
                            $q="SELECT ID FROM subject ORDER BY id";
                            $qrun=mysqli_query($conn,$q);
                            $ro=mysqli_num_rows($qrun);
                            echo $ro;

                        ?>
                        </small></a></li>
                        <li class="nav-item ml-5"><a href="" class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;
                        <?php 
                            $qn="SELECT status FROM subject id where status='1'";
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
