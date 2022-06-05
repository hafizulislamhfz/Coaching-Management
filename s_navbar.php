<?php
    // if(ISSET($_POST["logout"])){
    // header('location: login.php');
    // }
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
                        <li><span class="badge badge-info mt-5">Hafizul Islam<br>ID:1001</span></li>
                        <li class="dropdown">
                                <a class="nav-item nav-link" data-toggle="dropdown">Profile</a>
                                <div class="dropdown-menu">
                                    <a href="s_profile.php" class="dropdown-item">Profile</a>
                                    <a href="s_edit_profile.php" class="dropdown-item">Edit Profile</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="nav-item nav-link" data-toggle="dropdown">Result</a>
                                <div class="dropdown-menu">
                                    <a href="s_profile.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal">Final Result</a>
                                        <!-- The Modal -->
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><b>Final Result</b></h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <!-- Modal body -->
                                                    <label for="">Select Batch</label>
                                                    <select class="form-select mb-4">
                                                        <option>Select batch...</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <a type="submit" href="s_result.php" class="btn btn-primary" >Submit</a>
                                                    </div>
                                                    
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#dresult">Detailed Result</a>
                                        <!-- The Modal -->
                                        <div class="modal" id="dresult">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><b>Detailed Result</b></h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="" method="post">
                                                    <!-- Modal body -->
                                                    <label for="">Select Batch</label>
                                                    <select class="form-select mb-4">
                                                        <option>Select batch...</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    <label for="">Select Subject</label>
                                                    <select class="form-select mb-4">
                                                        <option>Select Subject...</option>
                                                        <option>All Subjects</option>
                                                        <option>Bangla</option>
                                                        <option>English</option>
                                                        <option>Math</option>
                                                    </select>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <a type="submit" href="s_result" class="btn btn-primary" >Submit</a>
                                                    </div>
                                                    
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </li>
                                
                            <li><a class="nav-item nav-link" type="button" data-bs-toggle="modal" data-bs-target="#myModal3">Enrollment</a></li>
                                <!-- The Modal -->
                                    <div class="modal" id="myModal3">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title"><b>Enrollment</b></h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="" method="post">
                                                <!-- Modal body -->
                                                <!-- <select class="form-select mb-4">
                                                    <option>Select session...</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> -->
                                                <label for="">Select Batch</label>
                                                <select class="form-select mb-4">
                                                    <option>Select batch...</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <!-- <button type="submit" class="btn btn-primary" >Submit</button> -->
                                                    <span class="badge badge-info mr-5">Enrollment will open soon...</span>
                                                </div>
                                                
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                            
                            <li><a href="s_payment.php" type="button" class="nav-item nav-link">Payment</a></li>
                            <li class="dropdown">
                                <a href="#" class="nav-item nav-link" data-toggle="dropdown">Chat</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">All messages</a>
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#teacher">Chat with Teacher</a>
                                    <!-- ########################################################################### -->
                                    <div class="modal" id="teacher">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>Chat with Teacher</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="" method="post">
                                            <!-- Modal body -->
                                            <div class="mb-3">
                                                <label for=""class="text-center">Chat as:</label>
                                                <span class="badge badge-info">Hafizul Islam<br>ID:1001</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for=""class="text-center">Chat to:</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select teacher.....</option>
                                                    <option value="">Anik Sen</option>
                                                    <option value="">Ariful Hauqe</option>
                                                    <option value="">Mehedi Hasan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Your Message</label>
                                                <textarea class="form-control" id="" placeholder="Write your message here...." rows="3"></textarea>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                            </div>                                            
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- ######################################################################### -->
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#complain">Complain to Authority</a>
                                    <!-- ########################################################################### -->
                                    <div class="modal" id="complain">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>Complain to Authority</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="" method="post">
                                            <!-- Modal body -->
                                            <div class="mb-3">
                                                <label for=""class="text-center">Complain as:</label>
                                                <span class="badge badge-info">Hafizul Islam<br>ID:1001</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Your Message</label>
                                                <textarea class="form-control" id="" placeholder="Write your message here...." rows="3"></textarea>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                            </div>                                            
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- ######################################################################### -->
                                </div>
                            </li>
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
                            <li><a class="nav-item nav-link" type="button" data-bs-toggle="modal" data-bs-target="#myModal2">Contact</a></li>
                            
                            <!-- The Modal -->
                                <div class="modal" id="myModal2">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title ml-4"><b>Address</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div >
                                            <h3 class="text-center">Coaching Centre</h3>
                                            <p class="text-center">Administrative Building(Ground Floor)-1000,Prabartak Circle,<br>Chittagong,Bangladesh.</p>
                                            <p class="text-center">Phone: +88-09666911463<br>
                                            Fax: 880-2-9667222<br>
                                            Email: vcoffice@cc.ac.bd, registrar@cc.ac.bd</p>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">Open Map</button>
                                                <div class="modal" id="myModal4">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title ml-4"><b>Address on Map</b></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div >
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7978375694624!2d91.82927417483073!3d22.361261027660795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd06e943f136ad453!2sPremier%20University%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1654060807694!5m2!1sen!2sbd" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <li><a href="login.php" class="nav-item btn btn-md btn-primary  mt-5 ml-5" type="button">Logout <i class="fas fa-sign-out-alt" title="Logout"></i></a></li>
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

