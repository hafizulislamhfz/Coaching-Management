<?php
    if(ISSET($_POST["submit"])){
        
        header('location:s_profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
    <?php 
        include 's_navbar.php';
    ?>
    <div class="container-xl px-4">
        <hr class="mt-0 mb-5">
        <hr class="mt-0 mb-5">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <span class="badge badge-primary">Upload new image</span>
                        <input type="file" class="form-control-file btn-sm  ml-5 mt-2" id="exampleFormControlFile1">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Personal Information</div>
                    <div class="card-body">
                    <form method="post" action="">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" type="text" value="Valerie" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" value="Luna" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" value="name@example.com" disabled>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Father's Name</label>
                                    <input class="form-control" id="inputFirstName" type="text" value="Valerie" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Mother's name</label>
                                    <input class="form-control" id="inputLastName" type="text" value="Luna" required>
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Gender</label>
                                    <input class="form-control" id="inputOrgName" type="text" value="Start Bootstrap" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday(dd/mm/yyyy)</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" value="06/10/1988" required>
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" value="555-123-4567" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Location</label>
                                    <input class="form-control" id="inputLocation" type="text" value="San Francisco, CA" required>
                                </div>
                            </div>                       
                        </div>
                        <div class="card-header mt-4">Other information</div>
                        <div class="card-body">
                                <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input class="form-control" id="inputEmailAddress" type="text" value="name@example.com" disabled>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Roll</label>
                                        <input class="form-control" id="inputFirstName" type="text" value="Valerie" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Batch</label>
                                        <input class="form-control" id="inputLastName" type="text" value="Luna" disabled>
                                    </div>
                                </div>                      
                            <button class="btn btn-primary" type="submit" name="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

