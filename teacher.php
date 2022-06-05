<?php include 'connection.php'; ?>
<?php 
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Username & cleanup
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $j_date=$_POST['j_date'];
            $username=$_POST['username'];
            $password=$_POST['password'];

            $demail="SELECT * FROM information where email='".$email."'";
            $echeck=mysqli_query($conn,$demail);
            $duser="SELECT * FROM information where username='".$username."'";
            $ucheck=mysqli_query($conn,$duser);

            $epattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
            $upattern="/^[a-z]\w{4,23}[^_]$/i";
            if(empty($email) || preg_match($epattern,$email) === 0) {
                echo '<script>alert("This Email is wrong.");</script>';
            }
            else if(empty($username) || preg_match($upattern,$username) === 0) {
                echo '<script>alert("Username not allow space and should between 4 to 23 characters.\nand must be start with letter.");</script>';
            }
            else if(mysqli_num_rows($echeck)>0){
                    echo '<script>alert("This email already Exist.");</script>';
            } 
            else if(mysqli_num_rows($ucheck)>0){
                echo '<script>alert("This username already Exist.");</script>';
            } 
            else{
                $istring="INSERT INTO information(fname,lname,email,username,password) 
                    VALUES ('".$fname."','".$lname."','".$email."','".$username."','".$password."')";
                $idata=mysqli_query($conn,$istring);
                $tstring="INSERT INTO teacher(j_date,username,subject) 
                    VALUES ('".$j_date."','".$username."','".$subject."')";
                $tdata=mysqli_query($conn,$tstring);
                if($username!="admin"){
                    $lstring="INSERT INTO login(username,password,role) 
                    VALUES ('".$username."','".$password."','teacher')";
                     $ldata=mysqli_query($conn,$lstring);
                }
                //     header('location: teacher.php');
            }
        }
    }  
?>
<?php 
    // $teastr = "select subject.sname as subject from teacher
  	// 	INNER JOIN subject ON teacher.subject=subject.id";
    // $teaqry = mysqli_query($conn,$teastr);
    // $info="select * from information,teacher where information.username=teacher.username";
    $info="SELECT * FROM teacher LEFT JOIN subject ON teacher.subject=subject.id LEFT JOIN information ON teacher.username=information.username";
    $infoqry=mysqli_query($conn,$info);
    // $row = mysqli_fetch_assoc($strrr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher</title>
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
                <li class="nav-item"><a class="nav-link active" href="#"><b>Teacher list</b></a></li>
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
                                <th>ID</th>
                                <th class="align-middle text-center">First Name</th>
                                <th class="align-middle text-center">Last Name</th>
                                <th class="align-middle text-center">Email</th>
                                <th class="align-middle text-center">Subject</th>
                                <th class="align-middle text-center">Joining date</th>
                                <th class="max-width align-middle text-center">Username</th>
                                <th class="align-middle text-center">Password</th>
                                <th class="align-middle text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php if(mysqli_num_rows($infoqry)>0){
                                        while($infoqryrow = mysqli_fetch_assoc($infoqry)){ ?>
                                            <tr>
                                                <td class="align-middle">00<?php echo $infoqryrow["id"]?></td>
                                                <td class="align-middle text-center"><?php echo $infoqryrow["fname"]?></td>
                                                <td class="align-middle text-center"><?php echo $infoqryrow["lname"]?></td>
                                                <td class="align-middle text-center"><?php echo $infoqryrow["email"]?></td>
                                                <td class="align-middle text-center"><?php echo $infoqryrow["sname"]?></td>
                                                <td class="align-middle text-center"><?php echo $infoqryrow["j_date"]?></td>
                                                <td class="align-middle"><?php echo $infoqryrow["username"]?></td> 
                                                <td class="align-middle"><?php echo $infoqryrow["password"]?></td>
                                                <td class="text-center align-middle">
                                                    <div class="btn-group align-top">
                                                        <a class="btn btn-sm btn-secondary badge" href="teacher_edit.php?username=<?php echo $infoqryrow['username']?>" type="button">Edit</a>
                                                        <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete<?php echo $infoqryrow['username']?>"><i class="fa fa-trash"></i></button>
                                                        <!-- delate modal start -->
                                                        <div class="modal fade" id="delete<?php echo $infoqryrow['username']?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" style="color: #FF0000;"><b>Delete Confirmation</b></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body text-left">
                                                                                    <p>Are you sure you want to delete <b><?php echo $infoqryrow['fname']." ".$infoqryrow['lname'];?></b>?</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <a button type="button" href="delete_category.php?id=" class="btn btn-danger">DELETE</a>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                            <!-- delate modal start-->
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }?>
                           
                            <!-- <tr>
                                <td class="align-middle">101</td>
                                <td class="align-middle text-center">Anik</td>
                                <td class="align-middle text-center">Sen</td>
                                <td class="align-middle text-center">aniksen@gmail.com</td>
                                <td class="align-middle text-center">Math</td>
                                <td class="align-middle text-center">10 January</td>
                                <td class="align-middle">anik_sen</td> 
                                <td class="align-middle">anik12345</td>
                                <td class="text-center align-middle">
                                    <div class="btn-group align-top">
                                        <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                        <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                        <!-- edit batch Modal -->
                        <!-- <div class="modal" tabindex="-1" id="edit">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Edit Teacher</b></h4>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" >ID</label>
                                            <input disabled type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">First Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Last Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Subject</label>
                                            <select class="form-control" id="exampleFormControlSelect1" required>
                                                <option>Select subject...</option>    
                                                <option>Bangla</option>
                                                <option>Math</option>
                                                <option>English</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Joining time(dd/mm/yyyy)</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Username</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary mr-5">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </table>
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        <ul class="pagination mt-3 mb-0" disabled>
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
                        <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#batch">Add new Teacher</button>
                    </div>
                    <!--add teacher Modal -->
                        <div class="modal" id="batch">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Add new Teacher</b></h4>
                                </div>        
                                    <div class="modal-body">
                                    <form action="" method="post">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" id="" name="fname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" id="" name="lname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" id="" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Subject</label>
                                                <select class="form-control" id="" name="subject" required>
                                                    <option value="0">Select subject...</option>    
                                                    <?php 
                                                        $bs="SELECT * FROM subject";
                                                        $bsq=mysqli_query($conn,$bs);
                                                        if(mysqli_num_rows($bsq)>0){
                                                            while($rowsss = mysqli_fetch_assoc($bsq)){ ?>
                                                             <?php if($rowsss["status"]==1){?>
                                                                <option value="<?php echo $rowsss["id"];?>"><?php echo $rowsss["sname"];?></option>
                                                            <?php
                                                            }}
                                                        }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Joining time(dd/mm/yyyy)</label>
                                                <input type="text" class="form-control" id="" name="j_date" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" class="form-control" id="" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" class="form-control" id="" name="password" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-primary mr-5">Add</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">
                    <div class="e-navlist e-navlist--active-bold">
                    <ul class="nav">
                        <li class="nav-item active"><a href="" class="nav-link ml-5"><span class="ml-5">All</span>&nbsp;<small>/&nbsp;
                        <?php 
                            $q="SELECT ID FROM teacher ORDER BY id";
                            $qrun=mysqli_query($conn,$q);
                            $ro=mysqli_num_rows($qrun);
                            echo $ro;

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
