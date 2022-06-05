<?php include 'connection.php'; ?>

<?php 
  if(ISSET($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $str="SELECT * FROM login where username='".$username."' and password='".$password."'";
    $data=mysqli_query($conn,$str);
    if($row=mysqli_fetch_array($data)){
    if($row["role"]=="admin"){
      header('location:a_finance.php');
    }else if($row["role"]=="teacher"){
      header('location:t_profile.php');
    }else if($row["role"]=="student"){
      header('location:s_profile.php');
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/modal.css" />
    <title>Sign in OR Sign up</title>
    <!-- <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
    </script> -->
</head>
<body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <span style="color:#ff0000;"><?php if(isset($_POST["username"]))echo "*Invalid username or password.";?></span>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
              
            </div>
            <input type="submit" value="Login" class="btn solid" name="submit"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            
          </form>
          <form method="post" action="" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required/>
            </div>
            <!-- <div class="input-field">
              <i class="fas fa-info-circle"></i>
              <select name="session" id="session" class="input-field" style="height:37px;width:300px;border-radius:50px;overflow:hidden;" required>
                <option value="volvo" selected>Select Session</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
            </div> -->
            <div class="input-field">
              <i class="fas fa-info-circle"></i>
              <select name="batch" id="batch" class="input-field" style="height:37px;width:300px;border-radius:50px;" required>
                  <option value="volvo">Select Batch</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Re-enter Password" required/>
            </div>
            <!-- <a href="s_edit_profile.php" type="button" class="btn">Sign up</a> -->
            <button type="submit" class="btn" name="signup">Sign up</button>
          </form>
          <?php
            if(ISSET($_POST["signup"])){
              
              header('location:s_edit_profile.php');
            }
          ?>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>COACHING CENTRE</h1>
            <p>
              Prabartak Circle, 1/A O.R. Nizam Rd, Chattogram
            </p>
            <h4>Register as a student?</h4>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <div class="social-media">
               <button type="button"  id="modal-btn" class="btn" style="margin:6px;">Contact</button>
               <!-- modal start -->
               <div id="my-modal" class="modal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close">&times;</span>
                      <h2>CONTACT</h2>
                    </div>
                    <div class="modal-body">
                      <h3>Coaching Centre</h3>
                      <p>Administrative Building(Ground Floor)-1000,Prabartak Circle,<br>Chittagong,Bangladesh.</p>
                      <p>Phone: +88-09666911463<br>
                      Fax: 880-2-9667222<br>
                      Email: vcoffice@cc.ac.bd, registrar@cc.ac.bd</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn transparent">Open Map</button> 
                    </div>
                  </div>
                </div>
                <button type="button"  id="modal-btn1" class="btn" style="margin:6px;">About Us</button>
               <!-- modal start -->
               <!-- <div id="my-modal1" class="modal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close1">&times;</span>
                      <h2>Please CONTACT</h2>
                    </div>
                    <div class="modal-body">
                      <h3>Coaching Centre</h3>
                      <p>Administrative Building(Ground Floor)-1000,Prabartak Circle,<br>Chittagong,Bangladesh.</p>
                      <p>Phone: +88-09666911463<br>
                      Fax: 880-2-9667222<br>
                      Email: vcoffice@cc.ac.bd, registrar@cc.ac.bd</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn transparent">Open Map</button> 
                    </div>
                  </div>
                </div>  -->
            </div>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>COACHING CENTRE</h1>
            <p>
              Prabartak Circle, 1/A O.R. Nizam Rd, Chattogram
            </p>
            <h5>One of Us?</h5>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
</body>
</html>



<script>
    // Get DOM Elements
  var modal = document.querySelector('#my-modal');
  var modalBtn = document.querySelector('#modal-btn');
  var closeBtn = document.querySelector('.close');
  var modal1 = document.querySelector('#my-modal1');
  var modalBtn1= document.querySelector('#modal-btn1');
  var closeBtn1 = document.querySelector('.close1');

  // Events
  modalBtn.addEventListener('click', openModal);
  closeBtn.addEventListener('click', closeModal);
  window.addEventListener('click', outsideClick);
  modalBtn1.addEventListener('click', openModal1);
  closeBtn1.addEventListener('click', closeModal1);
  window.addEventListener('click', outsideClick1);

  // Open
  function openModal() {
    modal.style.display = 'block';
  }
  function openModal1() {
    modal.style.display = 'block';
  }


  // Close
  function closeModal() {
    modal.style.display = 'none';
  }
  function closeModal1() {
    modal.style.display = 'none';
  }

  // Close If Outside Click
  function outsideClick(e) {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  }
  function outsideClick1(e) {
    if (e.target == modal) {
      modal.style.display = 'none';
    }
  }

</script>
<script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
    });
</script>