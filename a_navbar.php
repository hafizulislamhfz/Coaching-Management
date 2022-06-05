<?php
    if(ISSET($_POST["logout"])){
    header('location: login.php');
    }
?>
<?php include 'connection.php'; ?>
<?php 
    $bs="SELECT * FROM subject";
    $bsq=mysqli_query($conn,$bs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
  </script>
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Coaching Centre</a>
                
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>
                
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><span class="nav-item badge badge-info mt-5">Admin</span></li>
                        <li><a href="batch.php" type="button" class="nav-item nav-link">Batch</a></li>
                        <li><a href="subject.php" type="button" class="nav-item nav-link">Subject</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">Teachers</a>
                            <div class="dropdown-menu">
                                <a href="teacher.php" class="dropdown-item">All Teachers</a>
                                <?php 
                                if(mysqli_num_rows($bsq)>0){
                                     while($rowsss = mysqli_fetch_assoc($bsq)){ ?>
                                     <?php if($rowsss["status"]==1){?>
                                        <a href="#" class="dropdown-item"><?php echo $rowsss["sname"];?></a>
                                     <?php
                                     }}
                                }?>

                            </div>
                        </li>
                        <li><a class="nav-item nav-link" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Students</a></li>
                            <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>Students</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="" method="post">
                                            <label class="">Select batch</label>
                                            <select class="form-select mb-4">
                                                <option>Select batch...</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <a type="submit" href="student.php" class="btn btn-primary" >Submit</a>
                                            </div>
                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                        <li><a class="nav-item nav-link" type="button" data-bs-toggle="modal" data-bs-target="#myModal1">Security</a></li>
                            <!-- The Modal -->
                                <div class="modal" id="myModal1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>Change Password</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="" method="post">
                                            <!-- Modal body -->
                                            <div class="mb-3">
                                                <label class="small mb-1 ml-2" for="currentPassword">Current Password</label>
                                                <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1 ml-2" for="newPassword">New Password</label>
                                                <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1 ml-2" for="confirmPassword">Confirm Password</label>
                                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="submit">Save change</button>
                                            </div>                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">Finance</a>
                            <div class="dropdown-menu">
                                <a href="a_finance.php" class="dropdown-item">Teacher's Salary</a>
                                <a href="a_finance.php" class="dropdown-item">Student's Payment</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">Chat</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">All messages</a>
                                <a href="#" class="dropdown-item">Chat with Teacher</a>
                                <a href="#" class="dropdown-item">Notice to Students</a>
                            </div>
                        </li>
                            <form method="post">
                                <li><button name="logout" class="btn btn-md btn-block btn-primary  mt-5 ml-5" type="submit">Logout <i class="fas fa-sign-out-alt" title="Logout"></i></button></li>
                            </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
 

<script>
    jQuery(function($) {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 200) {
                $('.navbar').addClass('fixed-top');
            } else if ($(this).scrollTop() == 0) {
                $('.navbar').removeClass('fixed-top');
            }
        });
        
        function adjustNav() {
            var winWidth = $(window).width(),
                dropdown = $('.dropdown'),
                dropdownMenu = $('.dropdown-menu');
            
            if (winWidth >= 768) {
                dropdown.on('mouseenter', function() {
                    $(this).addClass('show')
                        .children(dropdownMenu).addClass('show');
                });
                
                dropdown.on('mouseleave', function() {
                    $(this).removeClass('show')
                        .children(dropdownMenu).removeClass('show');
                });
            } else {
                dropdown.off('mouseenter mouseleave');
            }
        }
        
        $(window).on('resize', adjustNav);
        
        adjustNav();
    });
</script>

